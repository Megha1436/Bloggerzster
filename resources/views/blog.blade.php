<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.4.0/dist/js/uikit-icons.min.js"></script>
	<script src="https://kit.fontawesome.com/bd51de42e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\Megha Dutta\Downloads\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css">
    <title>Blog</title>
    <style>
        .container{
            width: 100%;
            height: auto;
            margin: 0px;
            display: flex;
            flex-direction: column;
        }
        .heading{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding : 10px 30px;
            color:white;
            margin:7px;
            background-color:rgb(255,69,0);
        }

        .sub_heading{
            margin-top: 40px;
            margin-left : 20px;
        }
        .content{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding : 80px 20px;
        }

        .content1{
            width:30%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            display: flex;
            flex-direction: column;
        }

        .content2{
            display: flex;
            flex-direction: column;
            margin-left: 40px;
        }

        .blog_content{
            height : auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 40px;
            padding : 20px;
        }
        
        .title{
            padding-left: 20px;
            padding-right: 20px;
            font-family:cursive;
            text-align: center;
        }

        .content_inner{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 20px;
            padding-right: 20px;
            -webkit-box-shadow: 0 4px 6px -6px #222;
            -moz-box-shadow: 0 4px 6px -6px #222;
            box-shadow: 0 4px 6px -6px #222;
        }

        .photo{
            width : 100px;
            height :120px;
            margin: 30px 60px;
            border-radius:50%;
            background-image: url("images/photo3.jpg");
            background-repeat: no-repeat;
            background-size : cover;
        }
        .icon{
            text-align: center;
            padding : 30px;
            color : grey;
            font-size : 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="heading">
        <i onclick="location.href='{{ url('adventure') }}'"><i style="font-size:30px; margin: 15px 0px;" class="fas fa-arrow-circle-right"></i></i>
        <h1 style=" font-family: Times New Roman, Times, serif; color : white; margin-top: 10px">Blogs by Emiley Wick....</h1>
        <div class="uk-button-group" style ="margin-top:25px">
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

    <div class="sub_heading">
        <img src="images/quotesp1.png" width="300px">
        <img src="images/quotes2.png" width="300px">
        <img src="images/quotes3.png" width="300px">
        <img src="images/quotes4.png" width="200px">
    </div>
    
    <div class="content">
        <div class="content1">
            <div class="photo"></div>
            <div style="padding-left:30px;"><i>Emiley Wick , Blogger</i></div>
            <div class="icon">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-reddit-alien"></i>
                <i class="fab fa-pinterest"></i>
            </div>
            <div><h3><u  style="padding :20px; margin-left:15px; font-family: Times New Roman, Times, serif; color:blue;">Top Searches</u></h3></div>
            @foreach ($blogs as $user)
            <ul>
            <li style="padding :0px 20px; margin:0px;">{{ $user->title }}</li>
            </ul>
            @endforeach
        </div>
        <div class="content2">
        @foreach ($blogs as $user)
        <div class="blog_content">
            
            <h2 class="title">{{ $user->title }}</h2>
            <div class="content_inner">
                <h3 style ="margin : 0px; padding-top:30px;"><i>{{ $user->sub_title }}</i></h3>
                <p style = " padding:20px 0px; font-size:12px; padding-left:20px; ">{{ $user->created_at}}</p>
            </div>
            <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog1 }}</p>
            <img src="blog/fetch_image1/{{ $user->id }}" width="400px" style="padding: 0px 50px;"/>
            <p style="font-size:13px; margin-top:0px; padding: 0px 50px;"><i>{{ $user->image_info1 }}</i></p>
            <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog2 }}</p>
            <img src="blog/fetch_image2/{{ $user->id }}" width="400px" style="padding: 0px 50px;"/>
            <p style="font-size:13px; margin-top:0px; padding: 0px 50px;"><i>{{ $user->image_info2 }}</i></p>
            <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog3 }}</p>
            <img src="blog/fetch_image3/{{ $user->id }}" width="400px" style="padding: 0px 50px;"/>
            <p style="font-size:13px; margin-top:0px; padding: 0px 50px;"><i>{{ $user->image_info3 }}</i></p>
            <p style=" padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog4 }}</p>
            <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog5 }}</p>
            <p style="padding:0px 20px; font-size:20px; font-family: Times New Roman, Times, serif;">{{ $user->blog6 }}</p>
            <img src="blog/fetch_image4/{{ $user->id }}" width="400px" style="padding: 0px 50px;"/>
            <p style="font-size:13px; margin-top:0px; padding: 0px 50px;"><i>{{ $user->image_info4 }}</i></p>
            
        </div>
        @endforeach
        </div>
    </div> 
</div>

</body>
</html>