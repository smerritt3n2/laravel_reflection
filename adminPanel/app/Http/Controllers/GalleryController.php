<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
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
        $images = \File::allFiles(storage_path('app/public/uploads')); // Gets Storage Path Directory, and places them into array
        return view('gallery')->with(array('images'=>$images)); // Returns web-page data along with Images gathered from array
    }
}
