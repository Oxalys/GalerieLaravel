<?php

namespace App\Http\Controllers;
use App\Users;
use App\Avatar;
use App\Image;
use App\Categorie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    $users=Users::all();
    $avatars=Avatar::all();
    $images=Image::all();
    $categories=Categorie::all();

    return view('welcome', compact('users' , "avatars" , "images" , "categories"));
}
