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
    <div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
         <img src="{{asset('front/icon.svg')}}">
    <form>
      <div class="formbold-input-wrapp formbold-mb-3">
        <label for="firstname" class="formbold-form-label"> Name </label>
        <input
            type="text"
            name="name"
            id="name"
            disabled
            value="{{$result['name']}}"
            class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-3">
        <label for="dob" class="formbold-form-label"> Date of Birth </label>
        <input 
          type="date" 
          disabled 
          name="dob" 
          id="dob" 
          value ="{{$result['birthdate']}}"
          class="formbold-form-input" />
      </div>

      <div class="formbold-mb-3">
        <label class="formbold-form-label">Gender</label>
        <input 
          type="text" 
          disabled 
          name="gender" 
          id="gender" 
          value ="{{$result['gender']}}"
          class="formbold-form-input" />
      </div>
      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label"> Address </label>

        <input
          type="text"
          name="address"
          disabled
          id="address"
          value="{{$result['address']}}"
          class="formbold-form-input formbold-mb-3"
        />
      </div>
      <div class="formbold-mb-3">
        <label for="desciption" class="formbold-form-label"> Desciption </label>

        <input
          type="text"
          name="desciption"
          disabled
          id="desciption"
          value="{{$result['desciption']}}"
          class="formbold-form-input formbold-mb-3"
        />
      </div>
      <button class="formbold-btn"><a href="{{route('form')}}">Join Now</a></button>
    </form>
  </div>
</div>
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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body {
    font-family: 'Inter', sans-serif;
    }
    .formbold-mb-3 {
    margin-bottom: 15px;
    }
    .formbold-relative {
    position: relative;
    }
    .formbold-opacity-0 {
    opacity: 0;
    }
    .formbold-stroke-current {
    stroke: #ffffff;
    z-index: 999;
    }
    #supportCheckbox:checked ~ div span {
    opacity: 1;
    }
    #supportCheckbox:checked ~ div {
    background: #6a64f1;
    border-color: #6a64f1;
    }
    
    .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
    }
    
    .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
    }
    
    .formbold-img {
    display: block;
    margin: 0 auto 45px;
    }
    
    .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
    }
    
    .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
    }
    .formbold-input-flex > div {
    width: 50%;
    }
    .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
    }
    .formbold-form-input::placeholder,
    select.formbold-form-input,
    .formbold-form-input[type='date']::-webkit-datetime-edit-text,
    .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
    }
    
    .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
    }
    
    .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    }
    .formbold-checkbox-label a {
    margin-left: 5px;
    color: #6a64f1;
    }
    .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
    }
    .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
    }
    
    .formbold-form-file {
    padding: 12px;
    font-size: 14px;
    line-height: 24px;
    color: rgba(83, 99, 135, 0.5);
    }
    .formbold-form-file::-webkit-file-upload-button {
    display: none;
    }
    .formbold-form-file:before {
    content: 'Upload';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #E7E7E7;
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
    }
    
    .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
    }
    .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    
    .formbold-w-45 {
    width: 45%;
    }
  </style>
</body>
</html>