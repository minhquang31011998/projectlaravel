<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Userinfo;
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $users = \DB::table('users')->get();
        $email = Auth::user()->email;
        dd($email);
        $users = User::paginate(15);

        return view('backend.users.index')->with([
            'users'=>$users
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *`
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function test(){
        // $user = User::find(1);

        // $userInfo = $user->userInfo;
        // dd($userInfo);
        // $userInfo = Userinfo::find(1);
     
        // $user = $userInfo->user;
        // dd($user);
        // $category = Category::find(1);
        // $products = $category->products;
        // dd($products);
        // $product = Product::find(30);
     
        // $category = $product->category;
        // dd($category);
        // $product = Product::find(30);
        // $orders = $product->orders;
        // dd($orders);
        $order = Order::find(1);
        $products = $order->products;
        dd($products);
    }
    public function showProducts($id){

        $user = user::find($id);
        $products = $user->products;
        dd($products);
    }
}
