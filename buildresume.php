<?php include 'includes/header.php'; ?>
<?php require 'lib/pdf/fpdf.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'config/config.php'; ?>

<head>
	<title>Build resume</title>
   		<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

    <?php

      $db = new Database();
      $query = "SELECT * FROM users WHERE `id` = ".$_SESSION['id'];
      $result = $db->select($query);
      $row = $result->fetch_assoc();
	  if (isset($_POST['submit']))
	  {
      	$name = $_POST['name'];
      	$email = $_POST['email'];
      	$phone = $_POST['phone'];
      	$description = $_POST['description'];
		$designation = $_POST['designation'];
      	$exp = $_POST['exp'];
      	$edu = $_POST['edu'];
		$user_id = $row['id'];
//check
        $query = "SELECT * FROM resume WHERE user_id = ".$_SESSION['id'];
		$result = $db->select($query);
		$count = $result->num_rows;
			if($count == 1)
		  	{
//update resume
			$query = "UPDATE `resume` SET 
            `user_id` = '$user_id',
            `name` = '$name',
            `email` = '$email',
            `phone` = '$phone',
            `designation` = '$designation',
            `exp` = '$exp',
            `edu` = '$edu'
            WHERE `id` = '$user_id'";
		  	}
			else
		  	{
//insert Resume
			$query = "INSERT INTO `resume`(`user_id`, `name`, `email`, `phone`,`designation`, `description`, `exp`, `edu`) 
          			VALUES ('$user_id', '$name', '$email', '$phone','$designation', '$description', '$exp',  '$edu')";
			$result = $db->insert($query);
		  	}
      }
?>

<div class="containerMarginTop">
	<div class="container formStyle">
		<div class="row">
			<div class="formStyle">
				<form action="buildresume.php" method="post">
					<h1 class="form-signin-heading text-muted">Build Resume</h1>
					<label>Your complete Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required />
					<br>
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email address" required />
					<br>
					<label>Phone No</label>
					<input type="text" class="form-control" name="phone" placeholder="Phone Number" />
					<br>
					<label>Domain Area</label>
					<input type="text" name="designation" class="form-control" placeholder="Eg. Java Developer" required />
					<br>
					<label>Objective</label>
					<textarea class="form-control" name="description">Enter Your Profile Here </textarea>
					<br>
					<label>Experience</label>
					<input type="text" name="exp" class="form-control" required />
					<br>
					<label>Education Details</label>
					<input type="text" name="edu" class="form-control" placeholder="Enter your dgree details" required />
					<br>
					<div class="formStyle center">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="width:310px; margin: 30px auto" />
					</div>
			</form>
			<h3 class="center">or</h3>
				<form class="form-signin" method="POST" enctype="multipart/form-data">
					<h3 class="form-signin-heading">Upload File</h3>
				<div class="form-group">
					<label for="InputFile">File input</label>
					<input type="file" name="resume_file" id="InputFile">
					<p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
				</div>
					<button class="btn btn-lg btn-primary btn-block submitB" type="submit">Upload</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>