<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Open Your Eyes</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css">
  
        
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
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <b> {{ config('app.name', 'Laravel') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="flex-center position-ref full-height">
       

        <div class="container-fluid mr-auto p-3" style="background-image: linear-gradient(to right, rgba(26,157,217,0.80) , white);">



        </div>
        <div class="stripe"></div>


        <div class="container">
        	<div class="row pt-3"><div class="col"><a class="btn btn-secondary" href="{{route('survey.list')}}" role="button">Cancel</a></div></div>
             <div class="py-3 text-center">
                

                <h3>New Survey</h3>
              
            </div>
          


            <div class="row mb-4">
                <div class="col-md-12">
                    <hr>
                </div>


                @if ($errors->any())

                <div class="col-md-12">
                    <div class="alert alert-danger">
                        Please fill in all required fields.
                    </div>

                </div>
                @endif

                <div class="col-md-12">
                    <p> <span style="color:red">*</span> <i>indicates required field</i></p>
                </div>

                <div class="col-md-12">

                    <form class="needs-validation" novalidate method="POST" action="{{ route('survey.store')}}" autocomplete="off">
                        @csrf
                        <p>Do you agree with the intended use of the information described above ? <span style="color:red">*</span>                            </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="intended_use" id="intended_use_true" value="1" {{ old( 'intended_use')=="1"
                                ? " checked ": '' }}>
                            <label class="form-check-label" for="intended_use_true">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="intended_use" id="intended_use_false" value="0" {{ old( 'intended_use')=="0"
                                ? " checked ": '' }}>
                            <label class="form-check-label" for="intended_use_false">No</label>
                        </div>
                        @if ($errors->has('intended_use'))
                        <div class="form-check form-check-inline text-danger font-weight-bold">This field is required.</div>@endif

                        <p class="mt-3">Can we quote your name in the project outcome ? <span style="color:red">*</span></p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="quote_name" id="quote_name_true" value="1" {{ old( 'quote_name')=="1"
                                ? " checked ": '' }}>
                            <label class="form-check-label" for="quote_name_true">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="quote_name" id="quote_name_false" value="0" {{ old( 'quote_name')=="0"
                                ? " checked ": '' }}>
                            <label class="form-check-label" for="quote_name_false">No</label>
                        </div>
                        @if ($errors->has('quote_name'))
                        <div class="form-check form-check-inline text-danger font-weight-bold">This field is required.</div>@endif
                        <hr class="mb-3">
                        <h4 class="sub-title"><b>Personal details</b></h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First name <span style="color:red">*</span></label>
                                <input type="text" maxlength="150" class="form-control" name="first_name" id="first_name" placeholder="" value="{{ old('first_name') }}"
                                    required="required"> @if ($errors->has('first_name'))

                                <strong class="text-danger">This field is required.</strong> @endif


                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last name <span style="color:red">*</span></label>
                                <input type="text" maxlength="150" class="form-control" name="last_name" id="last_name" placeholder="" value="{{ old('last_name') }}" required="required">                                @if ($errors->has('last_name'))

                                <strong class="text-danger">This field is required.</strong> @endif
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="email">Email <span style="color:red">*</span></label>
                            <input type="email" maxlength="190" class="form-control" id="email" name="email" placeholder="" required="required" value="{{ old('email') }}">                            @if ($errors->has('email'))

                            <strong class="text-danger">This field is required and must be a valid email.</strong> @endif
                        </div>

                        <div class="mb-3">
                            <label for="organisation">Organisation <span style="color:red">*</span></label>
                            <input type="text" maxlength="190" class="form-control" id="organisation" name="organisation" placeholder="" value="{{ old('organisation') }}"
                                required="">@if ($errors->has('organisation'))

                            <strong class="text-danger">This field is required.</strong> @endif

                        </div>

                        <div class="mb-3">
                            <label for="role_within_organisation">Your role within the organisation</label>
                            <input type="text" maxlength="190" class="form-control" id="role_within_organisation" name="role_within_organisation" value="{{ old('role_within_organisation') }}"
                                placeholder="">
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3 sub-title"><b>Participation in media literacy initiative related to fake news, misinformation or disinformation</b>
                        </h4>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="name_initiative_project">Name of initiative/project/organisation or other activity you
                                    created/participate(d) in </label>
                                <input type="text" maxlength="190" class="form-control" id="name_initiative_project" name="name_initiative_project" placeholder="" value="{{ old('name_initiative_project') }}"
                                    required="">

                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="web_initiative_project">Initiative/project web site: </label>
                                <input type="text" maxlength="200" class="form-control" id="web_initiative_project" name="web_initiative_project" value="{{ old('web_initiative_project') }}"
                                    placeholder="" required="">

                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="sponsor_initiative_project">Initiative sponsor: </label>
                                <input type="text" maxlength="190" class="form-control" id="sponsor_initiative_project" name="sponsor_initiative_project" placeholder=""
                                    value="{{ old('sponsor_initiative_project') }}" required="">

                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="location_initiative_project">Initiative location (country): </label>
                                <input type="text" maxlength="190" class="form-control" name="location_initiative_project" id="location_initiative_project" placeholder=""
                                    value="{{ old('location_initiative_project') }}" required="">

                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="country_initiative_project">Country or countries where the initiative operates: </label>
                                <input type="text" maxlength="190" class="form-control" id="country_initiative_project" name="country_initiative_project" placeholder=""
                                    value="{{ old('country_initiative_project') }}" required="">

                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="start_date_initiative_project">Initiative start date (if applicable) (Date format: yyyy-mm-dd) </label>
                                <input type="text" class="form-control" name="start_date_initiative_project" value="{{ old('start_date_initiative_project') }}"
                                    id="start_date_initiative_project" placeholder="" required="">

                               @if ($errors->has('start_date_initiative_project'))

                            <strong class="text-danger">Date format: yyyy-mm-dd</strong> @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date_initiative_project">Initiative end date (if applicable) (Date format: yyyy-mm-dd) </label>
                                <input type="text" class="form-control" id="end_date_initiative_project" name="end_date_initiative_project" placeholder=""
                                    value="{{ old('end_date_initiative_project') }}" required="">
                                 @if ($errors->has('end_date_initiative_project'))

                            <strong class="text-danger">Date format: yyyy-mm-dd</strong> @endif
                            </div>

                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3 sub-title "><b>Initiative Overview</b></h4>


                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="brief_aim_initiative_project">Brief overview of the aims (up to 200 words) </label>
                                <textarea  class="form-control" id="brief_aim_initiative_project" name="brief_aim_initiative_project" rows="3">{{ old('brief_aim_initiative_project') }}</textarea>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="brief_expected_initiative_project">Brief overview of expected results (up to 200 words): </label>
                                <textarea  class="form-control" id="brief_expected_initiative_project" name="brief_expected_initiative_project" rows="3">{{ old('brief_expected_initiative_project') }}</textarea>
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p>What form does your initiative take? </p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'online_initiative')=="1" ? " checked ": '' }} id="online_initiative"
                                        name="online_initiative">
                                    <label class="form-check-label" for="online_initiative">
                                        Online
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'offline_initiative')=="1" ? " checked ": '' }}id="offline_initiative"
                                        name="offline_initiative">
                                    <label class="form-check-label" for="offline_initiative">
                                        Offline
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'workshops_initiative')=="1" ? " checked ": '' }} id="workshops_initiative"
                                        name="workshops_initiative">
                                    <label class="form-check-label" for="workshops_initiative">
                                        Workshops
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'toolkit_initiative')=="1" ? " checked ": '' }}id="toolkit_initiative"
                                        name="toolkit_initiative">
                                    <label class="form-check-label" for="toolkit_initiative">
                                        Tool
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'education_program_initiative')=="1" ? " checked ": ''
                                        }} id="education_program_initiative" name="education_program_initiative">
                                    <label class="form-check-label" for="education_program_initiative">
                                        Education program
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'game_initiative')=="1" ? " checked ": '' }}id="game_initiative"
                                        name="game_initiative">
                                    <label class="form-check-label" for="game_initiative">
                                        Game
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'media_initiative')=="1" ? " checked ": '' }}id="media_initiative"
                                        name="media_initiative">
                                    <label class="form-check-label" for="media_initiative">
                                        Media
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'fact_initiative')=="1" ? " checked ": '' }}id="fact_initiative"
                                        name="fact_initiative">
                                    <label class="form-check-label" for="fact_initiative">
                                        Fact-checking
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'event_initiative')=="1" ? " checked ": '' }}id="event_initiative"
                                        name="event_initiative">
                                    <label class="form-check-label" for="event_initiative">
                                        Event
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'other_initiative')=="1" ? " checked ": '' }}id="other_initiative"
                                        name="other_initiative">
                                    <label class="form-check-label" for="other_initiative">
                                        Other (please describe briefly)
                                    </label>

                                </div>
                                <textarea class="form-control" maxlength="21000" id="other_initiative_description" name="other_initiative_description" rows="3">{{ old('other_initiative_description') }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p>What is your targeted audience: </p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'kids_initiative')=="1" ? " checked ": '' }}id="kids_initiative"
                                        name="kids_initiative">
                                    <label class="form-check-label" for="kids_initiative">
                                        Kids (3-10)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'teenagers_initiative')=="1" ? " checked ": '' }} id="teenagers_initiative"
                                        name="teenagers_initiative">
                                    <label class="form-check-label" for="teenagers_initiative">
                                        Teenagers (10-18)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'young_adults_initiative')=="1" ? " checked ": '' }}id="young_adults_initiative"
                                        name="young_adults_initiative">
                                    <label class="form-check-label" for="young_adults_initiative">
                                        Young adults (18-30)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'adults_initiative')=="1" ? " checked ": '' }}id="adults_initiative"
                                        name="adults_initiative">
                                    <label class="form-check-label" for="adults_initiative">
                                        Adults
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'elderly_initiative')=="1" ? " checked ": '' }}id="elderly_initiative"
                                        name="elderly_initiative">
                                    <label class="form-check-label" for="elderly_initiative">
                                        Elderly
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'teachers_educators_initiative')=="1" ? " checked ": ''
                                        }} id="teachers_educators_initiative" name="teachers_educators_initiative">
                                    <label class="form-check-label" for="teachers_educators_initiative">
                                        Teachers / Educators
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'professionals_initiative')=="1" ? " checked ": '' }} id="professionals_initiative"
                                        name="professionals_initiative">
                                    <label class="form-check-label" for="professionals_initiative">
                                        Professionals
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'other_target_initiative')=="1" ? " checked ": '' }} id="other_target_initiative"
                                        name="other_target_initiative">
                                    <label class="form-check-label" for="other_target_initiative">
                                        Other (please describe briefly)
                                    </label>

                                </div>
                                <textarea class="form-control" maxlength="21000" id="other_target_initiative_description" name="other_target_initiative_description" rows="3">{{ old('other_target_initiative_description') }}</textarea>


                                <p class="mt-4"> Do you have a specific focus, e.g. misinformation around elections, medical misinformation?</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="specific_focus_initiative" id="specific_focus_initiative_true" value="1" {{ old( 'specific_focus_initiative')=="1"
                                        ? " checked ": '' }}>
                                    <label class="form-check-label" for="specific_focus_initiative_true">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="specific_focus_initiative" id="specific_focus_initiative_false" value="0" {{ old( 'specific_focus_initiative')=="0"
                                        ? " checked ": '' }}>
                                    <label class="form-check-label" for="specific_focus_initiative_false">No</label>
                                </div>
                                @if ($errors->has('specific_focus_initiative'))
                                <div class="form-check form-check-inline text-danger font-weight-bold">This field is required.</div>@endif
                                <p class="mt-3">if Yes, please describe</p>
                                <textarea maxlength="21000" class="form-control" id="specific_focus_initiative_description" name="specific_focus_initiative_description" rows="3">{{ old('specific_focus_initiative_description') }}</textarea>


                            </div>

                            <div class="col-md-12 mb-3">
                                <p class="mt-4">Disinformation travels across different platforms: which of the following
                                    does your initiative tackle?: </p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'global_platform_initiative')=="1" ? " checked ": '' }}
                                        id="global_platform_initiative" name="global_platform_initiative">
                                    <label class="form-check-label" for="global_platform_initiative">
                                        Global
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'website_platform_initiative')=="1" ? " checked ": '' }}
                                        id="website_platform_initiative" name="website_platform_initiative">
                                    <label class="form-check-label" for="website_platform_initiative">
                                        Websites
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'search_engine_platform_initiative')=="1" ? " checked ":
                                        '' }} id="search_engine_platform_initiative" name="search_engine_platform_initiative">
                                    <label class="form-check-label" for="search_engine_platform_initiative">
                                        Search engines (Google, Bing, Yandex, etc.)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'video_platform_initiative')=="1" ? " checked ": '' }}
                                        id="video_platform_initiative" name="video_platform_initiative">
                                    <label class="form-check-label" for="video_platform_initiative">
                                        Video platforms (e.g. YouTube, Ruptly)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'sopen_social_platform_initiative')=="1" ? " checked ":
                                        '' }} id="sopen_social_platform_initiative" name="sopen_social_platform_initiative">
                                    <label class="form-check-label" for="sopen_social_platform_initiative">
                                        Open Social networks (e.g. Twitter, Facebook, VKontakte)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'forum_platform_initiative')=="1" ? " checked ": '' }}
                                        id="forum_platform_initiative" name="forum_platform_initiative">
                                    <label class="form-check-label" for="forum_platform_initiative">
                                        Forums (Reddit, etc.)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'close_social_platform_initiative')=="1" ? " checked ":
                                        '' }} id="close_social_platform_initiative" name="close_social_platform_initiative">
                                    <label class="form-check-label" for="close_social_platform_initiative">
                                        Close Social networks (e.g. SMS, WhatsApp, Snapchat)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'other_platform_initiative')=="1" ? " checked ": '' }}
                                        id="other_platform_initiative" name="other_platform_initiative">
                                    <label class="form-check-label" for="other_platform_initiative">
                                        Other (please specify )
                                    </label>

                                </div>
                                <textarea class="form-control" maxlength="21000" id="other_platform_initiative_description" name="other_platform_initiative_description" rows="3">{{ old('other_platform_initiative_description') }}</textarea>
                            </div>


                            <div class="col-md-12 mb-3">
                                <p>Disinformation spreads through different types of media: which one(s)
                                    does your initiative tackle? </p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'multimedia_modality_platform')=="1" ? " checked ": ''
                                        }} id="multimedia_modality_platform" name="multimedia_modality_platform">
                                    <label class="form-check-label" for="multimedia_modality_platform">
                                        Multimedia content (websites)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'text_only_modality_platform')=="1" ? " checked ": '' }}
                                        id="text_only_modality_platform" name="text_only_modality_platform">
                                    <label class="form-check-label" for="text_only_modality_platform">
                                        Text only
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'images_only_modality_platform')=="1" ? " checked ": ''
                                        }} id="images_only_modality_platform" name="images_only_modality_platform">
                                    <label class="form-check-label" for="images_only_modality_platform">
                                        Images only
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'video_only_modality_platform')=="1" ? " checked ": ''
                                        }} id="video_only_modality_platform" name="video_only_modality_platform">
                                    <label class="form-check-label" for="video_only_modality_platform">
                                        Video only
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'audio_only_modality_platform')=="1" ? " checked ": ''
                                        }} id="audio_only_modality_platform" name="audio_only_modality_platform">
                                    <label class="form-check-label" for="audio_only_modality_platform">
                                        Audio only
                                    </label>
                                </div>


                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" {{ old( 'other_modality_platform')=="1" ? " checked ": '' }} id="other_modality_platform"
                                        name="other_modality_platform">
                                    <label class="form-check-label" for="other_modality_platform">
                                        Other (please specify )
                                    </label>

                                </div>
                                <textarea maxlength="21000" class="form-control" id="other_modality_platform_description" name="other_modality_platform_description" rows="3">{{ old('other_modality_platform_description') }}</textarea>
                            </div>
                        </div>


                        <hr class="mb-4">
                        <h4 class="mb-3 sub-title "><b>Terminology</b></h4>


                        <p class="mt-4"> Is the term ‘fake news’ adequate or misleading?</p>
                        <p><i>Definition by the <a href="https://ec.europa.eu/newsroom/dae/document.cfm?doc_id=54454" target="_blank">European Commission Code of Practice on Disinformation</a>:</i></p>
                        <p class="text-justify"><i>“As provided under the Commission&#39;s Communication, for the purpose of this Code, the
                            Commission as well as the High Level Expert Group in its report define
                            &quot;Disinformation&quot; as &quot;verifiably false or misleading information&quot; which, cumulatively,
                            <br>(a) &quot;Is created, presented and disseminated for economic gain or to intentionally
                            deceive the public&quot;; and
                            <br>(b) &quot;May cause public harm&quot;, intended as &quot;threats to democratic political and
                            policymaking processes as well as public goods such as the protection of EU
                            citizens&#39; health, the environment or security&quot;.
                            <br>The notion of &quot;Disinformation&quot; does not include misleading advertising, reporting errors, satire
                            and parody, or clearly identified partisan news and commentary, and is without
                            prejudice to binding legal obligations, self-regulatory advertising codes, and standards
                            regarding misleading advertising.”</i></p>

                        <textarea maxlength="21000" class="form-control" id="term_adequate_description" name="term_adequate_description" rows="3">{{ old('term_adequate_description') }}</textarea>





                        <p class="mt-4">Do you think there is a difference between misinformation and disinformation and if yes, then can
                            you distinguish them in practice?
                        </p>
                        <textarea maxlength="21000" class="form-control" id="term_difference_description" name="term_difference_description" rows="3">{{ old('term_difference_description') }}</textarea>



                        <hr class="mb-4">
                        <h4 class="mb-3 sub-title "><b>Other initiatives</b> </h4>



                        <p class="mt-4">Are you collaborating with other organisations/initiatives and how?
                        </p>
                        <textarea maxlength="21000" class="form-control" id="other_initiatives_collaboration_description" name="other_initiatives_collaboration_description"
                            rows="3">{{ old('other_initiatives_collaboration_description') }}</textarea>



                        <p class="mt-4">Are you aware of any other initiatives, organisations or other activities working on
                            education to disinformation? Please provide pointers (link to the website or social
                            media page/contact info/...)
                        </p>
                        <textarea maxlength="21000" class="form-control" id="other_initiatives_aware_description" name="other_initiatives_aware_description" rows="3">{{ old('other_initiatives_aware_description') }}</textarea>







                        <p class="mt-4">Have you joined or do you consider joining any of these initiatives? Why would you join or not join?
                        </p>
                        <textarea maxlength="21000" class="form-control" id="other_initiatives_join_description" name="other_initiatives_join_description" rows="3">{{ old('other_initiatives_join_description') }}</textarea>



                       <hr class="mb-4">
                        <h4 class="mb-3 sub-title "><b>Admin Fields</b> </h4>
                          <p class="mt-4">Quote</p>
                        <textarea maxlength="21000"  class="form-control" id="admin_quote" name="admin_quote" rows="3">{{ old('admin_quote') }}</textarea>
                          <p class="mt-4">Link to external resource</p>
                        <textarea maxlength="21000"  class="form-control" id="admin_link_external_resource" name="admin_link_external_resource" rows="3">{{ old('admin_link_external_resource') }}</textarea>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#54B3DF">Save</button>
                    </form>
                </div>
            </div>
           
          
           
        </div>


    </div>
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#start_date_initiative_project" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
       	$( "#start_date_initiative_project" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );

       	$( "#end_date_initiative_project" ).datepicker({
            changeMonth: true,
            changeYear: true
          });
       	$( "#end_date_initiative_project" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );
        
      } );
  </script>
  
</body>

</html>
