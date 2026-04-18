<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockRooms;


class StockRoomsController extends Controller
{
    public function AllStockRooms(){
        $stockrooms = StockRooms::latest()->get();
        return view('admin.backend.stockrooms.all_stockrooms', compact('stockrooms'));
    }
    //end method

    public function AddStockRooms(){
        return view('admin.backend.stockrooms.add_stockrooms');
    }
    //end method

    public function StoreStockRooms(Request $request){
    $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'email'      => 'required|email|unique:stock_rooms,email|max:255',
        'phone'      => 'nullable|string|max:20',
        'location'   => 'nullable|string|max:255',
    ]);

    StockRooms::create([
        'name'       => $validated['name'],
        'email'      => $validated['email'],
        'phone'      => $validated['phone'],
        'location'   => $validated['location'],
    ]);

    $notification = array(
        'message'    => 'Stock Room Added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.stockrooms')->with($notification);
}
    //end method

    public function EditStockRooms($id){
        $stockroom = StockRooms::find($id);
        return view('admin.backend.stockrooms.edit_stockrooms', compact('stockroom'));
    }
    //end method

    public function UpdateStockRooms(Request $request){
    $stockroom_id = $request->id;
    $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'email'      => 'required|email|unique:stock_rooms,email,' . $stockroom_id,
        'phone'      => 'nullable|string|max:20',
        'location'   => 'nullable|string|max:255',
    ]);

    StockRooms::find($stockroom_id)->update([
        'name'       => $validated['name'],
        'email'      => $validated['email'],
        'phone'      => $validated['phone'],
        'location'   => $validated['location'],
    ]);

    $notification = array(
        'message'    => 'Stock Room Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.stockrooms')->with($notification);
}
    //end method

    public function DeleteStockRooms($id){
        StockRooms::find($id)->delete();

        $notification = array(
            'message'    => 'Stock Room Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
