@extends('admin.layouts.index')

@section('content')
<div class="row">
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
               <button  class="btn btn-primary btn-rounded mb-2"><a href="{{ route('Ingredient.index') }}">Precedent</a></button>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Modification ingredient</h4>
                    </div>                                                                        
                </div>
            </div>
            <div class="widget-content widget-content-area">
       
                <form action="{{ route('Ingredient.update',$ingredient_id->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom*</label>
                            <input type="text" value="{{ $ingredient_id->nom }}" class="form-control" name="nom" placeholder="Nom de l'ingredient">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Categorie</label>
                            <select class="form-control" value="{{ $ingredient_id->categorie->nom }}"name="id_categorie" id="exampleFormControlSelect1">
                                @foreach ($categorie as $categories )
                                    <option name="id_categorie">{{ $categories->nom }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Reference</label>
                            <input type="text" class="form-control" value="{{ $ingredient_id->reference }}"name="reference" placeholder="Reference">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Région</label>
                            <input type="text" class="form-control" value="{{ $ingredient_id->region }}" name="region" placeholder="Région">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Mesure</label>
                            <input type="text" class="form-control" value="{{ $ingredient_id->mesure }}" name="mesure" placeholder="Type d'ingredient">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Quantite</label>
                            <input type="text" class="form-control" name="quantite" placeholder="Quantite">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Poids</label>
                            <input type="text" class="form-control"value="{{ $ingredient_id->poids }}" name="poids" placeholder="Poids">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" value="{{ $ingredient_id->descriptif }}" name="descriptif" rows="3"></textarea>
                    </div>

                    <div  class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Image</label>

                        <div class="col-lg-2 col-lg-12 col-md-4">
                            <div class="upload mt-4 pr-md-4">
                                <input type="file" id="input-file-max-fs" value="{{ asset('/storage/image/'.$ingredient_id->image) }}" name="image" class="dropify"  data-default-file="" data-max-file-size="2M" />
                            </div>
                        </div>
                       
                    </div>
                    
                  <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
