<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Your Eyes | News</title>


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
							href="{{ url('/'.Config::get('app.locale'))}}">@lang('Home_nav')</a></li>
						<li class="nav-item " ><a class="nav-link oMenu font-weight-bold"  href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav') 
						</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/database') }}">@lang('Database_nav')</a></li>
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
						<li class="nav-item active" style="border-bottom:4px solid #54b3df"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/news') }}">@lang('News_nav')<span
								class="sr-only">(current)</span></a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/contact') }}">@lang('Contact_nav')</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold "
							href="{{ url('/'.Config::get('app.locale').'/survey') }}">@lang('Survey_nav')</a></li>

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
                    <h3>@lang('t_news_evnts')</h3>
                    <h5></h5>
                    <p class="text-justify">@lang('t_news_evnts_p1') </p> 
                  
										
                </div>
            </div>
			
				<div class="row">
					<div class="col-6" >
					<div class="card mb-3">
 <img src="{{ URL::to('/') }}/images/news/Open-Your-Eyes–EU-DisifoLab-Conference.jpg" class="card-img" alt="">
  <div class="card-body">
    <h5 class="card-title text-primary"><a href="{{url('/'.Config::get('app.locale').'/news/1')}}">Open Your Eyes – EU DisinfoLab Conference</a></h5>
    
  <p class="card-text">On May 29, in the framework of the EU DisinfoLab Conference in Brussels, a session dedicated
to the Erasmus+ Project ‘Open Your Eyes’ was held.</p>
 <p class="card-text"><small class="text-muted"><a href="{{url('pdf/Conference_Open_your_Eyes_article.pdf')}}" target="_blank">PDF article</a></small></p>
  
  </div>
</div>

					</div>
					<div class="col-6" >
					<div class="card mb-3">
 <img src="{{ URL::to('/') }}/images/news/Open-Your-Eyes-Gearing-Up.JPG" class="card-img" alt="">
  <div class="card-body">
    <h5 class="card-title text-primary"><a href="{{url('/'.Config::get('app.locale').'/news/2')}}">Open Your Eyes – PARTNERS GEARING UP AGAINST DISINFORMATION</a></h5>
    
  <p class="card-text">On September 24-25, Open Your Eyes partners flew to North-Eastern Romania to discuss the work done so far and set up the steps of their second year of collaboration.</p>
 
  
  </div>
</div>

					</div>
					<div class="col-6" >
					<div class="card mb-3">
 <img src="{{ URL::to('/') }}/images/news/face-to-face.jpg" class="card-img" alt="">
  <div class="card-body">
    <h5 class="card-title text-primary"><a href="{{url('/'.Config::get('app.locale').'/news/3')}}">Open Your Eyes – face to face training</a></h5>
    
  <p class="card-text">A three-day training event in the framework of the Erasmus+ Open Your Eyes project took place at the Adult Education Centre in Žalec, Slovenia, from January 14 to January 16, 2020. It gathered 14 participants from Spain, Belgium, Bulgaria, Romania and Slovenia, all playing an important part in the dissemination process of the project results.</p>
 
  
  </div>
</div>

					</div>
					<div class="col-6" >
					<div class="card mb-3">
 <img src="{{ URL::to('/') }}/images/news/Digitol-Survey.jpg" class="card-img" alt="">
  <div class="card-body">
    <h5 class="card-title text-primary"><a href="{{url('/'.Config::get('app.locale').'/news/4')}}">Open Your Eyes – DIGITOL Survey</a></h5>
    
  <p class="card-text">Our colleagues from the DIGITOL project are currently identifying needs and good practices in
relation to digital skills and combat fake news.</p>
 
  
  </div>
</div>

					</div>
					
					<div class="col-6" >
					<div class="card mb-3">
 <img src="{{ URL::to('/') }}/images/news/massdisinformation.jpg" class="card-img" alt="">
  <div class="card-body">
    <h5 class="card-title text-primary"><a href="{{url('/'.Config::get('app.locale').'/news/5')}}">Open Your Eyes – DEVELOPING CRITICAL THINKING IN TIMES OF MASS DISINFORMATION</a></h5>
  <p class="card-text">In the New Media Age we are <b>constantly surrounded by all kinds of information</b>, from political issues to advertisements and marketing, which gets to us 
  with no filter other than our own capacity to <b>critically assess its validity</b>. Biased information appears to be particularly difficult to decode for the less media-literate 
  demographics and, when
   mistaken for facts, it takes a toll both at individual and societal level.</p>
 
  
  </div>
</div>

					</div>
						
				</div>


			
			<hr my-5>
           	<div class="col-12 text-justify mt-5 ">
           	  <img src="{{ URL::to('/') }}/images/logosbeneficaireserasmusleft.png" width="190px"  style="float: left; margin: 4px 10px 0px 0px;">
            <small>"@lang('t_disclaimer')"  <p class="mt-3 text-center">2019 Open your eyes</p></small>
            </div>
           
           
<!--             <footer class="pt-3 text-muted text-center text-small"> -->
<!--                 <p class="mb-1">2019 Open your eyes</p> -->
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