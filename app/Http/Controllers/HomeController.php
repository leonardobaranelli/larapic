<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        Paginator::useBootstrap();

        $images = Image::orderBy('id', 'desc')->paginate(5);

        return view('home',[
            'images' => $images,            
        ]);
    }
}
