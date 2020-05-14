<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js"></script>
		<script src="https://kit.fontawesome.com/bd51de42e6.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="C:\Users\Megha Dutta\Downloads\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css">
		<style>
			.home{
				display : flex;
				flex-direction : column;
			}
			.home_content{
				width :100%;
				height : auto;
				display : flex;
				flex-direction : row;
				position :fixed;
				background-color :	rgb(128,0,128);
				color : white;
				animation: mymove 5s infinite;
				background-color : white;
			}
			@keyframes mymove {
				  from {background-color: 	rgb(128,0,128);}
				  to {background-color: rgb(255,69,0) ;}
			}
			.home_content1{
				width : 70%;
				padding : 27px;
			}
			.home_content2{
				width : 40%;
				height : auto;
				display : flex;
				flex-direction : row;
				justify-content : space-around;
				padding : 35px;
			}
			.content{
				font-size : 18px;
				cursor : pointer;
				transition : transform ease 200ms;
			}
			.content:hover{
				color : rgb(255,218,185);
				transform : scale(1.2);
			}
			.content1{
				font-size : 18px;
				cursor : pointer;
				transition : transform ease 200ms;
				padding : 0px 15px;
				border-radius : 50%;
				background-color : orange;
			}
			.content1:hover{
				opacity :0.7;
			}
			.home_container{
				padding-top : 85px;
				display : flex;
				flex-direction : column;
				background-color : white;
			}
			
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			/* Set a style for all buttons */
			.button {
			  background-color: rgb(128,0,128);
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}

			.button:hover {
			  opacity: 0.8;
			}


			/* Center the image and position the close button */
			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			  position: relative;
			}

			img.avatar {
			  width: 30%;
			  height : auto;
			  border-radius: 50%;
			}

			.container {
			  padding: 16px;
			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* The Modal (background) */
			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}

			/* Modal Content/Box */
			.modal-content {
			  background-color: #fefefe;
			  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width: 40%; /* Could be more or less, depending on screen size */
			  border-radius: 10px;
			}

			/* The Close Button (x) */
			.close {
			  position: absolute;
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: red;
			  cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}
			  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}
			
			.image{
				display : flex;
				flex-direction : row;
				margin:50px 30px;
			}
			.image1{
				position : relative;
				background-color : white;
			}
			.image_content{
				position :absolute;
				left: 0px;
				right: 0px;
				bottom: 0px;
				height: 200px;
				background-color: rgba(0, 0, 0, 0.5);
			}
			.font{
				color: rgb(255,222,173);
				text-align : center;
				font-size : 150px;
				font-family : cursive;
			}
			.card1{
		
			}
			.card{
				width :30%;
				text-align :center;
				height:auto;
				margin-left :30px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			.icon{
				display : flex;
				flex-direction : column;
				padding-top : 40px;
				margin-left : 30px; 
            	font-size : 30px;
				text-align :center;
			}
			
			.photo1{
            width : 35%;
            height :110px;
            border-radius:10px;
            margin-top : 40px;
			margin-left : 100px;
            background-image: url("images/photo3.jpg");
            background-repeat: no-repeat;
            background-size : cover;
    	}

		</style>
    </head>
    <body>
	<div id="id01" class="modal">
	  
	  	<form class="modal-content animate" action="/validation" method="post">
	  		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<div class="imgcontainer">
		  		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		  		<img src="https://mibs.com.mm/wp-content/uploads/2017/05/personImage-400x423.png" class="avatar">
			</div>
			<div class="container">
				<div for="uname"><b>Username</b></div>
				<input type="text" placeholder="Enter Username" name="uname" required>
			  	<div for="psw"><b>Password</b></div>
			  	<input type="password" placeholder="Enter Password" name="psw" required>
			  	<button class="button" type="submit">Login</button>
			</div>
	  	</form>
	</div>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
		<div class="home">
			<div class = "home_content">
				<div  class="home_content1">
					<img src="images/logo.jpg" width="160px" height="90px">
				</div>
				<div class="home_content2">
					<div class="content" onclick="location.href='{{ url('/') }}'">
						Home
					</div>
					<div class="content" onclick="location.href='{{ url('blog') }}'">
						Blog
					</div>
					<div class="content" onclick="location.href='{{ url('contact') }}'">
						Contact
						
					</div>
					<div class="content1"  >
						<b><i onclick="document.getElementById('id01').style.display='block'" ><i class="fas fa-users-cog"></i></i></b>
					</div>
					<div class="uk-button-group">
					<div class="uk-inline">
						<button class="uk-button-default" type="button"><span style="color:white;" uk-icon="icon: menu"></span></button>
						<div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
							<ul class="uk-nav uk-dropdown-nav">
								<li><a href="/">Home</a></li>
								<li><a href="blog">Blog</a></li>
								<li><a href="adventure">-Adventure</a></li>
								<li><a href="foodie">-Foodie</a></li>
								<li><a href="events">-Events</a></li>
								<li><a href="contact">Contacts</a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="home_container">
					<div class="image">
						<div class="card1">
							<img src="https://static1.squarespace.com/static/57377bf33c44d8a18050744e/573b851a044262bbbc50d656/5dbb6e18ce658c610e0b686f/1572637422528/59855964_OKRWG++Write-In.png?format=2500w" width="650px" />
						</div>
						<div class="card">
							<div class="photo1"></div>
							<p>ABOUT US</p>
							<p style="padding:0px 10px">Hi everyone... I am Emiley, a blogger as well as n influencer.I love exploring things. As I'm bad in front of screen. So, I prefer to writing rather than a screen play.  </p>
						</div>
						<div class="icon">
						<i onclick="location.href='{{ url('https://www.instagram.com/') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:rgb(255,20,147); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-instagram"></i></i>
						<i onclick="location.href='{{ url('https://www.youtube.com//') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-youtube"></i></i>
						<i onclick="location.href='{{ url('https://www.twitter.com/') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:#00acee; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-twitter"></i></i>
						<i onclick="location.href='{{ url('https://www.reddit.com/') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:#FF4301; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-reddit-alien"></i></i>
						<i onclick="location.href='{{ url('https://www.facebook.com/') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:#3b5998;	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-facebook"></i></i>
						<i onclick="location.href='{{ url('https://in.pinterest.com/') }}'"><i style="width:65%; padding:10px; margin-top:25px; border-radius:50%; color:#c8232c; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-pinterest" onclick></i></i>
						</div>
					</div>
					
					<div class="image1" onclick="location.href='{{ url('adventure') }}'">
						<img   src="https://www.businessdestinations.com/wp-content/uploads/2015/02/adventure-tourism.jpg" width="1200px" class="image1"/>
							<div class="image_content">
								<h1 class="font">ESCAPADE</h1>
							</div>
					</div>
					<div class="image1" onclick="location.href='{{ url('foodie') }}'">
						<img src= "https://thehippiecook.com.au/wp-content/uploads/meat-eaters-banner-1.png"/>
						<div class="image_content">
							<h1 class="font">FOODIE</h1>
						</div>
					</div>
					<div class="image1" onclick="location.href='{{ url('events') }}'">
						<img src= "http://notforyoumykonos.com/wp-content/uploads/2018/12/csm_event_case_39696183e2.jpg" width="1200px"/>
						<div class="image_content">
						<h1 class="font">HAPPENINGS</h1>
						</div>
					</div>
			</div>
			
		</div>

	</body>
</html>
