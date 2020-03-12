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

    public function create(){

        
        $images= Image::all();
        return view ('ajout_image' , compact('images'));
        
    }

   
    public function store(Request $request){

        $request->validate([
        
        
        'Image'=> 'required',
        
    ]);
            
        $images= new Image();

            
        
            $images->email =$request->input('image');
            
      
        
        
        
        //  ( le nom de mon input)

        $images->save();

        return redirect()->route('tab_image');
        }
        


        public function edit($id){

            $images= Image::find($id);
            // $genres=Genre::all();
            // $auteurs=Auteur::all();
            return view('/edit_image' , compact('images'));
        
        }

        public function update(Request $request, $id){

            $request->validate([
                
               
                'image'=>'required',
                
            ]);

            
            

           
            $images= Image::find($id);
            
           
            
            
            $users->Image =$request->input('image');
            
            $images->save();
    
            return redirect()->route('tab_image');
}
           
            
        

        public function show( $id){
            $images=Image::all()->where('id',$id);
           

        return view ('show_image' , compact('images'));
        }
        
        public function destroy($id){
            $images=Image::find($id);
           
            $images->delete();
            return redirect()->back();
        }
        public function download($id)
    {
        $img = Image::find($id);
        return Storage::disk('public')->download($img->image);
    }
}