<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apropos;
use Illuminate\Support\Facades\Storage;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents=Apropos::all()->first();
        return view('admin.a-propos',compact('contents'));
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
        //
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
        //
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
        else if($request->hasFile('cv')){
            $destination_path = 'public/doc';
            $cv = $request ->file('cv');
            $cv_name = $cv ->getClientOriginalName();
            $path = $cv -> storeAs($destination_path,$cv_name);
            $all['cv'] = $cv_name;
        }
        //dd($request->image);
        $contents = Apropos::find($id);
        $contents->update($all) ;
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
