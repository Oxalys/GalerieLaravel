<?php

namespace App\Http\Controllers;
use App\User;
use App\Avatar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
        $users= User::all();
        return view ('tab_user', compact('users' ));
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
        'password'=>'required',
        'id_avatar'=>'required',
        'id_role'=>'required',
        
        
    ]);
            
    
        $users= new User();

        
            $users->name =$request->input('name');
            $users->age =$request->input('age');
            $users->email =$request->input('email');
            $users->password =$request->input('password');
            $users->id_avatar =$request->input('id_avatar');
            $users->id_role =$request->input('id_role');
            
    
        
        
        
        //  ( le nom de mon input)

        $users->save();

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
                'password'=>'required'
            ]);

            
            

           
            $users= User::find($id);
            $avatars= Avatar::all();      
            $users->name =$request->input('name');
            $users->age =$request->input('age');
            $users->email =$request->input('email');
            $users->password =$request->input('password');
            $users->id_avatar =$request->input('id_avatar');
            $users->id_role =$request->input('id_role');
           
            
            $users->save();
    
            return redirect()->route('tab_user');
}
           
            
        

        public function show( $id){
            $users=User::all()->where('id',$id);
            

        return view ('show_user' , compact('users'));
        }
        
        public function destroy($id){
            $users=User::find($id);
           
            $users->delete();
            return redirect()->back();
        }
}
