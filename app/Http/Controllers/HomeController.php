<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
        }
        else {
            $categories= Category::all();
            $products= Product::all();
            $tags= Tag::all();            
            return view('dashboard',compact('categories' , 'products' ,'tags'));
        }
    }

    public function storecategory(Request $request){
        $image = $request->file(key: 'image')->getClientOriginalName();
        $request->file('image')->storeAs('public/inages/category',$image);
        $category = new Category();
        $category ->image = $image;
        $category ->details = request('details');
        $category -> save();
        return view('admin.home');
        }

    public function storeproduct(Request $request){
        $image = $request->file(key: 'image')->getClientOriginalName();
        $request->file('image')->storeAs('public/inages/product',$image);
        $product = new Product();
        $product ->image = $image;
        $product ->details = request('details');
        $product ->category_id = request('category_id');
        $product -> save();
        return view('admin.home');
    }



    public function tag(){
        return view('admin.tag');
    }

    public function category(){
        return view('admin.category');
    }

    public function product(){
        return view('admin.product');
    }

    public function showTag($id){
        $datas=Product::find($id);
        $data= $datas->tags;
        return view('showtag', compact('data','id'));
    }

    public function addcomment($id){
        $data=Product::find($id);
        return view('addcomment', compact('data','id'));
    }

    public function updateData(Request $request, $id){
        $comment=$request->input('comment');
        DB::update('update products set comment = ? where id = ?'
        ,[$comment ,$id]);
       
        $categories= Category::all();
        $products= Product::all();
        $tags= Tag::all();            
        return view('dashboard',compact('categories' , 'products' ,'tags'));
    }
}
