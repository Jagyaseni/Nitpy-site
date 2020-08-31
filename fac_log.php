<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		include 'db.php';
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];

		$result= mysqli_query($con,"select * from facultymaster where username='$username' and password='$password'");

		if(mysqli_fetch_assoc($result))
		{
			header('location:fhome.php');
		}else{
			$msg="Invalid uid and pwd";
		}
	}
include 'top.php';
?>


<!DOCTYPE HTML>
<html>
<head>
<title>NIT Puducherry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
</head><body>


<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" method="post">
	    	<p class="lead">Welcome Back!</p>
		    <div class="form-group">
			    <input autocomplete="off" type="text" name="username" id="username" class="required form-control" placeholder="Username">
		    </div>
		    <div class="form-group">
			    <input autocomplete="off" type="password" class="password required form-control" placeholder="Password" name="password" id="password">
		    </div>
		    <div class="form-group">
		    	<input type="checkbox" name="remember" value="true"> Remember Me
		    	<input type="submit" class="btn btn-primary btn-lg1 btn-block" name="submit" value="Log In">
		    	
		    </div>
	        
		 </form>
	   </div>
</div>

</body></html>


<?php 
include 'foot.php';
?>