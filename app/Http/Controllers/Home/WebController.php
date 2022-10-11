<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\web;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class WebController extends Controller
{
    public function WebItems()
    {

        $web = web::latest()->get();
        return view('admin.web.web_all', compact('web'));
    } // End Method

    public function AddItems()
    {
        return view('admin.web.web_add');
    } // End Method

    public function StoreItem(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'product_category' => 'required',
            'product_image' => 'required',

        ], [

            'product_name.required' => 'Product Name  Required',
            'product_category.required' => 'Product Category  Required',
        ]);

        $image = $request->file('product_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(203, 160)->save('upload/products/' . $name_gen);
        $save_url = 'upload/products/' . $name_gen;

        web::insert([
            'product_name' => $request->product_name,
            'product_category' => $request->product_category,
            //'portfolio_description' => $request->portfolio_description,
            'product_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('web.items')->with($notification);
    } // End Method


    public function EditWeb($id)
    {

        $web = web::findOrFail($id);
        return view('admin.web.web_edit', compact('web'));
    } // End Method


    public function UpdateWeb(Request $request)
    {

        $web_id = $request->id;

        if ($request->file('product_image')) {
            $image = $request->file('product_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(203, 160)->save('upload/products/' . $name_gen);
            $save_url = 'upload/products/' . $name_gen;

            web::findOrFail($web_id)->update([
                'product_name' => $request->product_name,
                'product_category' => $request->product_category,
                //'product_description' => $request->product_description,
                'product_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('web.items')->with($notification);
        } else {

            web::findOrFail($web_id)->update([
                'product_name' => $request->product_name,
                'product_category' => $request->product_category,
                //  'product_description' => $request->product_description,


            ]);
            $notification = array(
                'message' => 'Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('web.items')->with($notification);
        } // end Else

    } // End Method 

    public function DeleteWeb($id)
    {

        $web = web::findOrFail($id);
        $img = $web->product_image;
        unlink($img);

        web::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method 
}
