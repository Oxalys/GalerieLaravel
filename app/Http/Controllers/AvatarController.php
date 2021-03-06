<?php

namespace App\Http\Controllers;
use App\Avatar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index(){
        
        $avatars= Avatar::all();
        return view ('/tab_avatar', compact('avatars' ));
    }

    public function create(){

        
        $avatars= Avatar::all();
        return view ('ajout_avatar' , compact('avatars'));
        
    }

   
    public function store(Request $request){

        $request->validate([
        
        'name'=> 'required|min:1',
        'avatar'=> 'required',
        
    ]);
            
        $storages=Storage::disk('public')->put('', $request->file('avatar'));
        $avatars= new Avatar();

            
            $avatars->name =$request->input('name');
            $avatars->avatar =$storages;
            
      
        
        
        
        //  ( le nom de mon input)

        $avatars->save();

        return redirect()->route('tab_avatar');
        }
        


        public function edit($id){

            $avatars= Avatar::find($id);
            // $genres=Genre::all();
            // $auteurs=Auteur::all();
            return view('/edit_avatar' , compact('avatars'));
        
        }

        public function update(Request $request, $id){

            $request->validate([
                
                'name'=> 'required|min:1',
                'avatar'=>'required',
                
            ]);

            $storages=Storage::disk('public')->put('', $request->file('avatar'));
            $avatars= Avatar::find($id);

            
            $avatars->name =$request->input('name');
            $avatars->avatar =$storages;
            
            $avatars->save();
    
            return redirect()->route('tab_avatar');
}
           
            
        

        public function show( $id){
            $avatars=Avatar::all()->where('id',$id);
            
            $avatars= new Avatar();
        return view ('show_avatar' , compact('avatars'));
        }
        
        public function destroy($id){
            $avatars=Avatar::find($id);
            Storage::disk("public")->delete($avatars->avatar);
            $avatars->delete();
            return redirect()->back();
        }
}
