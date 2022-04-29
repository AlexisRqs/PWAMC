@extends('admin.layouts.index')
@section('content')


<div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow col-lg-16">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Gestion de categorie</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area rounded-pills-icon">
            
            <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                         Gerer categorie</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                         Ajouter Categorie</a>
                </li>
            </ul>
            <div class="tab-content" id="rounded-pills-icon-tabContent">
                <!-- Contenue Vue -->
                <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                    <div class="widget-content widget-content-area">
                  
                        <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Liste de categorie</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Image</th>
                                                    <th>Nom</th>
                                                    <th>Type</th>
                                                    <th>Descriptif</th>
                                                    <th>Création</th>
                                                    <th>Modification</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categorie as $categories )
                                                    
                                             
                                                <tr>
                                                    <td class="text-center">{{ $categories->id }}</td>
                                                    <td class="text-center"><img alt="img-categorie" class="img-fluid rounded-circle" src="{{ $categories->path }}"></td>
                                                    <td>{{ $categories->nom }}</td>
                                                    <td>{{ $categories->type }}</td>
                                                    <td>{{ $categories->descriptif }}</td>
                                                    <td>{{ $categories->created_at }}</td>
                                                    <td>{{ $categories->updated_at }}</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <form action="{{ route('Categorie.edit',['Categorie'=>$categories->id]) }}">
                                                           <button style="background:none;border:none;"><a data-toggle="modal" data-target="#registerModal"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Modifier"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"  stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                           </button>
                                                           </form>
                                                              <!-- Modal Modification -->
                                                              <div id="modalCustom" class="col-lg-12 layout-spacing">
                                                                <div class="statbox widget box box-shadow">
                                                                    <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                                                                      
                                                                      
                                                                        <div class="modal fade register-modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" style="display: none;" aria-hidden="true">
                                                                          <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                    
                                                                              <div class="modal-header" id="registerModalLabel">
                                                                                <h4 class="modal-title">Modification de la categorie</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                                                </button>
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                <form  method="POST" class="mt-0">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                   <div class="form-group">
                                                                                   <input type="text" value="" class="form-control mb-2" id="nom" placeholder="nom">
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                    <input type="text" class="form-control mb-2" id="type" placeholder="type">
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                    <label for="inputEmail4">Modifier l'image</label>
                                                                                    <input type="file" id="input-file-max-fs" name="image" class="dropify"  data-default-file="" data-max-file-size="2M" />
                                                                                </div>
                                                                                  <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Modifier</button>
                                                                                </form>
                                    
                                    
                                                                              </div>
        
                                                                            </div>
                                                                          </div>
                                                                        </div>
        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <form action="{{ route('Categorie.destroy',['Categorie'=>$categories->id]) }}" method="POST" onsubmit="return('Etes vous sûre?')">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                            <button style="background-color:none; background:none;border:none;" type="submit"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                            </button></form>
                                                        </ul>
                                                    </td>
                                                @endforeach        
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>


<!-- Ajouter Categorie -->


                <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">

                      
                      <!-- Form Quill -->
                      <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Ajouter Categorie</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ route('Categorie.store') }}" method="POST">
                                        @csrf
                                        {{ csrf_field() }}
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Nom*</label>
                                                <input type="text" class="form-control" name="nom" placeholder="Nom de la categorie">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Type</label>
                                                <input type="text" class="form-control" name="type" placeholder="Type de categorie">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                    
                                        <div  class="form-group mb-4">
                                            <label for="exampleFormControlTextarea1">Image</label>
                    
                                            <div class="col-lg-2 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" id="input-file-max-fs" name="image" class="dropify"  data-default-file="" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                           
                                        </div>
                                        
                                      <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            </div>

        </div>
    </div>
</div>
@endsection