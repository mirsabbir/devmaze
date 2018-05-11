@extends('layouts.app')

@section('content')



    <h1 class="text-center">DevsMaze</h1>
    <h3 class="text-center"> 
    Graphics design
    <i class="fa fa-object-ungroup"></i> &nbsp &nbsp | &nbsp &nbsp
    Web 
    <i class="fa fa-desktop"></i> &nbsp &nbsp | &nbsp &nbsp
    Android
    <i class="fa fa-android"></i> &nbsp &nbsp | &nbsp &nbsp
    iOS
    <i class="fa fa-apple"></i> &nbsp &nbsp | &nbsp &nbsp
   Native app &nbsp &nbsp | &nbsp &nbsp
    E-Commerce
   

    <i class="fa fa-shopping-cart"></i> &nbsp &nbsp | &nbsp &nbsp
     <br>
    Game development
    <i class="fa fa-gamepad"></i> &nbsp &nbsp | &nbsp &nbsp

     IT consultancy
    <i class="fa fa-thumbs-up"></i> 
    </h3>
    <br><br><br>




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('images/1.jpg')}}" alt="First slide" height="450px;" style="background-color:black;opacity:.7">
      <div class="carousel-caption d-none d-md-block">
    <h2>Build something new</h2>
    <p>we help you to build</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/2.jpg')}}" alt="Second slide" height="450px;" style="background-color:black;opacity:.7">
      <div class="carousel-caption d-none d-md-block">
    <h2>Secure and Reliable</h2>
    <p>strong security assurance</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/3.jpg')}}" alt="Third slide" height="450px;"style="background-color:black;opacity:.7">
      <div class="carousel-caption d-none d-md-block">
    <h2>Analyze your business</h2>
    <p>analize and improve your business in a smart way</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



    <div id="services" style="margin-top:90px;"></div>
    <h3 class="text-center" >Our Services</h3>
    <div id="services" style="margin-top:90px;"></div>
    <div class="row" style="margin-top:20px;">
        <div class="col-md-4">
            <div class="card  ml-auto mr-auto" style="width: 18rem; height:18rem;">
            <i class="fa fa-globe fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
                <h4 class="card-text text-center">Web</h4>
                <p class="card-text text-center">DevMaze provides better web solutions</p>
            </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card  ml-auto mr-auto" style="width: 18rem;height:18rem">
            <i class="fa fa-mobile fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
                <h4 class="card-text text-center">Android</h4>
                <p class="card-text text-center">It's always better with app. create your own</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card  ml-auto mr-auto" style="width: 18rem;height:18rem;">
            <i class="fa fa-shopping-cart fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
            <h4 class="card-text text-center">E-commerce</h4>
                <p class="card-text text-center">DevMaze provides you a convenient way to manage your business</p>
            </div>
            </div>
        </div>
    </div>

       <div class="row" style="margin-top:20px;">
       <div class="col-md-4">
            <div class="card  ml-auto mr-auto" style="width: 18rem;height:18rem;">
            <i class="fa fa-lock fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
            <h4 class="card-text text-center">Security</h4>
                <p class="card-text text-center">Build more secured business.</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card  ml-auto mr-auto" style="width: 18rem;height:18rem;">
            <i class="fa fa-tablet fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
            <h4 class="card-text text-center">ios</h4>
                <p class="card-text text-center">Build apps for Apple users. grow your business</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card  ml-auto mr-auto" style="width: 18rem;height:18rem;">
            <i class="fa fa-cloud fa-5x text-center" style="margin-top:10px"></i>
            <div class="card-body">
            <h4 class="card-text text-center">Cloud</h4>
                <p class="card-text text-center">DevMaze provides simple cloud services</p>
            </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<br><br><br>

<h2 class="text-center" id= "team"><strong>Our Team</strong> </h2>

<br><br><br><br>


<div class="row" >

    <div class="col-md-4">
    <aside class="profile-card">

