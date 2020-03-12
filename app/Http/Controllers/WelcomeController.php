<?php

namespace App\Http\Controllers;
use App\User;
use App\Avatar;
use App\Image;
use App\Categorie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
<<<<<<< HEAD
    $users=User::all();
    $avatars=Avatar::all();
    $images=Image::all();
    $categories=Categorie::all();
=======
        $users=Users::all();
        $avatars=Avatar::all();
        $images=Image::all();
        $categories=Categorie::all();
>>>>>>> 4080c0a9d185c9989b23bdfea97e92f9fd58c03c

    return view('welcome', compact('users' , "avatars" , "images" , "categories"));
    }
   
}
