<?php

namespace App\Http\Controllers;
use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        
        $categories= Categorie::all();
        return view ('/tab_categorie', compact('categories' ));
    }

    public function create(){

        $categories= Categorie::all();
        return view ('ajout_categorie' , compact('categories'));
        
    }

   
    public function store(Request $request){

        $request->validate([
        
        
        'categorie'=> 'required',
        
    ]);
            
        $categories= new Categorie();

            
        
            $categories->categorie =$request->input('categorie');
            
      
        
        
        
        //  ( le nom de mon input)

        $categories->save();

        return redirect()->route('tab_categorie');
        }
        


        public function edit($id){

            $categories= Categorie::find($id);
            // $genres=Genre::all();
            // $auteurs=Auteur::all();
            return view('/edit_categorie' , compact('categories'));
        
        }

        public function update(Request $request, $id){

            $request->validate([
                
               
                'categorie'=>'required',
                
            ]);

            
            

           
            $categories= Categorie::find($id);
            
           
            
            
            $users->Categorie =$request->input('categorie');
            
            $categories->save();
    
            return redirect()->route('tab_categorie');
}
           
            
        

        // public function show( $id){
        //     $livres=Livre::all()->where('isbn',$id);
        //     $genres=Genre::all();
        //     $auteurs=Auteur::all();

        // return view ('show_livre' , compact('l}
        // else{ivres' , 'genres' , 'auteurs'));
        // }
        
        public function destroy($id){
            $categories=Categorie::find($id);
           
            $categories->delete();
            return redirect()->back();
        }
}
