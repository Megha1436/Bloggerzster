<!DOCTYPE html>
<html>
<head>
    <title>contact</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/bd51de42e6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\Megha Dutta\Downloads\fontawesome-free-5.13.0-web\fontawesome-free-5.13.0-web\css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha256-LKawN9UgfpZuYSE2HiCxxDxDgLOVDx2R4ogilBI52oc=" crossorigin="anonymous" />
    <style>
    .heading{
         text-align:center;
         background-color : rgb(255,69,0);
         color : white;
         margin : 0px;
         padding : 20px;
    }
    .container1{
        display : flex;
        flex-direction : row;
        justify-content :space-between;
        margin : 70px 60px;
    }
    .button1{
        text-align : right;
    }
    .button2{
        padding : 20px;
        font-size : 20px;
        color : white;
        background-color : rgb(255,69,0);
        border-radius : 10px;
    }
    
    .button2:hover{
        opacity : 0.5;
    }

    .button4{
        margin-top : 25px;
        margin-bottom:0px;
        margin-right:65px;
        padding:10px;
        color : white;
        background-color : rgb(255,69,0);
        border-radius : 6px;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Add padding to container elements */
    .container {
    padding: 16px;
    }

    container2{
        display : flex;
        flex-direction : row;
        justify-content :space-around;
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
    background-color: #474e5d;
    padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
    background-color: #fefefe;
    margin: 4% auto 25% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 65%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }
    
    /* The Close Button (x) */
    .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
    }

    .close:hover,
    .close:focus {
    color: #f44336;
    cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
    content: "";
    clear: both;
    display: table;
    }

    .button3 {
		background-color: rgb(128,0,128);
		color: white;
		padding: 14px 20px;
		margin: 8px 10px;
		border: none;
		cursor: pointer;
		width: 96%;
	}

	.button3:hover {
		opacity: 0.8;
	}
    .photo{
            width : 30%;
            height : 120px;
            border-radius: 50%;
            margin-top : 20px;
            margin-right : 40px;
            background-image : url("images/photo3.jpg");
            background-repeat : no-repeat;
            background-size : cover;
    }
    
    .content {
        padding : 0px 15px;
    }
    .icon{
            font-size : 30px;
    }
    .icon1{
        font-size : 50px;
    }
    .photo1{
        text-align: center;
		margin: 24px 0 12px 0;
		position: relative;
    }
    .avtar{
        width: 20%;
		height : auto;
		border-radius: 50%;
    }
    .comment_con{
        width : 50%;
        display : flex;
        flex-direction : row;
        justify-content :space-around;
        margin-top : 40px;
        -webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	    box-shadow: 0 8px 6px -10px black;
        padding : 10px 5px;

    }
    </style>
</head>
<body>
    <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/store" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="container">
        <div class="photo1"><img src="https://mibs.com.mm/wp-content/uploads/2017/05/personImage-400x423.png" class="avtar"></div>
        <h2>Share Your Views With Us ...</h2>
        <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" style="width:92%; margin:10px;" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" style="width:92%; margin:10px;" required>
            <label for="comment"><b>Comment</b></label>
            <br/>
            <textarea id="comment" name="comment" placeholder="Write a comment ..." style="width:95%; margin:10px; height:100px" required></textarea>
        <div class="clearfix">
            <button type="submit" class="button3">Post</button>
        </div>
        </div>
    </form>
    </div>
    <script>
   // $("#comment").emojioneArea({ pickerPosition:"right" });
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
    </script>


    <div>
    <h1 class="heading">CONTACT</h1>
    </div>
    <div class="button1"><button class="button4" onclick="location.href='{{ url('/') }}'"><i style="color:white" class="fas fa-arrow-circle-left"></i>  Back To Home</button></div>
    <div class="container1">
        <div class="photo"></div>
        <div class="content">
            <p>Feel free to leave comments, suggestions or e-mail me at <u style="color: blue;">wickemiley.9991@gmail.com</u> .</p>

            <p>I would however like to make it known that I am not accepting any guest posts to the site at the moment. I appreciate your interest in wanting to contribute to my site and if your e-mail is regarding this, I am sorry if I don’t respond. If you don’t get a reply, please consider it a polite declination of the proposition. Thank you!</p>

            <p>You can also find me on <i> Facebook, Instagram and  Pinterest </i> & Don’t forget to <i>SUBSCRIBE to my NEW YouTube Channel</i></p>
        </div>
    </div>
    <div class="container1">
        <div class="icon">
        <i onclick="location.href='{{ url('https://www.instagram.com/') }}'"><i style=" padding:10px; border-radius:5px; margin-left:20px; color:rgb(255,20,147);  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-instagram"></i></i>
        <i onclick="location.href='{{ url('https://www.youtube.com//') }}'"><i style="padding:10px; border-radius:5px; margin-left:20px; color:red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-youtube"></i></i>
        <i onclick="location.href='{{ url('https://www.twitter.com/') }}'"><i style="padding:10px; border-radius:5px; margin-left:20px; color:#00acee; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-twitter"></i></i>
        <i onclick="location.href='{{ url('https://www.reddit.com/') }}'"><i style="padding:10px; border-radius:5px; margin-left:20px; color:#FF4301; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-reddit-alien"></i></i>
        <i onclick="location.href='{{ url('https://www.facebook.com/') }}'"><i style="padding:10px; border-radius:5px; margin-left:20px; color:#3b5998;	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-facebook"></i></i>
        <i onclick="location.href='{{ url('https://in.pinterest.com/') }}'"><i style="padding:10px; border-radius:5px; margin-left:20px; color:#c8232c; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fab fa-pinterest"></i></i>
        </div>
        <div class="button1">
            <button class = "button2" onclick="document.getElementById('id01').style.display='block'">Comment</button>
        </div>
    </div>
    <h2><i style="padding-left : 30px; color:grey; font-size:30px;">Comments....</i></h2>
    @foreach ($comments as $view)
        <div class="comment_con">
        <div class="icon1">
            <i style=" padding:10px; border-radius:5px; color:grey;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="fas fa-user-tie"></i>
        </div>
            <div style="margin-top:55px; font-size:20px; "><i>{{ $view->name }} , {{ $view->created_at }}</i></div>
        </div>

        <div style="padding : 20px;  width : 50%; ">{{ $view->commment }}</div>
    @endforeach
 
    
</body>
</html>