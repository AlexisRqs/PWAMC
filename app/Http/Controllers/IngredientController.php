<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Categorie;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredient = Ingredient::all();
        $categorie = Categorie::all();
        return view('admin.ingredient',compact('ingredient','categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingredient = new Ingredient();
        $ingredient->nom = request('nom');
        $ingredient->poids = request('poids');
        $ingredient->descriptif = request('descriptif');
        $ingredient->mesure = request('mesure');
        $ingredient->quantite = request('quantite');
        $ingredient->region = request('region');
        $ingredient->reference = request('reference');
        if( $request->hasFile('image') )
        {
            $destination_path='public/image';
            $image= $request->file('image');
            $image_name= $image->getClientOriginalName();
            $path = $image->storeAs($destination_path,$image_name);
            $ingredient->image = $image_name;
   
        }
        $nom_categorie = request('id_categorie');
        $categorie = Categorie::all()->where('nom',$nom_categorie);
        //$categorie = Categorie::find($request->id_categorie);
        //dd($ingredient->id_categorie); 
        $ingredient->id_categorie =2;
        $ingredient->save();

       // alert()->success('Réussi !','Enregistrement avec succés!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredient_id = Ingredient::find($id);
        $ingredient = Ingredient::all();
        $categorie = Categorie::all();

        return view('admin.modifierIngredient',compact('ingredient_id','ingredient','categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $all = $request->all();
        if( $request->hasFile('image') )
        {
            $destination_path='public/image';
            $image= $request->file('image');
            $image_name= $image->getClientOriginalName();
            $path = $image->storeAs($destination_path,$image_name);
            $all['image'] = $image_name;
        }
        $contents = Ingredient::find($id);
        $contents->update($all);
        return redirect()->route('Ingredient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredient =Ingredient::find($id);
        $ingredient->delete();
        return redirect()->back();
    }
}
