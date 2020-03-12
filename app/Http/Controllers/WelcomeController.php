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

        
    

    return view('welcome');
    }
   
}