<header>

  <!-- here’s the avatar -->
  <a href="#">
    <img src="{{asset('images/roton.jpg')}}">
  </a>

  <!-- the username -->
  <h1>M.A Shoyeb Roton</h1>

  <!-- and role or location -->
  <h2>- Full Stack Web Developer -</h2>

</header>

<!-- bit of a bio; who are you? -->
<div class="profile-bio">

  <p>Hello there!</p>
  <p>I am a full stack web developer. I mainly work with PHP, HTML, CSS, JS and WordPress.
    <br />I also play well with Photoshop, Corel Draw, After Effects and other cool stuff.</p>

</div>

<!-- some social links to show off -->
<ul class="profile-social-links">

  <!-- twitter - el clásico  -->
  <li>
    <a href="https://twitter.com/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
    </a>
  </li>

  <!-- envato – use this one to link to your marketplace profile -->
  <li>
    <a href="https://envato.com">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
  </li>

  <!-- codepen - your codepen profile-->
  <li>
    <a href="https://codepen.io/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
  </li>

  <!-- add or remove social profiles as you see fit -->

</ul>

</aside>
<!-- that’s all folks! -->
    </div>
    <div class="col-md-4">

        <aside class="profile-card">

<header>

  <!-- here’s the avatar -->
  <a href="https://tutsplus.com">
    <img src="{{asset('images/ashique.jpg')}}">
  </a>

  <!-- the username -->
  <h1>Ashique Zubayer</h1>

  <!-- and role or location -->
  <h2>- Full Stack Web Developer -</h2>

</header>

<!-- bit of a bio; who are you? -->
<div class="profile-bio">

  <p>Hello there!</p>
  <p>I am a full stack web developer. I mainly work with PHP, HTML, CSS, JS and WordPress.
    <br />I also play well with Photoshop, Corel Draw, After Effects and other cool stuff.</p>

</div>

<!-- some social links to show off -->
<ul class="profile-social-links">

  <!-- twitter - el clásico  -->
  <li>
    <a href="https://twitter.com/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
    </a>
  </li>

  <!-- envato – use this one to link to your marketplace profile -->
  <li>
    <a href="https://envato.com">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
  </li>

  <!-- codepen - your codepen profile-->
  <li>
    <a href="https://codepen.io/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
  </li>

  <!-- add or remove social profiles as you see fit -->

</ul>

</aside>
<!-- that’s all folks! -->
    
    </div>
    <div class="col-md-4">

        <aside class="profile-card">

<header>

  <!-- here’s the avatar -->
  <a href="https://tutsplus.com">
    <img src="{{asset('images/dip.jpg')}}">
  </a>

  <!-- the username -->
  <h1>Sazid hasan dip</h1>

  <!-- and role or location -->
  <h2>- Full Stack iOS Developer -</h2>

</header>

<!-- bit of a bio; who are you? -->
<div class="profile-bio">

  <p>Hello there!</p>
  <p>I am a full stack iOS developer. I mainly work with iOS
    <br />I also play well with Python, swift, c#</p>

</div>

<!-- some social links to show off -->
<ul class="profile-social-links">

  <!-- twitter - el clásico  -->
  <li>
    <a href="https://twitter.com/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
    </a>
  </li>

  <!-- envato – use this one to link to your marketplace profile -->
  <li>
    <a href="https://envato.com">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
  </li>

  <!-- codepen - your codepen profile-->
  <li>
    <a href="https://codepen.io/tutsplus">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
  </li>

  <!-- add or remove social profiles as you see fit -->

</ul>

</aside>
<!-- that’s all folks! -->
    
    
    </div>

</div>

<div id="contactus">hh</div>
<div style="margin-top:120px;"></div>

<div>
<h2 class="text-center" style="color:white;">Have a question ?</h2>
<h1 class="text-center" style="color:white;text-wieght:bold">01788-635837</h1>
</div>



<br><br><br>







<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3 style="color:white"><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4 style="color:white"><strong>Get in Touch</strong></h4>
        <form method="post" action="/">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="button">
              Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
























<!-- Footer -->
<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>DevsMaze is a Registered  Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.devmaze.com" target="_blank">DevMaze</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

@endsection
