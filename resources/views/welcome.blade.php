<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Your Eyes | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

@media ( min-width : 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}

/*a,
        a:focus,
        a:hover {
            color: black;
        }*/
.btn-secondary, .btn-secondary:hover, .btn-secondary:focus {
	color: #333;
	text-shadow: none;
	background-color: #fff;
	border: .05rem solid #fff;
}

html, body {
	background-color: #fff;
	font-family: 'Nunito', sans-serif;
	height: 100vh;
	margin: 0;
	display: -ms-flexbox;
	background-image: linear-gradient(to top, white, #C8EBF8);
}

.oMenu {
	color: #585857;
}
</style>
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
       <div class="container-fluid mr-auto p-3"
			>
			<nav class="navbar navbar-expand-md px-0 py-0 ">
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarsExample08" aria-controls="navbarsExample08"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg"></i></span>
				</button>

				<div class="collapse navbar-collapse justify-content-md-center"
					id="navbarsExample08">
					<ul class="navbar-nav">
						<li class="nav-item active" style="border-bottom: 4px solid #54b3df"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale'))  }}">@lang('Home_nav')</a></li>
						<li class="nav-item "><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav') </a></li>
						<li class="nav-item "
							><a
							class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/database') }}">@lang('Database_nav') <span
								class="sr-only">(current)</span></a></li>
								
								
						<!-- <li class="nav-item"><a class="nav-link oMenu font-weight-bold "
							href="{{ url('/'.Config::get('app.locale').'/resources') }}">@lang('Resources_nav')</a></li>-->
							
							 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle oMenu font-weight-bold " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('Resources_nav')
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/'.Config::get('app.locale').'/handbook') }}">Handbook for adult educators</a>
          <a class="dropdown-item" href="{{ url('/'.Config::get('app.locale').'/tips') }}">Tips for adult educators</a>
         
        </div>
      </li>
							
							
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/partners') }}">@lang('Partners_nav')</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/news') }}">@lang('News_nav')</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/contact') }}">@lang('Contact_nav')</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold "
							href="{{ url('/'.Config::get('app.locale').'/survey') }}">@lang('Survey_nav')</a></li>

					</ul>
				</div>
				<ul class="navbar-nav dropleft">
        <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ URL::to('/') }}/images/{{Config::get('app.locale')}}.png" width="30" >
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="min-width: 2rem;">
          <a class="dropdown-item" href="{{url('/bu')}}"> <img src="{{ URL::to('/') }}/images/bu.png" width="30" ></a>
          <a class="dropdown-item" href="{{url('/en')}}"> <img src="{{ URL::to('/') }}/images/en.png" width="30" ></a>
          <a class="dropdown-item" href="{{url('/es')}}"> <img src="{{ URL::to('/') }}/images/es.png" width="30" ></a>
         <!--  <a class="dropdown-item" href="{{url('/fr')}}"> <img src="{{ URL::to('/') }}/images/fr.png" width="30" ></a> -->
          <a class="dropdown-item" href="{{url('/it')}}"> <img src="{{ URL::to('/') }}/images/it.png" width="30" ></a>
          <a class="dropdown-item" href="{{url('/ro')}}"> <img src="{{ URL::to('/') }}/images/ro.png" width="30" ></a>
          <a class="dropdown-item" href="{{url('/si')}}"> <img src="{{ URL::to('/') }}/images/si.png" width="30" ></a>
        </div>
      </li>   
    </ul>
	<!--  		<div class="dropdown" style="max-width: 30px !important">

    <img src="{{ URL::to('/') }}/images/{{Config::get('app.locale')}}.png"  style="max-width: 30px !important"
			 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
<!-- 			 class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > -->
  

<!--   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> -->
<!--     <a class="dropdown-item" href="#">Action</a> -->
<!--     <a class="dropdown-item" href="#">Another action</a> -->
<!--     <a class="dropdown-item" href="#">Something else here</a> -->
<!--   </div> -->
<!-- </div> -->
			
			
			</nav>


		</div>

        <main role="main" class="inner cover">
            <img src="{{ URL::to('/') }}/images/logo-title.png" class="img-fluid" alt="Open Your Eyes" style="max-width:300px">
            <p class="display-4">{@lang('header_fake_news')}</p>
            <p>[ 2018-1-BG01-KA204-047871 ]</p>
           
            <div class="links mt-1">
                @if($flash = session('message'))
                <div class="alert alert-success mt-5" role="alert">
                    {{ $flash }}
                </div>
                @endif
            </div>

        </main>

        <footer class="mastfoot mt-auto">
          <div class="col-12 text-justify mt-5 ">
			<img src="{{ URL::to('/') }}/images/logosbeneficaireserasmusleft.png"
				width="190px" style="float: left; margin: 4px 10px 0px 0px;"> <small>"@lang('t_disclaimer')"
				<p class="mt-3 text-center">2019 Open your eyes</p>
			</small>
		</div>
        </footer>
    </div>
    <!--<script type="text/javascript" src="/js/app.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a2ef58b7d1.js"></script>
    
</body>

</html>
