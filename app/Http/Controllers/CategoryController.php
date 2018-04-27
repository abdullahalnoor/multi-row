<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function index(){
        $category = Category::orderBy('id','desc')->paginate(5);
        return view('category.index')->withCategory($category);
    }
    public function create(){
        return view('category.form');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'status'=>'required',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category');
    }
    public function deletOneMore(Request $request){
        $items =  $request->category_id;
        if($items){
            foreach($items as $item){
                Category::where('id',$item)->delete();
            }
        }
        return redirect()->route('category');
    }
    public function delete($id){
        Category::find($id)->delete();
        return redirect()->route('category');
    }
}
