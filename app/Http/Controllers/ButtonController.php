<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Button;
use File;
use Image;


class ButtonController extends Controller
{
    public function index(){
        $button= Button::orderby('id', 'asc')->get();
        return view('backend.pages.button.index', compact('button'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $button= new Button();
        $button->name= $request ->name;
        $button->button_slug=uniqid();
        $image=$request->file('image');
        $imgCustomName= rand().'.'.$image->getClientOriginalExtension();
        $location=public_path('backend/button/'.$imgCustomName);
        image::make($image)->save($location);
        $button->image=$imgCustomName;
        $button->save();
        return redirect()->route('button.create');
    }
    public function active($slug)
    {
        $product = Button::where('button_slug', $slug)->update(['status' => 1]);
        return redirect()->back();
    }
    public function deactive($slug)
    {
        $product = Button::where('button_slug', $slug)->update(['status' => 2]);
        // if ($button) {
        //     $notification = array(
        //         'message' => 'Button Status Updated!',
        //         'alert-type' => 'success',
        //     );
        // } else {
        //     $notification = array(
        //         'message' => 'Button Update Failed!',
        //         'alert-type' => 'error',
        //     );
        return redirect()->back();
    }
}
