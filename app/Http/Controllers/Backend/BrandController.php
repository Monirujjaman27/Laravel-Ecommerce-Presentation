<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Brand;
use Illuminate\Http\Request;
use Session;

class BrandController extends Controller
{
    // view add_brand
    public function add_brand(){
        return view('Admin.Brand.add-brand');
    }

   // save_brand items
   public function save_brand(Request $request){
    $this->validate($request,[
        'brandName' => 'required|unique:brands,BrandName',
        ],
        [
            'brandName.required' => 'Field must not be empty',
        ]);
        $brand = new Brand;
        $brand->BrandName = ucfirst($request->brandName);
        $brand->BrandSlug = $this->Slug_generatore($request->brandName);
        $brand->save();
        Session::flash('message', 'Brand Add Success');
        return back(); 
    }

    // manage_brand view
    public function manage_brand(){
        $sowBrand = Brand::orderBy('id', 'DESC')->get();
        return view('Admin.Brand.manage-brand', compact('sowBrand'));
    }

    // edite_brand

    public function edit_brand($id){
        $row =  Brand::find($id);
        return view('Admin.Brand.Edit-brand', compact('row'));
    }

    public function update_brand(Request $request, $id){
        if(Brand::find($id)->BrandName == $request->brandName){
         $dataOfRow = Brand::find($id);
         $dataOfRow->BrandName = ucfirst($request->brandName);
         $dataOfRow->BrandSlug = $this->Slug_generatore($request->brandName);
         $dataOfRow->save();
         Session::flash('message', 'Brand Updated Success');
         return back();
 
        }else{
         $this->validate($request,[
             'brandName' => 'required|unique:brands,BrandName',
             ]);
             $dataOfRow = Brand::find($id);
             $dataOfRow->BrandName = ucfirst($request->brandName);
             $dataOfRow->BrandSlug = $this->Slug_generatore($request->brandName);
             $dataOfRow->save();
             Session::flash('message', 'Brand Updated Success');
             return back();
        }
     }

    public function delete_brand($id){
        $brandId  =  brand::find($id);
        $brandId->delete();
        Session::flash('message', 'Brand Delete Success');
        return back();
       
    }























    // Slug_generatore method
    public function Slug_generatore($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
        return strtolower(preg_replace('/-+/', '-', $string));

    }
}
