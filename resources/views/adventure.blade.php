<!DOCTYPE html>
<html>
<head>
    <title>Adventure</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js"></script>
	<script src="https://kit.fontawesome.com/bd51de42e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\Megha Dutta\Downloads\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css">
    <style>
        .heading_content{
            width : 100%;
            height : auto;
            display : flex;
            flex-direction : row;
            padding : 25px;
            text-align :right;
            -webkit-box-shadow: 0 8px 6px -6px black;
            -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -10px black;
            background-color : black;
            position : fixed;
        }
        .heading{
            width :55%;
            font-family : cursive;
            font-size : 50px;
            color : rgb(224,255,255);
            margin: 6px;
            text-shadow: 1px 1px 2px black, 0 0 25px rgb(0,255,0), 0 0 5px 	rgb(0,100,0);
        }
        .container{
            display : flex;
            flex-direction : column;
            justify-content : space-between;
            padding : 30px;
            background-color : rgb(230,230,250);
        }
        .container_content1{
            width : 100%;
            display : flex;
            flex-direction : row;
            
        }
        
        .container_left{
            width : 60%;
            display : flex;
            flex-direction : column;
            margin-right : 40px;
            margin-top: 120px; 
            background-color : white;
            padding : 20px;
        }
        .title{
            padding : 0px 20px;
            font-size : 50px;
            margin : 0px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        .sub_title{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
            -webkit-box-shadow: 0 4px 6px -6px #222;
            -moz-box-shadow: 0 4px 6px -6px #222;
            box-shadow: 0 4px 6px -6px #222;
        }
        .container_content2{
            width :30%;
            display : flex;
            flex-direction : column;
            margin-top: 120px;
        }
        .map{
            border-style: ridge;
        }

    </style>
</head>
<body>
<div class="heading_content">
    <i onclick="location.href='{{ url('blog') }}'"><i style="font-size:30px; margin: 15px 10px; color: white;" class="fas fa-arrow-circle-left"></i></i>
    <i onclick="location.href='{{ url('foodie') }}'"><i style="font-size:30px; margin: 15px 10px; color: white;" class="fas fa-arrow-circle-right"></i></i>
    <h1 class="heading"><b>ADVENTURE</b></h1>
    <div style="margin-left:300px; margin-top:20px;"  class="uk-button-group">
			<div class="uk-inline">
				<button class="uk-button-default" type="button"><span style="color: white;" uk-icon="icon: menu"></span></button>
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
<div class="container">
        
@foreach ($blogs as $user)
        <div class="container_content1">
            <div class="container_left">
                <p class="title">{{ $user->title }}</p>
                <div class="sub_title">
                    <h4 style ="margin : 0px; padding-top:30px;"><i>{{ $user->sub_title }}</i></h4>
                    <p style = " padding:20px 0px; font-size:12px; padding-left:20px; ">{{ $user->created_at}}</p>
                </div>
                <div style="margin-top:20px;">
                    <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog1 }}</p>
                    <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog2 }}</p>
                    <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog3 }}</p>
                    <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog4 }}</p>
                    <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog5 }}</p>
                    <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog6 }}</p>
                </div>
            </div>
            <div class="container_content2">
                <img src="blog/fetch_image1/{{ $user->id }}">
                <p style="font-size:13px; margin-top:0px;"><i>{{ $user->image_info1 }}</i></p>
                <img src="blog/fetch_image2/{{ $user->id }}">
                <p style="font-size:13px; margin-top:0px;"><i>{{ $user->image_info2 }}</i></p>
                <img src="blog/fetch_image3/{{ $user->id }}">
                <p style="font-size:13px; margin-top:0px;"><i>{{ $user->image_info3 }}</i></p>
                <img class="map" src="blog/fetch_image4/{{ $user->id }}"/>
                <p style="font-size:13px; margin-top:0px;"><i>{{ $user->image_info4 }}</i></p>
                <p style="font-size:13px; margin-top:0px; color : blue;"><i><u>{{ $user->url }}</u></i></p>
                
            </div>
        </div>
@endforeach         
</div>


</body>
</html>
