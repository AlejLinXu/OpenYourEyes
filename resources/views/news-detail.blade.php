<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Open Your Eyes | News</title>


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
							href="{{ url('/'.Config::get('app.locale').'/about') }}">@lang('About_nav')</a></li>
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
						<li class="nav-item active"
							style="border-bottom: 4px solid #54b3df"><a
							class="nav-link oMenu font-weight-bold"
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
					<img class="d-block mx-auto mb-4"
						src="{{asset('images/logo-title.png')}}" alt="Open your eyes"
						width="130" height="130">
					<h3>Fake news for dummies</h3>
					<hr>
				</div>
			</div>
            
            <?php if($id==1) { ?>
                <div class="row text-center">
				<div class="col-12">

					<h3 class="text-center">Open Your Eyes – EU DisinfoLab Conference</h3>
					<h5></h5>



				</div>
			</div>
			<div class="row">
				<div class="col-12 text-justify pb-3">
					<p>On May 29, in the framework of the EU DisinfoLab Conference in
						Brussels, a session dedicated to the Erasmus+ Project ‘Open Your
						Eyes’ was held. The session has gathered around 80 participants
						working on media literacy, journalists, tech companies and
						researchers.</p>
					<p>Open Your Eyes targets adult learners and educators, improving
						their digital skills, raising awareness of the concept of fake
						news and providing the needed tools to combat it. Currently the
						project is working on the design of a toolkit for adults to
						identify fake news and fight the spread of disinformation online.</p>
					<p>The project intends to deliver two main outputs: 1) “Check IT
						Out” Database: a collection of scientific data, best practices and
						initiatives that enables users to develop a critical approach to
						news consumption and hopefully trigger their critical sense
						towards this issue and 2) “Check IT Out” Labs: held by
						especially-trained adult educators and based on the previously
						developed database. The Labs will target groups of 10+ adult
						learners in partner countries with the objective of developing
						their critical and digital skills, bringing them closer to the
						concept of fake news and ultimately spreading awareness about the
						topic within their network.</p>
					<p>The opening of the session “Open Your Eyes” was held by the
						Executive Director of EU DisinfoLab, Alexandre Alaphilippe, who
						has highlighted the necessity to share relevant tools and
						methodologies to reinforce media literacy among all generations.
						It is to mention that the EU DisinfoLab is a partner of the Open
						Your Eyes project.</p>
					<p>The 3 initiatives presented during the session are all part of
						the “Check IT Out” data base.  Drog , a media literacy game
						designed both for kids and for adults, Lie Detectors, an
						award-winning project liaising teachers and journalists and The
						News Evaluator project of Uppsala University were represented in
						the session.</p>

				</div>
				<div class="col-6 text-justify py-2">
					<p>First, Thomas Nygren, Associate Professor from Uppsala
						University has presented the News Evaluator project highlighting
						its main purpose, goals and findings. The project aims to
						investigate credibility of teenagers’ newsfeeds, teenagers’ and
						adults’ digital source critical skills and the impact of
						evaluating personal newsfeeds. One of the main findings of the
						project is that teenagers in Sweden read and share primarily
						credible news from established news media. He has also highlighted
						a collaboration with the Drog project represented by Marije
						Arentze.</p>
				</div>
				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/photo1.jpg')}}">
				</div>

				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail" alt=""
						src="{{url('/images/news/photo2.jpg')}}">
				</div>
				<div class="col-6 text-justify py-2">
					<p>Ms Arentze, Project Coordinator of the Bad News Game of Drog has
						presented the main results of the game and highlighted that the
						game helps to build resilience in people’s minds towards
						disinformation and bad news. Designed both for kids and adults,
						Drog makes media literacy education more fun. In cooperation with
						the University of Cambridge, Drog has developed in the form of a
						game an “innovative vaccine” to show you how various tactics and
						methods are used to spread deceitful messages. For Drog, the best
						way to cultivate a sixth sense to recognise and expose
						disinformation is to create it yourself.</p>
				</div>
				<div class="col-6 text-justify py-2">
					<p>Juliane Von Reppert-Bismarck, Founder and CEO of Lie
						Detectors has described how the project helps teenagers and
						pre-teens learn how to spot and resist the growing volume of
						manipulative media crowding their Facebook, Instagram and Snapchat
						accounts as they start to forge an independent world view. They do
						it by deploying journalists and selected media experts to teach in
						classroom sessions, recruiting them primarily from alumni circles
						of recognized journalism schools currently focusing in Belgium and
						Germany. Classroom sessions are free of charge and include an
						overview of fake news, methods of testing for misinformation, and
						analysis of drivers of the fake- news phenomenon.</p>
				</div>
				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/photo3.jpg')}}">
				</div>
				<div class="col-12 py-2 text-justify">
					<p>The presentations were followed by a Q&amp;A with the public and
						were concluded by Alexandre Alaphilippe, who has encouraged the
						audience working on media literacy to fill in the survey designed
						for the “Check IT Out” Database of the Open Your Eyes Project.</p>
				</div>

			</div>
                    <?php }else if($id==2){ ?>
                    <div class="row text-center">
				<div class="col-12">

					<h3 class="text-center">Open Your Eyes – PARTNERS GEARING UP
						AGAINST DISINFORMATION</h3>
					<h5></h5>



				</div>
			</div>
			<div class="row">
				<div class="col-12 text-justify pb-3">
					<p>On September 24-25, Open Your Eyes partners flew to
						North-Eastern Romania to discuss the work done so far and set up
						the steps of their second year of collaboration.</p>
					<p>Over the last twelve months, we have been working on developing
						a database of useful initiatives, tools and resources to learn
						about online disinformation and limit its spread. After selecting
						a number of countries affected by rising disinformation (e.g.
						related to separatism issues, or in connection to national and
						European elections), we identified interesting local initiatives
						and got in touch with them to learn more about their vision and
						their methods.</p>
					<p>All resources have now been catalogued and once the database is
						online they will be easily filtered by country, type, targeted
						audience and platforms addressed. Our web developers are currently
						working on the final step of the process and the database will
						become available in less than two months.</p>
					<p>Next step ahead: planning a training for trainers, who will then
						implement what they learned during “Check It Out” Labs for adult
						learners.</p>
					<p>
						Our meeting is now over but our fight against disinformation
						continues! If you know of any interesting initiative and would
						like to contribute to our database <a
							href="https://openyoureyes.info/{{Config::get('app.locale')}}/survey">tell us all about it here</a>.
					</p>

				</div>

				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/Open-Your-Eyes-Gearing-Up.JPG')}}">
				</div>

				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail" alt=""
						src="{{url('/images/news/Open-Your-Eyes-gear-team.jpg')}}">
				</div>





			</div>
                <?php

						} else if($id==3){ ?>
                    <div class="row text-center">
				<div class="col-12">

					<h3 class="text-center">Open Your Eyes – face to face training</h3>
					<h5></h5>



				</div>
			</div>
			<div class="row">
				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/face-to-face-5.jpg')}}">
				</div>
				<div class="col-6 text-justify py-2">
					<p>A three-day training event in the framework of the Erasmus+ Open
						Your Eyes project took place at the Adult Education Centre in
						Žalec, Slovenia, from January 14 to January 16, 2020. It gathered
						14 participants from Spain, Belgium, Bulgaria, Romania and
						Slovenia, all playing an important part in the dissemination
						process of the project results. It is to note that the Adult
						Education Centre in Žalec is one of the partners in the project,
						contributing their know-how and expertise in the field of adult
						education and learning.</p>
				</div>


				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/face-to-face-2.jpg')}}">
				</div>
				<div class="col-6 text-justify py-2">
					<p>Day 1 was held by Executive Director of EU DisinfoLab, Alexandre
						Alaphilippe, who first presented the conceptual background of
						»disinformation«, advising on how to identify disinformation and
						informing the participants about the way disinformation networks
						work. All participants, therefore, got a clearer insight on the
						importance of combating the challenges we are facing with
						disinformation and thus understood the necessity to share relevant
						information and tools with as many people as possible. Secondly,
						Mr Alaphilippe presented some practical case studies of
						disinformation campaigns around the world, explaining the details,
						backgrounds and reasons for them.</p>
				</div>

				<div class="col-12 text-justify pb-3">
					<p>The opening session of the second day of the training event was
						held by Head of Non-formal Educational Programmes at Adult
						Education Centre Žalec, Biserka Neuholt Hlastec, who highlighted
						the importance of a well-organized learning environment. The main
						objective of her session was to equip the participants with the
						knowledge on what an impact a well-organized learning environment
						may have on the entire learning process. As a result, all
						participants prepared their first structures of the “Check IT Out”
						Labs, which will be held by well-trained adult educators in the
						months to come. The Labs will target groups of 10+ adult learners
						in partner countries to develop their critical and digital skills,
						bringing them closer to the concept of fake news and ultimately
						spreading awareness about the topic within their network.</p>
				</div>
				<div class="col-12 py-2 text-center">
					<img class="img-fluid img-thumbnail mx-auto d-block"
						src="{{url('/images/news/face-to-face.jpg')}}">
				</div>
				<div class="col-6 py-2">
					<img class="img-fluid img-thumbnail"
						src="{{url('/images/news/face-to-face-3.jpg')}}">
				</div>
				<div class="col-6 text-justify py-2">
					<p>The first part of day 2 was followed by NERDA, presenting the
						concept of (digital) literacy. The aim of the presentation was to
						define the concept of media literacy (also in relation to other
						literacies), to present some literacy and digital literacy figures
						worldwide according to UNESCO and OECD statistics. Further, some
						challenged were presented and tips to overcome them. All in all,
						participants gained a basic insight into digital literacy and some
						of its most</p>
				</div>
				<div class="col-12 text-justify pb-3">
					<p>The last day of the training was firstly dedicated to ICT tool
						kit for education, presented by the representatives of Nikanor
						from Bulgaria, and secondly to the content development and
						structure of the »Check It Out« Handbook, led by Aleida López
						Giménez from OpenEurope. In the first part, the participants
						learned more about the ICT Power for adult education, adult
						learning and media in general, mis and disinformation in adult
						education, using ICT tools, and lastly about practical ICT tools
						for verification.</p>
						<p>In the end, we would like to thank all participants from partner countries who were part of our training event. We are grateful for all the contributions and hope all have gathered some useful ideas.</p>
				</div>
				<div class="col-12 py-2 text-center">
					<img class="img-fluid img-thumbnail mx-auto d-block"
						src="{{url('/images/news/face-to-face-4.jpg')}}">
				</div>





			</div>
                <?php

						} else if ($id==4){ ?>
						<div class="col-12 py-2 text-center">
					<img class="img-fluid img-thumbnail mx-auto d-block"
						src="{{url('/images/news/Digitol-Survey.jpg')}}">
				</div>
				
					<div class="col-12 text-justify pb-3">
					<p>Our colleagues from the DIGITOL project are currently identifying needs and good practices in
relation to digital skills and combat fake news.</p>
					<p>Digital literacy is defined by Law et al. (2018), as: “the ability to access, manage, understand,
integrate, communicate, evaluate and create information safely and appropriately through
digital technologies (…). It includes competencies that are variously referred to as computer
literacy, ICT literacy, information literacy, and media literacy.”</p>
					<p>Benefiting from the opportunities of our digitalized societies depends both on our abilities to
operate digital tools and to interpret the content accessed through digital technologies. In
2018, more than 35% of those aged between 65 and 74 had never used the Internet; this is the
highest ratio of all age groups. As a response, the DIGITOL project aims to understand what are
the specific aspects of digital literacy we should train for older persons to become more
proficient users of the Internet.</p>
					<p>Take the DIGITOL survey in English | Italian | German | Greek | Bulgarian</p>
					<p>The survey is open from 1 April to 15 May 2020. It will take you about 10 to 12 minutes to fill it
in and responses both from organizations or from individuals without professional affiliation
are collected. All the responses will remain confidential.</p>
					<p><a href="https://digitol.eu/2020/05/07/digitol-survey-what-is-missing-for-older-persons-to-make-the-most-of-the-internet/" target="_blank">More information</a></p>
					</div>
						
						
						<?php }else if ($id==5) {?>
						
							<div class="col-12 py-2 text-center">
					<img class="img-fluid img-thumbnail mx-auto d-block"
						src="{{url('/images/news/massdisinformation.jpg')}}">
				</div>
				<div><p class="text-center h3">Developing <b>critical thinking</b>
in times of <span style="color:#009FE3"><b>mass disinformation</b></span></p></div>
				<div class="col-12 text-justify pb-3">
				<p>In the New Media Age we are constantly surrounded by all kinds of information, from political issues to advertisements and marketing, which gets to us with no filter other 
				than our own capacity to critically assess its validity. Biased information appears to be particularly difficult to decode for the less media-literate demographics 
				and, when mistaken for facts, it takes a toll both at individual and societal level.</p>
				<p>With this conference, organised within the context of the Open Your Eyes project, we
				 wish to exchange with policy-makers and practitioners on the role of education in 
				 fostering critical thinking skills in the age of mass disinformation.</p>
				<p class="h5" style="color:#009FE3"><b>AGENDA</b></p>
				<p><table class="table">
 
  <tbody>
   <tr>
      <th scope="row" width="30%"><b style="color:#009FE3">Session 1</b></th>
      <td> <u>Open Your Eyes: teaching and learning about disinformation</u></td>
    
    </tr>
    <tr>
      <th scope="row">14:00-14:05</th>
      <td>Welcome words + waiting for people to connect<br>

DLearn &amp; LLLP</td>
      
    </tr>
    <tr>
      <th scope="row">14:05-14:15</th>
      <td>Presentation of main results<br><b>“Check It Out” database</b>: best practices and lessons learned<br>
<i>Project coordinator: Vitlena Vasileva and Maja Danova, Nikanor</i>
<br><b>“Check It Out” Handbook</b>: a hands-on tool for adult educators to
successfully navigate in mass disinformation waters in non-formal and
informal learning environments<br>
<i>Júlia Vilafranca Molero, OpenEurope</i></td>
     
    </tr>
    <tr>
      <th scope="row">14:15-14:30</th>
      <td>Q&amp;A and conclusions</td>
     
    </tr>
     <tr>
      <th scope="row"><b style="color:#009FE3">Session 2</b></th>
      <td><u>Roundtable: High level policy debate – Disinformation: what role for
education &amp; training in Europe?</u></td>
     
    </tr>
     <tr>
      <th scope="row">14:30-15:00</th>
      <td><b>Speakers</b>:<br><b>Moderator &amp; keynote</b>: Julian McDougal, Bournemouth University,
Professor of Media and Education, Head of the Centre for Excellence in Media
Practice
<br>DG Connect, Krisztina Stump, Head of Unit ‘Media Convergence and Social
Media’ <br>DG EAC, Georgi Dimitrov, Deputy Head of Unit ‘Innovation &amp; EIT’
<br>European Parliament, Policy Analyst, Naja Bentzen
<br>Adult Education Centres, Doris Vickers, CDO </td>
     
    </tr>
     <tr>
      <th scope="row">15:10-15:30</th>
      <td><b>Q&amp;A</b></td>
     
    </tr>
     <tr>
      <th scope="row">15:10-15:30</th>
      <td><b>Conclusions</b>
      <br>Project coordinator<br>
Oonagh Aitken, Vice President of Lifelong Learning Platform<br>
Gianluca Coppola, President of Dlearn</td>
     
    </tr>
    
  </tbody>
</table></p>
				
				</div>
				<div class="col-12 py-2 ">
					<p class="h5" style="color:#009FE3"><b>PANEL</b></p>
				
				</div>
				
				<div class="col-md-12">
			
				<div class="col-md-12">
				<div class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{url('/images/news/GeorgiDimitrov.jpg')}}" class="card-img" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b style="color:#009FE3">Georgi Dimitrov</b></h5>
        <p class="card-text">Deputy Head of Unit Innovation and EIT (DG EAC) joined the European Commission,
