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

        
    
=======
        $users=User::all();
        $avatars=Avatar::all();
        $images=Image::all();
        $categories=Categorie::all();
>>>>>>> 7e527e0f8b6919fee2d64e5dbc7e9365c80b64c0

    return view('welcome');
    }
   
}
