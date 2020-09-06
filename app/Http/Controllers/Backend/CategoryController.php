<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Session;


class CategoryController extends Controller
{
   
public function manage_category(){
    return view('Admin.Category.Manage-category');
}

public function get_data(){
  return Category::all();
}

public function store(Request $request){
  $category = new Category;
  $category->categoryName = ucfirst($request->categoryName);
  $category->categorySlug = $this->Slug_generatore($request->categoryName);
  $category->save();
  return ['success' => true, 'message' =>'Category insert successfully'];
}

public function update(request $request){
  if($request->has('id')){
      Category::find($request->input('id'))->update($request->all());
      return ['success' => true, 'message'=>'Updete successfully'];
  }
}
public function delete(request $request){
  if($request->has('id')){
      Category::find($request->input('id'))->delete($request->all());
      return ['success' => true, 'message'=>'Delete successfully'];
  }
}

















    
    // Slug_generatore method
    public function Slug_generatore($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));

    }
}