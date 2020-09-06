<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('website.home', compact('category'));
    }
    public function ProductDetails()
    {
        return view('website.ProductDetails');
    }
   /* 
    *
    categryPorduct
    *
    */
    public function categryPorduct($id)
    {
        $category = Category::find($id);
        return view('website.ProductDetails');
    }
    
}
