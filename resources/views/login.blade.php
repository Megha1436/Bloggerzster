<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		* {
		  box-sizing: border-box;
		}

		input[type=text], select, textarea {
		  width: 100%;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  resize: vertical;
		}

		label {
		  padding: 12px 12px 12px 0;
		  display: inline-block;
		}

		input[type=submit] {
		  background-color: #4CAF50;
		  color: white;
		  padding: 12px 20px;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  float: right;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		.container {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}

		.col-25 {
		  float: left;
		  width: 25%;
		  margin-top: 6px;
		}

		.col-75 {
		  float: left;
		  width: 75%;
		  margin-top: 6px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		  }
		}
		
		.heading{
			color:rgb(0,0,255);
			text-align:center; 
		}
	</style>
</head>
<body>

<h1 class="heading">Edit Blogg</h1>

<div class="container">
  <form action = "/create" method = "post" enctype="multipart/form-data">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="row">
      <div class="col-25">
        <label for="topic">Topic</label>
      </div>
      <div class="col-75">
		<select id="topic" name="topic" placeholder="Your topic.." required>
			<option value="food">Food</option>
			<option value="Travel">Travel</option>
			<option value="Event">Event</option>
			<option value="other">Others</option>
		</select>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="title">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Your title.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="sub_title">Sub-Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="sub_title" name="sub_title" placeholder="Your sub title.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="blog">Blogg1</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog1" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="blog">Blogg2</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog2" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="blog">Blogg3</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog3" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="blog">Blogg4</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog4" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="blog">Blogg5</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog5" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="blog">Blogg6</label>
      </div>
      <div class="col-75">
        <textarea id="blog" name="blog6" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="image_info1">Image Information1</label>
      </div>
      <div class="col-75">
        <input type="text" id="image_info1" name="image_info1" placeholder="Put info for pic. 1">
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fileupload1">Upload Picture1</label>
		</div>
		<div class="col-75">
			<input id="fileupload1" type="file" name="image1">
		</div>
	</div>
	<div class="row">
      <div class="col-25">
        <label for="image_info2">Image Information2</label>
      </div>
      <div class="col-75">
        <input type="text" id="image_info2" name="image_info2" placeholder="Put info for pic. 2">
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fileupload2">Upload Picture2</label>
		</div>
		<div class="col-75">
			<input id="fileupload2" type="file" name="image2">
		</div>
	</div>
	<div class="row">
      <div class="col-25">
        <label for="image_info3">Image Information3</label>
      </div>
      <div class="col-75">
        <input type="text" id="image_info3" name="image_info3" placeholder="Put info for pic. 3">
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fileupload3">Upload Picture3</label>
		</div>
		<div class="col-75">
			<input id="fileupload3" type="file" name="image3">
		</div>
	</div>
	<div class="row">
      <div class="col-25">
        <label for="image_info4">Image Information4</label>
      </div>
      <div class="col-75">
        <input type="text" id="image_info4" name="image_info4" placeholder="Put info for pic. 4">
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fileupload4">Upload Picture/ Map Image</label>
		</div>
		<div class="col-75">
			<input id="fileupload4" type="file" name="image4">
		</div>
	</div>

	<div class="row">
      <div class="col-25">
        <label for="url">Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="url" name="url" placeholder="Enter url of the map..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
