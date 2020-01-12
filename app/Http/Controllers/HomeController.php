<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd('aaaaa');
        // return view('home');
        // return Storage::download('image1/file_test.txt');
        // Storage::copy('image1/file_test.txt', 'image2/file_test.txt');
        // Storage::move('image1/file_test.txt', 'image2/file_test.txt');


        // Storage::disk('public')->put('image1/file_test.txt', 'content');
        // $file= Storage::disk('public')->exists('image1/file_test.txt');
        // dd($file);
        // Storage::disk('public')->delete('image1/file_test.txt');
        Storage::deleteDirectory('image2');
    }
}
