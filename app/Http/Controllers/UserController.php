<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
        $users= User::all();
        return view ('/tab_user', compact('users' ));
    }

    public function create(){

        $users= User::all();
        $avatars= Avatar::all();
        return view ('ajout_user' , compact('users' , 'avatars'));
        
    }

   
    public function store(Request $request){

        $request->validate([
        
        'name'=> 'required|min:1',
        'age'=>'required',
        'email'=>'required',
        
    ]);
            
        $users= new User();

            
            $users->name =$request->input('name');
            
            $users->age =$request->input('age');
            $users->email =$request->input('email');
            
      
        
        
        
        //  ( le nom de mon input)

        $livres->save();

        return redirect()->route('tab_user');
        }
        


        public function edit($id){

            $users= User::find($id);
            // $genres=Genre::all();
            // $auteurs=Auteur::all();
            return view('/edit_user' , compact('users'));
        
        }

        public function update(Request $request, $id){

            $request->validate([
                
                'name'=> 'required|min:1',
                'age'=>'required',
                'email'=>'required',
            ]);

            
            

           
            $users= User::find($id);
            
            $users->name =$request->input('name');
            
            $users->age =$request->input('age');
            $users->email =$request->input('email');
            
            $livres->save();
    
            return redirect()->route('tab_user');
}
           
            
        

        // public function show( $id){
        //     $livres=Livre::all()->where('isbn',$id);
        //     $genres=Genre::all();
        //     $auteurs=Auteur::all();

        // return view ('show_livre' , compact('l}
        // else{ivres' , 'genres' , 'auteurs'));
        // }
        
        public function destroy($id){
            $users=User::find($id);
           
            $users->delete();
            return redirect()->back();
        }
}
