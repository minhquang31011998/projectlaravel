<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Image;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('backend.products.index')->with([
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ($request->hasFile('images')){
            // $path = Storage::putFile('images', $request->file('image'));
        // $file = $request->file('image');
// Lưu vào trong thư mục storage
        // $path = $file->store('images');
        // $file = $request->file('image');
        // $name = $file->getClientOriginalName();

        // $file->move('image1', $name);
         $images = $request->file('images');
         foreach ($images as $image){
            // $image->store('image');
            $name = $image->getClientOriginalName();

            $image->move('image1', $name);
        }
    }else{
        dd('khong co file');
    }


        // $validatedData = $request->validate([
        //     'name'         => 'required|min:10|max:255',
        //     'origin_price' => 'required|numeric',
        //     'sale_price'   => 'required|numeric',
        // ]);
       //  $validator = \Validator::make($request->all(),
       //      [
       //          'name'         => 'required|min:10|max:255',
       //          'origin_price' => 'required|numeric',
       //          'sale_price'   => 'required|numeric',
       //      ],
       //      [
       //          'required' => ':attribute Không được để trống',
       //          'min' => ':attribute Không được nhỏ hơn :min',
       //          'max' => ':attribute Không được lớn hơn :max'
       //      ],
       //      [
       //          'name' => 'Tên sản phẩm',
       //          'origin_price' => 'Giá gốc',
       //          'sale_price' => 'Giá bán'
       //      ]
       //  );
       //  if ($validator->errors()){
       //      return back()
       //          ->withErrors($validator)
       //          ->withInput();
       //  }
       // $product = new Product();
       //  $product->name = $request->get('name');
       //  $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
       //  $product->category_id = $request->get('category_id');
       //  $product->origin_price = $request->get('origin_price');
       //  $product->sale_price = $request->get('sale_price');
       //  $product->content = $request->get('content');
       //  $product->status = $request->get('status');
       //  $product->user_id = Auth::user()->id;
       //  $product->save();

       //  return redirect()->route('backend.product.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function showImages($id){

        $product = Product::find($id);
        $images = $product->images;
        dd($images);
    }
}
