<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Your Eyes | Contact</title>


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
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
							href="{{ url('/'.Config::get('app.locale')) }}">@lang('Home_nav')</a></li>
						<li class="nav-item "><a class="nav-link oMenu font-weight-bold"  href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav') 
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
						<li class="nav-item"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/news') }}">@lang('News_nav')</a></li>
						<li class="nav-item active"  style="border-bottom:4px solid #54b3df"><a class="nav-link oMenu font-weight-bold"
							href="{{ url('/'.Config::get('app.locale').'/contact') }}">@lang('Contact_nav')  <span
								class="sr-only">(current)</span></a></li>
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
                    <h3 style="color:#585857">{@lang('header_fake_news')}</h3>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <h3>@lang('t_contact')</h3>
                    <h5>-C0nt4cT-</h5>

                </div>
                
                <div class="col-12 text-left">
                	<form   class="needs-validation">
                        @csrf
                                                            
                        <h4 class="sub-title"><b>@lang('t_contact_p1')</b></h4>
                         <div class="mb-3">
                         
                                <label for="first_name">@lang('t_contact_p2') <span style="color:red">*</span></label>
                                <input type="text" maxlength="350" class="form-control" name="first_name_contact" id="first_name_contact" placeholder="" value="{{ old('first_name_contact') }}"
                                    required="required">
                        </div>
                        <div class="mb-3">
                            <label for="email">@lang('t_contact_p3') <span style="color:red">*</span></label>
                            <input type="email" maxlength="190" class="form-control" id="email_contact" name="email_contact" placeholder="" required="required" value="{{ old('email_contact') }}">                           
                        </div>
                        <div class="mb-3">
                            <label for="organisation_contact">@lang('t_contact_p4') <span style="color:red">*</span></label>
                            <input type="text" maxlength="190" class="form-control" id="organisation_contact" name="organisation_contact" placeholder="" value="{{ old('organisation_contact') }}"
                                required="">
                        </div>
                        <div class="mb-3">
                            <label for="contact_message">@lang('t_contact_p5') <span style="color:red">*</span></label>
                              <textarea class="form-control" id="contact_message" rows="3" name="contact_message"></textarea>
                        </div>
                         <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfaCLsUAAAAADN6IbrgIQv7dhdV5A9660cO0A1T"></div>
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="sendContactInfo()" class="btn btn-primary">@lang('t_contact_p6')</button>
                                </div>
                                <div class="form-group" id="emailSendMessage">
                                </div>
                        </form>
                        <hr class="mb-4">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

    function sendContactInfo() {

        var fullFilledEntries = false;

        var first_name_contact = $('#first_name_contact').val();
        var email_contact = $('#email_contact').val();
        var organisation_contact = $('#organisation_contact').val();
        var contact_message = $('#contact_message').val();

        var first_name_contact = first_name_contact.trim();
        var email_contact = email_contact.trim();
        var organisation_contact = organisation_contact.trim();
        var contact_message = contact_message.trim();

        if (first_name_contact != '' && email_contact != '' && organisation_contact != '' && contact_message != '') {
            fullFilledEntries = true;
        }

        var dades = { 'name': first_name_contact, 'email': email_contact, 'message': contact_message, 'organisation': organisation_contact, 'captcha': grecaptcha.getResponse() }

        if (fullFilledEntries == true) {
		
            $.ajax({
                method: "POST",
                url: "./contact-send.php",
                data: dades
            })
                .done(function (msg) {
					
                    if (msg == 1) {
                        $('#emailSendMessage').html('<div class="alert alert-success"role="alert">' +
                            'Your message has been submitted to us' + '</div>');


                    } else {
                        $('#emailSendMessage').html('<div class="alert alert-danger"  role="alert">' +
                            'Ooops error sending email.' + '</div >');

                        grecaptcha.reset();
                    }

                });
        } else {
            $('#emailSendMessage').html('<div class="alert alert-warning" role="alert">' +
                'Please fill all the fields.' +
                '</div >');


        }
    }

    </script>
</body>

</html>