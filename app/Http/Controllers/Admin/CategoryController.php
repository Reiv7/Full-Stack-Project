<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    //
    public function index(){

        $category = Category::all();
        return view('admin.category.index' , compact('category'));

    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('img')){
            $request->validate([
                'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144|',],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/' , $filename);
            $category->img = $filename;
        }
        $category->name=$request->input('name');
        $category->subcategories=$request->input('subcategories');
        $category->dscrp=$request->input('dscrp');
        $category->status=$request->input('status') == TRUE ? '1':'0';
        $category->popular=$request->input('popular')== TRUE ? '1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_dscrp=$request->input('meta_dscrp');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->save();
        return redirect('/dashboard')->with('status',"Category Added Successfully !");

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));

    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('img')){
            $path = '/uploads/category/'.$category->img;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $request->validate([
                'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:6144|',],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/' , $filename);
            $category->img = $filename;
        }
        $category->name=$request->input('name');
        $category->subcategories=$request->input('subcategories');
        $category->dscrp=$request->input('dscrp');
        $category->status=$request->input('status') == TRUE ? '1':'0';
        $category->popular=$request->input('popular')== TRUE ? '1':'0';
        $category->meta_title=$request->input('meta_title');
        $category->meta_dscrp=$request->input('meta_dscrp');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->update();

        return redirect('dashboard')->with('status','Category Updated Successfully !');

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $path = '/uploads/category/'.$category->img;
        if(File::exists($path)){
            File::delete($path);
        }
        $category->delete();
        
        return redirect('categories')->with('status', "Category Deleted Successfully !");

    }
    
}
