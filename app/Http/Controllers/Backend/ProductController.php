<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\user;
use Session;
use Image;

class ProductController extends Controller
{
  // view add_brand
  public function add_product(){
      $Brand = new Brand;
      $category = new Category;
      $brandRow = Brand::orderBy('id', 'DESC')->get();
      $categoryRow = Category::orderBy('id', 'DESC')->get();
    return view('Admin.Product.Add-product', compact('brandRow', 'categoryRow'));
}

// save_product items
public function save_product(Request $request){
    $product = new Product;

    $userId =  1;
    $product->productName  = ucfirst($request->productName);
    $product->productSlug  = $this->Slug_generatore($request->productName);
    $product->brandId      = $request->brand;
    $product->categoryId   = $request->category;
    $product->description  = $request->description;
    $product->price        = $request->price;
    $product->discount     = $request->discount;
    $product->status       = 1;
    $product->availability = $request->availability;
    $product->adminId      = $userId;
    if($request->hasFile('proThumbnail')){
        // insert  that prothumbnail
        $image = $request->file('proThumbnail');
       if($image->isValid()){
            $imageName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $orginalImgName = rand(111, 99999).'.'.$extension;
            $product->thumbnail = $orginalImgName;
            $location = public_path('assets\web\images\NewProduct/'.$orginalImgName);
            Image::make($image)->save($location);
            $product->save();
       }
    }
      
    
    Session::flash('message', 'product Add Success');
    return back(); 
}

// manage_product view
public function manage_product(){   
    
    $sowproduct = Product::orderBy('id', 'DESC')->get();
    $brand = Brand::orderBy('id', 'DESC')->get();
    $category = Category::orderBy('id', 'DESC')->get();

    return view('Admin.product.Manage-Product', compact('sowproduct', 'brand', 'category'));
}

// edit_product

public function edit_product($id){
    $Brand = new Brand;
    $category = new Category;
    $row =  Product::find($id);
    $brand = Brand::orderBy('id', 'DESC')->get();
    $category = Category::orderBy('id', 'DESC')->get();
    
    return view('Admin.product.Edit_product', compact('row', 'brand', 'category'));
}

// public function update_product(Request $request, $id){
//     if(Product::find($id)->productName == $request->productName){
//      $dataOfRow = Product::find($id);
//      $dataOfRow->productName = ucfirst($request->productName);
//      $dataOfRow->productSlug = $this->Slug_generatore($request->productName);
//      $dataOfRow->save();
//      Session::flash('message', 'product Updated Success');
//      return back();

//     }else{
//      $this->validate($request,[
//          'productName' => 'required|unique:products,productName',
//          ]);
//          $dataOfRow = Product::find($id);
//          $dataOfRow->productName = ucfirst($request->productName);
//          $dataOfRow->productSlug = $this->Slug_generatore($request->productName);
//          $dataOfRow->save();
//          Session::flash('message', 'product Updated Success');
//          return back();
//     }
//  }

public function delete_product($id){
    $productId  =  Product::find($id);
    // $delImg = $productId->thumbnail;
    // unlink('assets\web\images\NewProduct/'.$delImg);
    $productId->delete();
    Session::flash('message', 'product Delete Success');
    return back();
   
}
public function aToInactive($id){
    $productId  =  Product::find($id);
    $productId->status = 0;
    $productId->save();
    Session::flash('message', 'Status Inactive Success');
    return back();
   
}
public function InToAtive($id){
    $productId  =  Product::find($id);
    $productId->status = 1;
    $productId->save();
    Session::flash('message', 'Status Active Success');
    return back();
   
}


public function showproduct($slug){
    $product = Product::where('slug', $slug)->first();
    if(!is_null($product)){

    }else{
        return redirect('/');
    }
}






















// Slug_generatore method
public function Slug_generatore($string){
    $string = str_replace(' ', '-', $string);
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    return strtolower(preg_replace('/-+/', '-', $string));

}
}
