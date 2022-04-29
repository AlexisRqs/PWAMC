@extends('admin.layouts.index')

@section('content')
<div class="row">
    <div id="flFormsGrid" class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
               <button  class="btn btn-primary btn-rounded mb-2"><a href="{{ route('Categorie.index') }}">Precedent</a></button>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Modification de la categorie</h4>
                    </div>                                                                        
                </div>
            </div>
            <div class="widget-content widget-content-area">
       
                <form action="{{ route('Categorie.update',$categorie_id->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom*</label>
                            <input type="text" value="{{ $categorie_id->nom }}"class="form-control" name="nom" placeholder="Nom de la categorie">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Type</label>
                            <input type="text" value="{{ $categorie_id->type  }}" class="form-control" name="type" placeholder="Type de categorie">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name="descriptif" rows="3">{{ $categorie_id->descriptif  }}</textarea>
                    </div>

                    <div  class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Image</label>

                        <div class="col-lg-2 col-lg-12 col-md-4">
                            <div class="upload mt-4 pr-md-4">
                                <input type="file" id="input-file-max-fs" name="image" class="dropify" value="{{ asset('/storage/image/'.$categorie_id->image) }}" data-default-file="" data-max-file-size="2M" />
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
