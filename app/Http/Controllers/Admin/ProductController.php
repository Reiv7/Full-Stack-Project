<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.products.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $products = new Product();
        if($request->hasFile('img')){
            $request->validate([
                'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144|',],['img.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/products/' , $filename);
            $products->img = $filename;
        }
        $products->cate_id = $request->input('cate_id');
        $products->name = $request->input('name');
        $products->subcategories = $request->input('subcategories');
        $products->smol_dscrp = $request->input('smol_dscrp');
        $products->dscrp = $request->input('dscrp');
        $products->o_price = $request->input('o_price');
        $products->s_price = $request->input('s_price');
        $products->qty = $request->input('qty');
        $products->tax = $request->input('tax');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords= $request->input('meta_keywords');
        $products->meta_dscrp = $request->input('meta_dscrp');
        $products->save();

        return redirect('products')->with('status', "Product Added Successfully !");
    }
    public function edit($id)
    {
        $products = Product::find($id);

        return view('admin.products.edit', compact('products'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if($request->hasFile('img')){
            $path = '/uploads/products/'.$products->img;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $request->validate([
                'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144|',],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/products/' , $filename);
            $products->img = $filename;
        }
        $products->name = $request->input('name');
        $products->subcategories = $request->input('subcategories');
        $products->smol_dscrp = $request->input('smol_dscrp');
        $products->dscrp = $request->input('dscrp');
        $products->o_price = $request->input('o_price');
        $products->s_price = $request->input('s_price');
        $products->qty = $request->input('qty');
        $products->tax = $request->input('tax');
        $products->status = $request->input('status') == TRUE ? '1':'0';
        $products->trending = $request->input('trending') == TRUE ? '1':'0';
        $products->meta_title = $request->input('meta_title');
        $products->meta_keywords= $request->input('meta_keywords');
        $products->meta_dscrp = $request->input('meta_dscrp');
        $products->update();
        return redirect('products')->with('status' , "Product Updated Successfully !");
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $path = '/uploads/products/'.$products->img;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $products->delete();
        return redirect('products')->with('status' , "Product Deleted Successfully !");

    }
}
