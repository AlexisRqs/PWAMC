@extends('admin.layouts.index')
@section('content')


<div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow col-lg-16">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>A-propos</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area rounded-pills-icon">
            
            <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> Apperçu</a>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-type"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg> Modifier</a>
                </li>
            </ul>
            <div class="tab-content" id="rounded-pills-icon-tabContent">
                <!-- Contenue Vue -->
                <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                    <div class="widget-content widget-content-area">
                  
                            <div class="container">
                              <h2 class="display-4 mb-5  mt-4">{{ $contents->titre }}</h2>
                              <p class="lead mt-3 mb-4">{!! $contents->context !!}</p>
                              <br>
                              <blockquote class="blockquote media-object">
                                  <div class="media">
                                      <div class="usr-img mr-2">
                                          <img alt="avatar" height="50px" src="{{ asset('/storage/image/'.$contents->image) }}" alt="{{ asset('/storage/image/'.$contents->image) }}" data-default-file="{{ asset('/storage/image/'.$contents->image) }}"  style="width: 500px; height: 600px" class="br-30">
                                      </div>
                                  </div>
                                  <small class="text-right">{{ $contents->updated_at }}<cite title="Source Title"></cite></small>
                              </blockquote>
                              <a href="{{ asset('/storage/doc/'.$contents->cv) }}" download="proposed_file_name">
                                
                                <button class="btn-outline-primary btn-lg">Telecharger CV</button>
                              </a>
                            </div>
                        

                    </div>
                </div>


<!-- Edit Text -->


                <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">

                      
                      <!-- Form Quill -->
                      <form action="{{ route('A-propos.update',$contents->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div id="tooltip" class="row layout-spacing">
                            <!-- Title -->
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4> Titre </h4>
                                            </div>
                                        </div>
                                        <br>
                                        <label for="t-text" class="sr-only">Titre</label>
                                        <input id="t-text" type="text" name="titre" value="{{ $contents->titre }}" placeholder="Entrer le titre..." class="form-control" required="required" autofocus>
                                    </div>
                            <!-- Texterea -->
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4> Contexte </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-content widget-content-area">
                                                <textarea id="demo1" name="context" style="display: none;">
                                                    {{ $contents->context }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                           <!-- Image -->
                           <div class="custom-file-container" data-upload-id="myFirstImage">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4> Importer votre Image </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-lg-12 col-md-4">
                                <div class="upload mt-4 pr-md-4">
                                    <input type="file" id="input-file-max-fs" name="image" class="dropify" value="{{ asset('/storage/image/'.$contents->image) }}" data-default-file="{{ asset('/storage/image/'.$contents->image) }}" data-max-file-size="2M" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Charger votre image</p>
                                </div>
                            </div>
                           
                        </div>
                           <!-- CV -->
 
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Selectionner votre cv</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-12 col-md-4">
                                        <div class="upload mt-4 pr-md-4">
                                            <input type="file" id="input-file-max-fs"  name="cv" class="dropify" value="{{ asset('/storage/doc/'.$contents->cv) }}" data-default-file="{{ asset('/storage/doc/'.$contents->cv) }}" data-max-file-size="2M" />
                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Charger votre cv</p>
                                        </div>
                                    </div>
                        </div>
                                </div>
                            </div>
                            
                    <div class="account-settings-footer">
                        
                        <div class="as-footer-container">

                            <button id="multiple-reset" href="{{ route('A-propos.index') }}"class="btn btn-primary">Annuler</button>
                            <div class="blockui-growl-message">
                                <i class="flaticon-double-check"></i>&nbsp; Modification éffectuée!
                            </div>
                            <button id="multiple-messages" type="submit" class="btn btn-lg btn btn-success">Sauvegarder les changements!</button>

                        </div>

                    </div>
                </form>


                </div>
            </div>

            </div>

        </div>
    </div>
</div>
@endsection