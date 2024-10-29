<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Your Eyes | About</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <style>
        html,
        body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .stripe {
            background: repeating-linear-gradient(to right, #1E71B8 1px, #ffff 8px);
            padding: 0.5rem;
        }

        .sub-title {
            color: #1E71B8;
        }
        .oMenu{
            color:#585857;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
    	
<!--         @if (Route::has('login')) -->
<!--         <div class="top-right links"> -->
<!--             @auth -->
<!--             <a href="{{ url('/home') }}">Home</a> @else -->
<!--             <a href="{{ route('login') }}">Login</a> @if (Route::has('register')) -->
<!--             <a href="{{ route('register') }}">Register</a> @endif @endauth -->
<!--         </div> -->
<!--         @endif -->

        <div class="container-fluid mr-auto p-3" style="background-image: linear-gradient(to right, rgba(26,157,217,0.80) , white);">

			<nav class="navbar navbar-expand-md px-0 py-0 ">
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarsExample08" aria-controls="navbarsExample08"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg"></i></span>
				</button>

				<div class="collapse navbar-collapse justify-content-md-center"
					id="navbarsExample08">
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale'))  }}">@lang('Home_nav')</a></li>
						<li class="nav-item active" style="border-bottom:4px solid #54b3df"><a class="nav-link oMenu font-weight-bold"  href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav') <span
								class="sr-only">(current)</span>
						</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/database') }}">@lang('Database_nav') </a></li>
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
							href="{{ url('/'.Config::get('app.locale').'/partners') }}">@lang('Partners_nav') </a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/news') }}">@lang('News_nav') </a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/contact') }}">@lang('Contact_nav') </a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold "
							href="{{ url('/'.Config::get('app.locale').'/survey') }}">@lang('Survey_nav') </a></li>

					</ul>
				</div>
			</nav>

		</div>
        <div class="stripe"></div>


        <div class="container py-3">
            <div class="row text-center">
                <div class="col-12">
                    <img class="d-block mx-auto mb-4" src="{{ URL::to('/') }}/images/logo-title.png" alt="Open your eyes" width="130" height="130">
                    <h3>@lang('header_fake_news')</h3>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <h3>@lang('t_about_project')</h3>
                    <h5></h5>
                    <p class="text-justify">@lang('t_about_project_p1')</p>
                    <p class="mt-2 text-justify">@lang('t_about_project_p2')
                        <ul class="mt-2 text-justify">
                            <li class="mt-2 pl-2"><b>@lang('t_about_project_p3') </li>
                            <li class="mt-2 pl-2"><b>@lang('t_about_project_p4')
                            </li>
                        </ul>
                    </p>
                    <p class="text-center mt-4">@lang('t_about_project_p5')</p>
                </div>
            </div>
           
            <hr my-5>
           	<div class="col-12 text-justify mt-5 ">
           	  <img src="{{ URL::to('/') }}/images/logosbeneficaireserasmusleft.png" width="190px"  style="float: left; margin: 4px 10px 0px 0px;">
            <small>"@lang('t_disclaimer')"  <p class="mt-3 text-center">2019 Open your eyes</p></small>
            </div>
           
           
          
         
            
<!--             <footer class="pt-3 text-muted text-center text-small"> -->
              
<!--                 <ul class="list-inline"> -->
<!--                     <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li> -->
<!--                 </ul> -->
<!--             </footer> -->

        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a2ef58b7d1.js"></script>
</body>

</html>