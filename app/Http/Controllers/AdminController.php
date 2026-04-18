<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
   public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminLogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $verificationCode = random_int(100000, 999999);

        session(['verification_code' => $verificationCode, 'user_id' => $user->id ]);

        Mail::to($user->email)->send(new VerificationCodeMail());

        Auth::logout();

        return redirect('')->route('custom.verification.form')->with('status','Verification code sent to your email. Please check and enter the code to proceed.');
        }
        else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);

        }
    }

    public function ShowVerification(){
        return view('auth.login');
    }

    public function VerificationVerify(Request $request){
        $request->validate([
            'code' => 'required|numeric',
        ]);

        $verificationCode = session('verification_code');
        $userId = session('user_id');

        if ($request->input('code') == $verificationCode) {
            Auth::loginUsingId($userId);
            session()->forget(['verification_code', 'user_id']);
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->withErrors(['code' => 'Invalid verification code.']);
        }
    }
    //end of verification code

    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile', compact('profileData') );
    }

    //end of AdminProfile

    public function ProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images'), $filename);
            $data->photo = $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();

        $notification = array(
            'message' => 'Profile updated successfully.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    //end of ProfileStore

    private function deleteOldImage(string $oldPhotoPath): void {
        $fullPath = public_path('upload/user_images/' . $oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
    }

    //end of deleteOldImage

    public function PasswordUpdate(Request $request){

        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if (!Hash::check($request->old_password, $user->password)) {
            $notification = array(
                'message' => 'Old password is incorrect.',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::logout();

        $notification = array(
            'message' => 'Password updated successfully. Please log in again.',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }
    //end of PasswordUpdate

    public function FrontendMaintenance()
{
    $notification = array(
        'message'    => 'This page is currently under maintenance. Please check back soon!',
        'alert-type' => 'info'
    );

    return redirect()->back()->with($notification);
}
}
