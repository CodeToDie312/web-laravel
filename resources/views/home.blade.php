<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Education</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('front/css/responsive.css ')}}">
<!-- fevicon -->
<link rel="icon" href="{{asset('front/images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('front/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
<link rel="stylesoeet" href="{{asset('front/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!-- header section start-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="logo" href="#"><img src="{{asset('front/images/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="{{route('index')}}">HOME</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('form')}}">Join Class</a>
                </li>
            </ul>
        </div>
    </nav>
	<!-- header section start-->
	<!-- banner section start-->
	<div class="banner_section layout_padding">
		<div class="container">
			<h1 class="best_taital">Best Teacher Search here</h1>
			<div class="box_main">
			    <input id="search_param" type="" class="email_bt" placeholder="Search Teacher" name="teacher">
				<button class="subscribe_bt" ><a id="searchlink">Search</a></button>
		    </div>
		    <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
		</div>
	</div>
	<!-- banner section end-->
	<!-- marketing section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$course1['name']}}</h1>
					    <p class="dummy_text">{{$course1['description']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-1.png')}}"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- marketing section end-->
	<!-- Industrial section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-2.png')}}"></div>
				</div>
				<div class="col-md-6">
					<div class="job_section_2">
					    <h1 class="jobs_text">{{$course2['name']}}</h1>
					    <p class="dummy_text">{{$course2['description']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Industrial section end-->
	<!-- Corporate section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$course3['name']}}</h1>
					    <p class="dummy_text">{{$course3['description']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6 padding_0">
					<div class="image_1"><img src="{{asset('front/images/img-3.png')}}"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Corporate section end-->
	<!-- Government section start-->
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 padding_0">
					<div class="image_1"><img src="{{asset('front/images/img-4.png')}}"></div>
				</div>
				<div class="col-md-6">
					<div class="job_section_2">
					    <h1 class="jobs_text">{{$course4['name']}}</h1>
					    <p class="dummy_text">{{$course4['description']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer_section layout_padding">
		<div class="container">
		<h1 class="best_taital">Top Teacher</h1>
		</div>
	</div>
	<div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$teacher1['name']}}</h1>
					    <p class="dummy_text">{{$teacher1['desciption']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-1.png')}}"></div>
				</div>
			</div>
		</div>
	</div><div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$teacher2['name']}}</h1>
					    <p class="dummy_text">{{$teacher2['desciption']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-1.png')}}"></div>
				</div>
			</div>
		</div>
	</div><div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$teacher3['name']}}</h1>
					    <p class="dummy_text">{{$teacher3['desciption']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-1.png')}}"></div>
				</div>
			</div>
		</div>
	</div>
	</div><div class="marketing_section layout_padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="job_section">
					    <h1 class="jobs_text">{{$teacher4['name']}}</h1>
					    <p class="dummy_text">{{$teacher4['desciption']}}</p>
					    <div class="apply_bt"><a href="{{route('form')}}">Apply now</a></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_1 padding_0"><img src="{{asset('front/images/img-1.png')}}"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Government section end-->
	<!-- footer section start-->
	<div class="footer_section layout_padding">
		<div class="container">
		   
		</div>
	</div>
	<!-- footer section end-->
	<!-- copyright section start-->
	<div class="copyright_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</a></p>
				</div>
				<div class="col-md-6">
					<p class="cookies_text">Cookies, Privacy and Terms</p>
				</div>
			</div>
		</div>
	</div>
	<!-- copyright section end-->


    <!-- Javascript files-->
    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('front/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('front/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('front/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        $("#search_param").keyup(function () {
            var searchstring = $(this).val();
            searchstring = encodeURIComponent(searchstring);

            $('#searchlink').attr('href', 'http://localhost:8000/search?teacher=' + searchstring);
        });
    });
    </script>
</body>
</html>