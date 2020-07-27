<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products=Product::all();
        return view('Admin.products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        $validate_data=$request->validated();
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        Product::create([
            'name'=>$validate_data['name'],
            'description'=>$validate_data['description'],
            'image'=>$imageName,
            'price'=>$validate_data['price'],
            'status'=>$validate_data['status']
        ]);
        $msg="با موفقیت اضافه شد";
        return redirect()->back()->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view('Admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product)
    {
        return view('Admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(ProductRequest $request,Product $product)
    {
        $validate_data=$request->validated();
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $product->update([
            'name'=>$validate_data['name'],
            'description'=>$validate_data['description'],
            'image'=>$imageName,
            'price'=>$validate_data['price'],
            'status'=>$validate_data['status'],
        ]);

        $msg="با موفقیت اپدیت شد";
        return redirect()->back()->with('success',$msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $msg="با موفقیت حذف شد";
        return redirect()->back()->with('destroy',$msg);
    }

    public function update_status(Product $product)
    {
        if ($product->status == 1) {
            $product->status = 0;
        } else {
            $product->status = 1;
        }
        $product->save();
        $msg = "با موفقیت تغییر کرد";
        return redirect()->back()->with('success_status', $msg);
    }
}