Directorate General Education and Culture, as a Policy Officer in 2008. He was involved in various
roles in setting up the European Institute of Innovation and Technology (EIT). Georgi has managed
the launch of the HEInnovate initiative by the European Commission and the OECD. He then became
advisor to senior management before moving on to his current role of Deputy Head of Unit for
Innovation and EIT. Since then, he leads the development of the Digital Education Action Plan. Before
joining the Commission, Georgi worked for a leading multinational telecommunication company in
Germany. Prior to that, he worked in a software start-up for four years, also in Germany. Georgi
studied at the University of Bonn (M.A.), the University of Erlangen-Nürnberg (PhD) and the Open
University UK (MBA in Technology Management).</p>
     
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-12">
<div class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{url('/images/news/JulianMcDougall.png')}}" class="card-img" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b style="color:#009FE3">Julian McDougall</b></h5>
        <p class="card-text">Julian McDougall is Professor in Media and Education, Head of the Centre for Excellence in Media
Practice and Principal Fellow of the Higher Education Academy. He runs the Professional Doctorate
(Ed D) in Creative and Media Education at Bournemouth University and convenes the annual
International Media Education Summit. In the field of media education, he is the author of a range of
over 100 books, articles, chapters and research reports and has provided numerous research projects
for external funders, charities and non-profit organisations including the European Union, Arts and
Humanities Research Council, Samsung, the United Kingdom Literacy Association, DCMS and US
Embassy. He has given keynote speeches and joined invited expert panels on media education and
media literacy in over 20 countries. He was a founding editor of the Media Education Research
Journal and edited Media Practice and Education from 2014 to 2020.<br>Julian was awarded his PhD from Birmingham University in 2004. He attended a comprehensive
school and further education college, progressing from a National Diploma to a Polytechnic degree,
but has benefited in his career from the advantages and privileges afforded to a white male in higher
education.</p>
       
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-12">
<div class="card mb-3" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{url('/images/news/NajaBENTZEN.png')}}" class="card-img" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b style="color:#009FE3">Naja BENTZEN</b></h5>
        <p class="card-text">Naja BENTZEN is a Policy Analyst in the European Parliament
