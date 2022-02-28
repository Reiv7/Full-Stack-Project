<?php

namespace App\Http\Controllers\main;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function category()
    {
        $category = Category::where('status','1')->get();
        return view('main.category' , compact('category'));
    }
    public function viewcategory($subcategories)
    {
        if(Category::where('subcategories', $subcategories)->exists()){

            $category = Category::where('subcategories', $subcategories)->first();
            $products = Product::where('cate_id',$category->id)->where('status', '1')->get();
            return view('main.products.index', compact('category','products'));
        }else{
            return redirect('/')->with('status' , "Subcategory Not Exists");
        }
    }

    public function productview($cate_subcategories , $prod_subcategories)
    {
        if(Category::where('subcategories', $cate_subcategories)->exists())
        {

            if(Product::where('subcategories', $prod_subcategories)->exists())
            {

                $products = Product::where('subcategories',$prod_subcategories)->first();

                return view('main.products.view' , compact('products'));
            }
            else{

                return redirect('/')->with('status',"Link Broken , or Product not exist");

            }
        }
        else{

            return redirect('/')->with('status',"There's no category found");

        }

    }
    public function productlist()
    {
        $products = Product::select('name')->where('status','1')->get();
        $data = [];

        foreach ($products as $item)
        {
            $data[] = $item['name'];
        }
        return $data;
    }

    public function searchProduct(Request $request)
    {
        $searched_product = $request->product_name;

        if($searched_product != "")
        {
            $product = Product::where("name","LIKE","%$searched_product%")->first();
            if($product)
            {
                return redirect('category/'.$product->category->subcategories.'/'.$product->subcategories);
            }
            else
            {
                return redirect()->back()->with("status", "No Products Matchs your input ☹️");
            }
        }
        else{
            return redirect()->back();
        }
    }
}
