<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Open Your Eyes | Resources</title>


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
							href="{{ url('/'.Config::get('app.locale')) }}">@lang('Home_nav')</a></li>
						<li class="nav-item "><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav')
						</a></li>
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/database') }}">@lang('Database_nav')
						</a></li>
						
						
						<!-- <li class="nav-item active"
							style="border-bottom: 4px solid #54b3df"><a
							class="nav-link oMenu font-weight-bold "
							href="{{ url('/'.Config::get('app.locale').'/resources') }}">@lang('Resources_nav')
								<span class="sr-only">(current)</span>
						</a></li>-->
						
						<li class="nav-item active dropdown" style="border-bottom: 4px solid #54b3df">
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
					<h3>@lang('t_res_handbook')</h3>
					<h5></h5>
					<!--  <p class="text-justify">@lang('t_res_handbook_p1')</p>-->
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="card text-center select-lesson"
						style="cursor: pointer; background-color:#1a9dd9"  id="0">
						<div class="card-body h4 "
							onclick="mostraContingut('1','{{ app()->getLocale()}}',this.parentNode.id)">@lang('r_handbook')</div>
					</div>
					<div class="accordion" id="accordionExample">
						<div class="card ">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button
										class="btn btn-link btn-block text-left text-decoration-none"
										type="button" data-toggle="collapse"
										data-target="#collapseOne" aria-expanded="true"
										aria-controls="collapseOne">
										<p class="text-center">
											<u><strong>@lang('r_module') 1</strong></u>
										</p>
										<p class="text-left">@lang('r_m1_title')</p>
									</button>
								</h2>
							</div>
							<div id="collapseOne" class="collapse show"
								aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item  select-lesson " id="1"><a
											style="cursor: pointer"
											onclick="mostraContingut('7','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_get_ready') </a></li>
										<li class="list-group-item  select-lesson " id="2"><a
											style="cursor: pointer"
											onclick="mostraContingut('8','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_check_out') </a></li>
										<li class="list-group-item  select-lesson " id="3"><a
											style="cursor: pointer"
											onclick="mostraContingut('9','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_verify') </a></li>
										<li class="list-group-item  select-lesson " id="4"><a
											style="cursor: pointer"
											onclick="mostraContingut('20','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_dys')</a></li>
										<li class="list-group-item  select-lesson " id="5"><a
											style="cursor: pointer"
											onclick="mostraContingut('21','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_sources') </a></li>
										<li class="list-group-item  select-lesson " id="6"><a
											style="cursor: pointer"
											onclick="mostraContingut('21','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_freading') </a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed text-decoration-none"
										type="button" data-toggle="collapse"
										data-target="#collapseTwo" aria-expanded="false"
										aria-controls="collapseTwo">
										<p class="text-center">
											<u><strong>@lang('r_module') 2</strong></u>
										</p> <p class="text-left">@lang('r_m2_title')</p>
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse"
								aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<ul class="list-group list-group-flush">

										<li class="list-group-item  select-lesson " id="7"><a
											style="cursor: pointer"
											onclick="mostraContingut('23','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_get_ready') </a></li>
										<li class="list-group-item  select-lesson " id="8"><a
											style="cursor: pointer"
											onclick="mostraContingut('24','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_check_out') </a></li>
										<li class="list-group-item  select-lesson " id="9"><a
											style="cursor: pointer"
											onclick="mostraContingut('25','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_verify') </a></li>
										<li class="list-group-item  select-lesson " id="10"><a
											style="cursor: pointer"
											onclick="mostraContingut('36','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_dys')</a></li>
										<li class="list-group-item  select-lesson " id="11"><a
											style="cursor: pointer"
											onclick="mostraContingut('38','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_sources') </a></li>
										<li class="list-group-item  select-lesson " id="12"><a
											style="cursor: pointer"
											onclick="mostraContingut('38','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_freading') </a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed text-decoration-none"
										type="button" data-toggle="collapse"
										data-target="#collapseThree" aria-expanded="false"
										aria-controls="collapseThree">
											<p class="text-center">
											<u><strong>@lang('r_module') 3</strong></u>
										</p> <p class="text-left"> @lang('r_m3_title')</p>
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse"
								aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<ul class="list-group list-group-flush">
										<li class="list-group-item  select-lesson " id="13"><a
											style="cursor: pointer"
											onclick="mostraContingut('40','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_get_ready') </a></li>
										<li class="list-group-item  select-lesson " id="14"><a
											style="cursor: pointer"
											onclick="mostraContingut('41','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_check_out') </a></li>
										<li class="list-group-item  select-lesson " id="15"><a
											style="cursor: pointer"
											onclick="mostraContingut('42','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_verify') </a></li>
										<li class="list-group-item  select-lesson " id="16"><a
											style="cursor: pointer"
											onclick="mostraContingut('52','{{ app()->getLocale()}}',this.parentNode.id);"> 
												@lang('r_dys')</a></li>
										<li class="list-group-item  select-lesson " id="17"><a
											style="cursor: pointer"
											onclick="mostraContingut('56','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_case_study') </a></li>
										<li class="list-group-item  select-lesson " id="18"><a
											style="cursor: pointer"
											onclick="mostraContingut('60','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_sources') </a></li>
										<li class="list-group-item  select-lesson " id="19"><a
											style="cursor: pointer"
											onclick="mostraContingut('60','{{ app()->getLocale()}}',this.parentNode.id);">
												@lang('r_freading') </a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">

					<div class="row">
						<div class="col-md-12 ">
							<div id="pissarra" class="text-justify">
								<embed id="myframe"
									src="{{asset('docs/'.app()->getLocale().'/1.pdf#toolbar=0&amp;navpanes=0&amp;zoom=105&amp;scrollbar=0view=fitH,100')}}"
									type="application/pdf" width="100%" style="height: 90vh">
							</div>
						</div>
					</div>
				</div>
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
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a2ef58b7d1.js"></script>

	<script type="text/javascript">

    function mostraContingut(id,lang,elem){
    	$(".select-lesson").css({"background-color":""});
    		$("#"+elem).css({"background-color":"#1a9dd9"});
       $.post( "/pissarra_"+lang+".php",  {'id': id,'lang':lang})
       .done(function( data ) {
           	 $('#pissarra').html(data);			
       });
	}		

	function checkAnswers(test){
		if(test=='9'){

			var q1=[]
			var q2=[]
			var q3=[]
			var q4=[]
			var q5=[]
			var q6=[]
			var q7=[]
			var q8=[]
			var q9=[]
		
			$.each($("input[name='q1']:checked"), function(){
                q1.push($(this).val());
            });
			$.each($("input[name='q2']:checked"), function(){
                q2.push($(this).val());
            });
			$.each($("input[name='q3']:checked"), function(){
                q3.push($(this).val());
            });
			$.each($("input[name='q4']:checked"), function(){
                q4.push($(this).val());
            });
			$.each($("input[name='q5']:checked"), function(){
                q5.push($(this).val());
            });
			$.each($("input[name='q6']:checked"), function(){
                q6.push($(this).val());
            });
			$.each($("input[name='q7']:checked"), function(){
                q7.push($(this).val());
            });
			$.each($("input[name='q8']:checked"), function(){
                q8.push($(this).val());
            });
			$.each($("input[name='q9']:checked"), function(){
                q9.push($(this).val());
            });

            if (q1.length < 1 || q2.length < 1 || q3.length < 1 || q4.length < 1 || 
                    	q5.length < 1 || q6.length < 1 || q7.length < 1 || q8.length < 1 || q9.length < 1 )
            {
            		alert("Please select at least one answer for each question.");    
            }else{
            	 $.post( "/checkanswers.php",  {'test':9,'q1': q1,'q2': q2,'q3': q3,'q4': q4,'q5': q5,
    				 'q6': q6,'q7': q7,'q8': q8,'q9': q9})
    		       .done(function( data ) {
    			         for(var i=1;i<=9;i++){
    			        	 $('#resultq'+i).html(data["q"+i]);	
    			        	}
    		           			
    		       },"json");
  		       }
				
			
		}else if (test=='25'){

			var q1=[]
			var q2=[]
			var q3=[]
			var q4=[]
			var q5=[]
			var q6=[]
			
			$.each($("input[name='q1']:checked"), function(){
                q1.push($(this).val());
            });
			$.each($("input[name='q2']:checked"), function(){
                q2.push($(this).val());
            });
			$.each($("input[name='q3']:checked"), function(){
                q3.push($(this).val());
            });
			$.each($("input[name='q4']:checked"), function(){
                q4.push($(this).val());
            });
			$.each($("input[name='q5']:checked"), function(){
                q5.push($(this).val());
            });
			$.each($("input[name='q6']:checked"), function(){
                q6.push($(this).val());
            });

		    if (q1.length < 1 || q2.length < 1 || q3.length < 1 || q4.length < 1 || 
                	q5.length < 1 || q6.length < 1  )
        	{
        		alert("Please select at least one answer for each question.");    
       		}else{

        	$.post( "/checkanswers.php",  {'test':25,'q1': q1,'q2': q2,'q3': q3,'q4': q4,'q5': q5,
				 'q6': q6})
		       .done(function( data ) {
			         for(var i=1;i<=6;i++){
			        	 $('#resultq'+i).html(data["q"+i]);	
			        	}
		       },"json");
            }
			 

			
		}else if(test=='42'){
			var q1=[]
			var q2=[]
			var q3=[]
			var q4=[]
			var q5=[]

			$.each($("input[name='q1']:checked"), function(){
                q1.push($(this).val());
            });
			$.each($("input[name='q2']:checked"), function(){
                q2.push($(this).val());
            });
			$.each($("input[name='q3']:checked"), function(){
                q3.push($(this).val());
            });
			$.each($("input[name='q4']:checked"), function(){
                q4.push($(this).val());
            });
			$.each($("input[name='q5']:checked"), function(){
                q5.push($(this).val());
            });

		   if (q1.length < 1 || q2.length < 1 || q3.length < 1 || q4.length < 1 || 
                	q5.length < 1  )
        	{
        		alert("Please select at least one answer for each question.");    
       		}else{

       			$.post( "/checkanswers.php",  {'test':42,'q1': q1,'q2': q2,'q3': q3,'q4': q4,'q5': q5})
 		       .done(function( data ) {
 			         for(var i=1;i<=5;i++){
 			        	 $('#resultq'+i).html(data["q"+i]);	
 			        	}
 		       },"json");

           		}
			 
			
			}
	}

    </script>
</body>

</html>