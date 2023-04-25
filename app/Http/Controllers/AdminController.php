<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function v_category()
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;

        $data->save();
        return redirect()->back();
    }
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back();
        
    }
    public function view_product()
    {
        $category=category::all();
        return view('admin.product',compact('category'));
        
    }
    public function add_product(Request $request)
    {
        
        $product=new product;
        $product->product_title=$request->title;
        $product->product_description=$request->description;
        $product->product_image=$request->image;
        $product->product_category=$request->category;
        $product->product_quantity=$request->quantity;
        $product->product_price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back();
        
    }
}
