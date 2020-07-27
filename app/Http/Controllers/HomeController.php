<?php

namespace App\Http\Controllers;

use App\Mail\CommentMail;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function Home()
    {
        $products=Product::all();
        $setting=Setting::all();
        return view('index',compact('products','setting'));
    }

    public function show(Product $product)
    {
        $setting=Setting::all();

        return view('product',compact('product','setting'));
    }

    public function about()
    {
        $setting=Setting::all();
        return view('about-us',compact('setting'));
    }
    public function contact()
    {
        $setting=Setting::all();
        return view('contact',compact('setting'));
    }

    public function search(Request $request)
    {
        $key=$request->keyword;
        $products=Product::search($key)->latest()->get();
        $setting=Setting::all();
        return view('index',compact('products','key','setting'));
    }




}