Liaison Office in Washington DC. Before that, she worked in the
External Policies Unit in the Members&#39; Research Service of the
European Parliamentary Research Service (EPRS), focusing
mainly on disinformation-related issues. Prior to joining EPRS,
she worked as a media analyst in Vienna, Austria, and spent eight
years reporting for Denmark&#39;s leading weekly newspaper,
Weekendavisen, covering Central and South-Eastern Europe.</p>
      
      </div>
    </div>
  </div>
</div>
			</div>	
		
               
               
                        <?php }else {} ?>
         

			



			<hr my-5>
			<div class="col-12 text-justify mt-5 ">
				<img
					src="{{ URL::to('/') }}/images/logosbeneficaireserasmusleft.png"
					width="190px" style="float: left; margin: 4px 10px 0px 0px;"> <small>"The
					European Commission support for the production of this publication
					does not constitute an endorsement of the contents which reflects
					the views only of the authors, and the Commission cannot be held
					responsible for any use which may be made of the information
					contained therein ."
					<p class="mt-3 text-center">2019 Open your eyes</p>
				</small>
			</div>


			<!--             <footer class="pt-3 text-muted text-center text-small"> -->
			<!--                 <p class="mb-1">2019 Open your eyes</p> -->
			<!--                 <ul class="list-inline"> -->
			<!--                     <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li> -->

			<!--                 </ul> -->
			<!--             </footer> -->

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