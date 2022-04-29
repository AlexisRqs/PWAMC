<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;
//use RealRashid\SweetAlert\Facades\Alert;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie= Categorie::All();
        return view('admin.gererCategorie',compact('categorie'));
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
        $categorie = new Categorie();
        $categorie->nom = request('nom');
        $categorie->type = request('type');
        $categorie->descriptif = request('description');
        
        
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
           $newImageName = time() . '-' . $request->nom . '.' . $request->image->extension(); 
           $request->image->extension();
           $request->image->move(public_path('images'),$newImageName);
          // $path = $request->file('image')->store('public/uploads');
         
           $categorie->image = $name;
         //  $categorie->path = $path;
          // $save->save();
 
           $categorie->image = $newImageName;
        $categorie->save();
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
        $categorie_id = Categorie::find($id);
        $categorie = Categorie::all();

        return view('admin.categorie',compact('categorie_id','categorie'));
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
        
        $contents = Categorie::find($id);
        $contents->update($all);
        return redirect()->route('Categorie.index');
    }


  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie =Categorie::find($id);
        $categorie->delete();
        return redirect()->back();
    }



    public function getGerer()
    {
        return view('admin.categorie');
    }
}
