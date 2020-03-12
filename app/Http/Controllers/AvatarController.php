<?php

namespace App\Http\Controllers;
use App\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index(){
        
        $avatars= Avatar::all();
        return view ('/tab_avatar', compact('avatars' ));
    }
}
