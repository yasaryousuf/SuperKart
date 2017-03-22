<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewProduct($id)
    {
        $productById = DB::table('products')
        ->join('categories','categories.id','=','products.categoryId')
        ->join('manufacturers','manufacturers.id','=','products.manufacturerId')
        ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
        ->where('products.id',$id)
        ->first();
        return view('admin.product.viewProduct',compact('productById'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct()
    {
        $publishedCategories = Category::all();
        //$publishedCategories = Category::where('publicationStatus',1)->get();
        //$publishedManufacturers = Manufacturer::where('publicationStatus',1)->get();
        $publishedManufacturers = Manufacturer::all();
        return view('admin.product.createProduct',compact('publishedCategories', 'publishedManufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {
        //return $request->productImage;
        $productImage = $request->file('productImage');
        $productImageName = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath, $productImageName);
        $imageUrl = $uploadPath.$productImageName;
        $product = new Product;
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
        return redirect('add-product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProduct()
    {
        $products = DB::table('products')
        ->join('categories','categories.id','=','products.categoryId')
        ->join('manufacturers','manufacturers.id','=','products.manufacturerId')
        ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
        ->get();
        return view('admin.product.manageProduct',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
