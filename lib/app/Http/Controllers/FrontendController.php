<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    public function getHome(){
    	$data['featured'] = Product::where('prod_featured', 1)->orderBy('prod_id','desc')->take(5)->get();
    	$data['new'] = Product::orderBy('prod_id','desc')->take(5)->get();
    	return view('frontend.index',$data);
    }
    public function getDetail($id){
    	$data['featured'] = Product::where('prod_featured', 1)->orderBy('prod_id','desc')->take(5)->get();
    	$data['item'] = Product::find($id);
    	$data['catelist'] = Category::all();
    	return view('frontend.detail',$data);
    }
    public function getCate($id){
    	$data['cateshop'] = Category::find($id);
    	$data['items'] = Product::where('prod_cate', $id)->orderBy('prod_id','desc')->paginate(8);
    	return view('frontend.shop',$data);
    }
}
