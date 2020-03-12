<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        
        $images= Image::all();
        return view ('/tab_image', compact('images' ));
    }
}
