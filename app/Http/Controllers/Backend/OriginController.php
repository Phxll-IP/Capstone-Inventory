<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Origin;
use App\Models\Borrower;

class OriginController extends Controller
{
    public function AllOrigin(){
        $origin = Origin::latest()->get();
        return view('admin.backend.origin.all_origin', compact('origin'));
    }
    // End Method

    public function AddOrigin(){
        return view('admin.backend.origin.add_origin');
    }
    // End Method

     public function StoreOrigin(Request $request){
    $validated = $request->validate([
        'item_name' => 'required|string|max:255',
        'name'      => 'required|string|max:255',
        'email'     => 'required|email',
        'phone'     => 'nullable|string|max:20',
        'location'  => 'nullable|string|max:255',
    ]);

    Origin::create([
        'item_name' => $validated['item_name'],
        'name'      => $validated['name'],
        'email'     => $validated['email'],
        'phone'     => $validated['phone'],
        'location'  => $validated['location'],
    ]);

    $notification = array(
        'message'    => 'Origin Added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.origin')->with($notification);
}
    //End method

    public function EditOrigin($id){
        $origin = Origin::find($id);
        return view('admin.backend.origin.edit_origin', compact('origin'));
    }
    // End Method

    public function UpdateOrigin(Request $request){
        $origin_id = $request->id;
        Origin::find($origin_id)->update([
            'item_name' => $request['item_name'],
            'name'      => $request['name'],
            'email'     => $request['email'],
            'phone'     => $request['phone'],
            'location'  => $request['location'],
        ]);

        $notification = array(
            'message'    => 'Origin Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.origin')->with($notification);
    }
    // End Method

    public function DeleteOrigin($id){
        Origin::find($id)->delete();

        $notification = array(
            'message'    => 'Origin Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.origin')->with($notification);
    }
    // End Method


    // All Borrower Methods
    public function AllBorrower(){
        $borrower = Borrower::latest()->get();
        return view('admin.backend.borrower.all_borrower', compact('borrower'));
    }
    // End Method

    // Add Borrower Methods
    public function AddBorrower(){
        return view('admin.backend.borrower.add_borrower');
    }
    // End Method

    public function StoreBorrower(Request $request){
    $validated = $request->validate([
        'item_name' => 'required|string|max:255',
        'name'      => 'required|string|max:255',
        'email'     => 'required|email',
        'phone'     => 'nullable|string|max:20',
        'location'  => 'nullable|string|max:255',
    ]);

    Borrower::create([
        'item_name' => $validated['item_name'],
        'name'      => $validated['name'],
        'email'     => $validated['email'],
        'phone'     => $validated['phone'],
        'location'  => $validated['location'],
    ]);

    $notification = array(
        'message'    => 'Borrower Added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.borrower')->with($notification);
}
    //End method

    public function EditBorrower($id){
        $borrower = Borrower::find($id);
        return view('admin.backend.borrower.edit_borrower', compact('borrower'));
    }
    // End Method

    public function UpdateBorrower(Request $request){
    $borrower_id = $request->id;

    // Explicitly use the Borrower model
    Borrower::findOrFail($borrower_id)->update([
        'item_name' => $request->item_name,
        'name'      => $request->name,
        'email'     => $request->email,
        'phone'     => $request->phone,
        'location'  => $request->location,
    ]);

    $notification = array(
        'message'    => 'Borrower Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.borrower')->with($notification);
}
    // End Method

    public function DeleteBorrower($id){
        Borrower::find($id)->delete();

        $notification = array(
            'message'    => 'Borrower Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.borrower')->with($notification);
    }
    // End Method

}
