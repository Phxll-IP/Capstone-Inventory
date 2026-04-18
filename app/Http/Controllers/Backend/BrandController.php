<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\GD\Driver;

class BrandController extends Controller
{
    public function AllBrand(){
        $brand = Brand::latest()->get();
        return view('admin.backend.brand.all_brand', compact('brand'));
    }
    //end method

    public function AddBrand(){

        return view('admin.backend.brand.add_brand');
    }
    //end method

    public function StoreBrand(Request $request){

    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->cover(100, 90)->save(public_path('upload/brand/' . $name_gen));
        $save_url = 'upload/brand/' . $name_gen;

        Brand::create([
            'name' => $request->name,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification);
        }
    }
    //end method

    public function EditBrand($id){
        $brand = Brand::find($id);
        return view('admin.backend.brand.edit_brand', compact('brand'));
    }
    //end method

    public function UpdateBrand(Request $request){

    $brand_id = $request->id;
    $brand = Brand::find($brand_id);

    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->scale(200, 190)->save(public_path('upload/brand/' . $name_gen));
        $save_url = 'upload/brand/' . $name_gen;

        if (file_exists(public_path($brand->image))) {
            unlink(public_path($brand->image));
        }

        Brand::find($brand_id)->update([
            'name' => $request->name,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.brand')->with($notification);
        }
        else {
            Brand::find($brand_id)->update([
                'name' => $request->name,
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.brand')->with($notification);
        }
    }
    //end method

    public function DeleteBrand($id){
        $brand = Brand::find($id);
        $img = $brand->image;
        unlink($img);

        Brand::find($id)->delete();

        $notification = array(
            'Brand' => 'Brand Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
