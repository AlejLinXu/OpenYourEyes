<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Open Your Eyes | Database</title>


<link href="https://fonts.googleapis.com/css?family=Nunito:200,600"
	rel="stylesheet">


<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<style>
html, body {
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

.oMenu {
	color: #585857;
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

		<div class="container-fluid mr-auto p-3"
			style="background-image: linear-gradient(to right, rgba(26, 157, 217, 0.80), white);">
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
						<li class="nav-item "><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav')
						</a></li>
						<li class="nav-item active"
							style="border-bottom: 4px solid #54b3df"><a
							class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/database') }}">@lang('Database_nav')
								<span class="sr-only">(current)</span>
						</a></li>
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
			</nav>


		</div>
		<div class="stripe"></div>


		<div class="container py-3">
			<div class="row text-center">
				<div class="col-12">
					<img class="d-block mx-auto mb-4"
						src="{{ URL::to('/') }}/images/logo-title.png"
						alt="Open your eyes" width="130" height="130">
					<h3>@lang('header_fake_news')</h3>
					<hr>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-12">
					<h3>@lang('t_database_list')</h3>
					<h5></h5>
					<p class="text-justify">@lang('t_database_list_p1')</p>
					<p class="text-justify">@lang('t_database_list_p2')</p>
					<p class="text-justify">@lang('t_database_list_p3')</p>





				</div>
			</div>
			<hr>

			<form method="POST"
				action="{{'/'.Config::get('app.locale')}}/database/list">
				@method('POST') @csrf
				<div class="row">

					<div class="col-3">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Country</label> <select
								class="form-control" id="filter_survey_country"
								name="filter_survey_country">
								<option value="*">All</option> @foreach($countries as $country)
								<option value="{{$country->location_initiative_project}}"
									<?php

if (isset($filterCountry) && $filterCountry == $country->location_initiative_project)
            echo 'selected';
        ?>>{{$country->location_initiative_project}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Type</label> <select
								class="form-control" id="filter_survey_type"
								name="filter_survey_type">
								<option value="*">All</option>
								<option value="online_initiative"
									<?php

if (isset($filterType) && $filterType == 'online_initiative')
            echo 'selected';
        ?>>Online</option>
								<option value="offline_initiative"
									<?php

if (isset($filterType) && $filterType == 'offline_initiative')
            echo 'selected';
        ?>>Offline</option>
								<option value="workshops_initiative"
									<?php

if (isset($filterType) && $filterType == 'workshops_initiative')
            echo 'selected';
        ?>>Workshops</option>
								<option value="toolkit_initiative"
									<?php

if (isset($filterType) && $filterType == 'toolkit_initiative')
            echo 'selected';
        ?>>Tool</option>
								<option value="education_program_initiative"
									<?php

if (isset($filterType) && $filterType == 'education_program_initiative')
            echo 'selected';
        ?>>Education program</option>
								<option value="game_initiative"
									<?php

if (isset($filterType) && $filterType == 'game_initiative')
            echo 'selected';
        ?>>Game</option>
								<option value="media_initiative"
									<?php

if (isset($filterType) && $filterType == 'media_initiative')
            echo 'selected';
        ?>>Media</option>
								<option value="fact_initiative"
									<?php

if (isset($filterType) && $filterType == 'fact_initiative')
            echo 'selected';
        ?>>Fact-checking</option>
								<option value="event_initiative"
									<?php

if (isset($filterType) && $filterType == 'event_initiative')
            echo 'selected';
        ?>>Event</option>
								<option value="other_initiative"
									<?php

if (isset($filterType) && $filterType == 'other_initiative')
            echo 'selected';
        ?>>Others</option>
							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Audience</label> <select
								class="form-control" id="filter_survey_audience"
								name="filter_survey_audience">
								<option value="*">All</option>
								<option value="kids_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'kids_initiative')
            echo 'selected';
        ?>>Kids</option>
								<option value="teenagers_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'teenagers_initiative')
            echo 'selected';
        ?>>Teenagers</option>
								<option value="young_adults_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'young_adults_initiative')
            echo 'selected';
        ?>>Young adults</option>
								<option value="adults_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'adults_initiative')
            echo 'selected';
        ?>>Adults</option>
								<option value="elderly_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'elderly_initiative')
            echo 'selected';
        ?>>Elderly</option>
								<option value="teachers_educators_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'teachers_educators_initiative')
            echo 'selected';
        ?>>Teachers / Educators</option>
								<option value="professionals_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'professionals_initiative')
            echo 'selected';
        ?>>Professionals</option>
								<option value="other_target_initiative"
									<?php

if (isset($filterAudience) && $filterAudience == 'other_target_initiative')
            echo 'selected';
        ?>>Others</option>

							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Platforms</label> <select
								class="form-control" id="filter_survey_plattform"
								name="filter_survey_plattform">
								<option value="*">All</option>
								<option value="global_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'global_platform_initiative')
            echo 'selected';
        ?>>Global</option>
								<option value="website_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'website_platform_initiative')
            echo 'selected';
        ?>>Websites</option>
								<option value="search_engine_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'search_engine_platform_initiative')
            echo 'selected';
        ?>>Search engines</option>
								<option value="video_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'video_platform_initiative')
            echo 'selected';
        ?>>Video platforms</option>
								<option value="sopen_social_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'sopen_social_platform_initiative')
            echo 'selected';
        ?>>Open social networks</option>
								<option value="forum_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'forum_platform_initiative')
            echo 'selected';
        ?>>Forums</option>
								<option value="close_social_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'close_social_platform_initiative')
            echo 'selected';
        ?>>Close Social networks</option>
								<option value="other_platform_initiative"
									<?php

if (isset($filterPlattform) && $filterPlattform == 'other_platform_initiative')
            echo 'selected';
        ?>>Other</option>

							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">

							<button type="submit" class="btn btn-secondary">Filter</button>
						</div>

					</div>

				</div>
			</form>
			<hr>

			<div class="row text-center">
            <?php
            $colors = array(

                array(
                    "#E7F6FC",
                    "#212529",
                    "#002C3E"
                ),
                array(
                    "#73CAEF",
                    "#212529",
                    "#002C3E"
                ),
                array(
                    "#5CC1ED",
                    "#212529",
                    "#002C3E"
                ),
                array(
                    "#004968",
                    "#FFFFFF",
                    "#002C3E"
                ),
                array(
                    "#002C3E",
                    "#FFFFFF",
                    "#002C3E"
                ),
                array(
                    "#009FE3",
                    "#212529",
                    "#002C3E"
                )
            );

            ?>
            @foreach($surveys as $survey)
            	 <?php $colorNum=rand(0,5);?>
            	
      	            <div class="col-md-4 col-sm-12 col-xs-12 my-2">
					<div class="card shadow " style="min-height: 100%">
						<div class="card-body" style="background-color: <?php echo $colors[$colorNum][0];?>">
							<h5 class="card-title font-weight-bold" style="color: #1E71B8">
								@if($survey->nombre !='') {{$survey->nombre}} @else
								{{$survey->name_initiative_project}} @endif</h5>
							<p class="card-text" style="color: <?php echo $colors[$colorNum][1]?>">
								@if($survey->descripcion !='') {{str_limit($survey->descripcion,
								'550')}} @else
								{{str_limit($survey->brief_aim_initiative_project, '550')}}
								@endif</p>
						</div>
						<div class="card-footer">
							<small class="font-weight-bold">
								<form method="POST"
									action="{{'/'.Config::get('app.locale')}}/database/detail/{{$survey->id}}">
									@method('POST') @csrf
									<button class="btn btn-link text-decoration-none" type="submit"  
      		style="color: <?php echo $colors[$colorNum][2];?>">
										<b>Read more</b>
									</button>
									<input type="hidden" name="filter_survey_country"
										value="<?php if (isset($filterCountry)) {echo $filterCountry;}?>">
								</form>
							</small>
							<!-- href="list/{{$survey->id}}" -->
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<hr my-5>
			<div class="col-12 text-justify mt-5 ">
				<img
					src="{{ URL::to('/') }}/images/logosbeneficaireserasmusleft.png"
					width="190px" style="float: left; margin: 4px 10px 0px 0px;"> <small>"@lang('t_disclaimer')"
					<p class="mt-3 text-center">2019 Open your eyes</p>
				</small>
			</div>
		</div>
	</div>
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