<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Open Your Eyes</title>


<link href="https://fonts.googleapis.com/css?family=Nunito:200,600"
	rel="stylesheet">


<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet"
	href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css">


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
		</div>
		<div class="stripe"></div>
		<div class="container">
			<div class="row pt-3">
				<div class="col">
					<a class="btn btn-secondary" href="{{route('survey.list')}}"
						role="button">Cancel</a>
				</div>
			</div>
			<div class="py-3 text-center">
				<h3>Survey Translation</h3>
			</div>
			<div class="alert alert-info" role="alert">Untranslated fields are shown in English (original survey creation text).<br>
			To change English text (or original survey text) please go to <a href="{{ route('survey.edit',$survey->id) }}">Edit survey</a>
			</div>
			<div class="py-3 text-center">
				@if (session('message'))
				<div class="alert alert-success"><b>{{ session('message') }}</b></div>
				@endif

			</div>

			<!--  -->
			<?php
			//echo $translationsIndexed['si'][0]->name_initiative_project;
			//value="{{ $translationsIndexed[$lang->description][0]->name_initiative_project }}"
			
			?>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<?php $active=1;?>
				@foreach($languages as $lang)
					<a
						class="nav-item nav-link <?php if($active==1) {echo 'active';}?>"
						id="nav-home-tab" data-toggle="tab"
						href="#nav-{{$lang->language}}" role="tab"
						aria-controls="nav-home" aria-selected="true">{{$lang->language}}</a>
					<?php  $active=0;?>
				@endforeach
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent" style="">
				<hr>
			<?php $active=1;?>
				@foreach($languages as $lang)
					
					<div
					class="tab-pane fade show <?php if($active==1) {echo 'active';}?>"
					id="nav-{{$lang->language}}" role="tabpanel"
					aria-labelledby="nav-home-tab">

					<form class="needs-validation" novalidate method="POST"
						action="{{ route('survey.translationUpdate',[ $survey->id, $lang->description])}}"
						autocomplete="off">
						@method('POST')
						@csrf
						<h4 class="mb-3 sub-title">
							<b>Participation in media literacy initiative related to fake
								news, misinformation or disinformation</b>
						</h4>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="name_initiative_project">Name of
									initiative/project/organisation or other activity you
									created/participate(d) in </label> <input type="text"
									maxlength="190" class="form-control"
									id="name_initiative_project_{{$lang->description}}" name="name_initiative_project_{{$lang->description}}"
									placeholder="" value="<?php 
									if(array_key_exists($lang->description,$translationsIndexed)){
									    echo $translationsIndexed[$lang->description][0]->name_initiative_project;
									}else{ echo $survey->name_initiative_project; }
									?>"
									required="">
								<div class="invalid-feedback"></div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="location_initiative_project">Initiative location
									(country): </label> <input type="text" maxlength="190"
									class="form-control" name="location_initiative_project_{{$lang->description}}"
									id="location_initiative_project_{{$lang->description}}" placeholder=""
									
									value="<?php 
									if(array_key_exists($lang->description,$translationsIndexed)){
									    echo $translationsIndexed[$lang->description][0]->location_initiative_project;
									}else{echo $survey->location_initiative_project; }
									?>" 
									required="">
								<div class="invalid-feedback"></div>
							</div>
						</div>
						<hr class="mb-4">
						<h4 class="mb-3 sub-title ">
							<b>Initiative Overview</b>
						</h4>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="brief_aim_initiative_project">Brief overview of the
									aims (up to 200 words) </label>
								<textarea class="form-control" id="brief_aim_initiative_project_{{$lang->description}}"name="brief_aim_initiative_project_{{$lang->description}}" rows="10"><?php if(array_key_exists($lang->description,$translationsIndexed)){echo $translationsIndexed[$lang->description][0]->brief_aim_initiative_project;}else{ echo $survey->brief_aim_initiative_project;}?></textarea><div class="invalid-feedback"></div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="brief_expected_initiative_project">Brief overview of
									expected results (up to 200 words): </label>
								<textarea class="form-control" id="brief_expected_initiative_project_{{$lang->description}}" name="brief_expected_initiative_project_{{$lang->description}}" rows="20"><?php if(array_key_exists($lang->description,$translationsIndexed)){echo $translationsIndexed[$lang->description][0]->brief_expected_initiative_project;}else{ echo $survey->brief_expected_initiative_project; }?></textarea>
								<div class="invalid-feedback"></div>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit"
							style="background-color: #54B3DF">Update {{$lang->language}}</button>
					</form>

				</div>
						<?php  $active=0;?>
				@endforeach
			</div>
			<!--  -->
			<div class="row mb-4">
				@if ($errors->any())
				<div class="col-md-12">
					<div class="alert alert-danger">Holy guacamole! You should check in
						on some of those fields below.</div>
				</div>
				@endif
				<div class="col-md-12"></div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.0.js"
		integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>

