<!DOCTYPE html>
<html lang="en">
<head>
<title>PWAMC</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="users/styles/bootstrap4/bootstrap.min.css">
<link href="users/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('users/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('users/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('users/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('users/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('users/styles/responsive.css') }}">

</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Projet TP ynov developpement web/mobile</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="users/#">P<span>WAMC</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="#Se_connecter">Se connecter</a></li>
								<li><a href="#s_inscrire">S'inscrire</a></li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
            
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" id="Se_connecter" style="background-image:url(users/images/slider_1.jpg)">
		<div class="container fill_height">
            
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
                        <div class="col-md-12">
                            <h2>Découvrez toutes les recettes avec <span>PWAMC</span>.</h2><br>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <h3 style="text-align: center">Connexion</h3>
                                            <ul class="nav nav-tabs  mb-3 mt-3 nav-fill" id="justifyTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="justify-home-tab" data-toggle="tab" href="#justify-home" role="tab" aria-controls="justify-home" aria-selected="true">Utilisateur</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="justify-profile-tab" data-toggle="tab" href="#justify-profile" role="tab" aria-controls="justify-profile" aria-selected="false">Commerçant</a>
                                                </li>
                                            </ul>
                                            
                                            
                                            <div class="tab-content" id="justifyTabContent">
                                          
                                                <div class="tab-pane fade show active" id="justify-home" role="tabpanel" aria-labelledby="justify-home-tab">
                                                    <div class="card-body">                                            
                                                            <div class="card-body">
                                                                <form method="POST" action="{{ route('login') }}">
                                                                    @csrf
                                            
                                                                    <div class="form-group row">
                                                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>
                                            
                                                                        <div class="col-md-6">
                                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            
                                                                            @error('email')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="form-group row">
                                                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                            
                                                                        <div class="col-md-6">
                                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            
                                                                            @error('password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="form-group row">
                                                                        <div class="col-md-6 offset-md-4">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            
                                                                                <label class="form-check-label" for="remember">
                                                                                    {{ __('Se souvenir de moi') }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                            
                                                                    <div class="form-group row mb-0">
                                                                        <div class="col-md-8 offset-md-4">
                                                                            <button type="submit" class="btn btn-primary">
                                                                                {{ __('Se connecter') }}
                                                                            </button>
                                            
                                                                            @if (Route::has('password.request'))
                                                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                    {{ __('Mot de passe oublié?') }}
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="justify-profile" role="tabpanel" aria-labelledby="justify-profile-tab">
                                                    <div class="card-body">                                            
                                                        <div class="card-body">
                                                            <form method="POST" action="{{ route('login') }}">
                                                                @csrf
                                        
                                                                <div class="form-group row">
                                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row">
                                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                                        
                                                                    <div class="col-md-6">
                                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        
                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        
                                                                            <label class="form-check-label" for="remember">
                                                                                {{ __('Se souvenir de moi') }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-8 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Se connecter') }}
                                                                        </button>
                                        
                                                                        @if (Route::has('password.request'))
                                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                {{ __('Mot de passe oublié?') }}
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
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
				</div>
			</div>
		</div>
	</div>

<br><br>



	<!-- LISTE DE PRODUITS -->

    <div id="s_inscrire" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 style="text-align: center">Inscription</h3>
                    <ul class="nav nav-tabs  mb-3 mt-3 nav-fill" id="justifyTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="justify-home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="justify-home" aria-selected="true">Utilisateur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="justify-profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="justify-profile" aria-selected="false">Commerçant</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="justifyTabContent">
                                          
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="justify-home-tab">
                            <div class="card-body">                                            
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer votre mot de passe') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __("S'inscrire") }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="justify-profile-tab">
                            <div class="card-body">                                            
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                    
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer votre mot de passe') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Nom de l'entreprise") }}</label>
                
                                            <div class="col-md-6">
                                                <input id="nom_entreprise" type="text" maxlength="40"class="form-control @error('name') is-invalid @enderror" name="nom_entreprise" value="{{ old('nom_entreprise') }}" required autocomplete="nom_entreprise" autofocus>
                
                                                @error('nom_entreprise')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Type d'entreprise") }}</label>
                
                                            <div class="col-md-6">
                                                <select id="type_entreprise"  maxlength="40"class="form-control @error('name') is-invalid @enderror" name="type_entreprise" value="{{ old('type_entreprise') }}" required autocomplete="type_entreprise" autofocus>
                                                    <option>Restaurant</option>
                                                    <option>Boucherie</option>
                                                    <option>Boulangerie</option>
                                                    <option>Patisserie</option>
                                                    <option>Pizzeria</option>
                                                    <option>Fromagerie</option>
                                                </select>
                
                                                @error('type_entreprise')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Adresse") }}</label>
                
                                            <div class="col-md-6">
                                                <input id="adresse" type="text" maxlength="40"class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('nom_entreprise') }}" required autocomplete="adresse" autofocus>
                
                                                @error('adresse')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Ville") }}</label>
                
                                            <div class="col-md-6">
                                                <input id="ville" type="text" maxlength="40"class="form-control @error('adresse') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                
                                                @error('ville')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Code Postal") }}</label>
                
                                            <div class="col-md-6">
                                                <input id="code_postal" type="number" maxlength="40"class="form-control @error('adresse') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>
                
                                                @error('code_postal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Téléphone") }}</label>
                
                                            <div class="col-md-6">
                                                <input id="telephone" type="number" maxlength="40"class="form-control @error('adresse') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                
                                                @error('telephone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>Nom invalide</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __("S'inscrire") }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<br><br>
	<!-- Best Sellers -->


	<!-- Benefit -->


	<!-- Blogs -->






	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="users/#">Blog</a></li>
							<li><a href="users/#">FAQs</a></li>
							<li><a href="users/contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="users/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="users/#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="users/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="users/#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="users/#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="{{ asset('users/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('users/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('users/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('users/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('users/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('users/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('users/js/custom.js') }}"></script>
</body>

</html>
