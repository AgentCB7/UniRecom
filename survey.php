<?php
	session_start();
	@include("config.php");

	$userprofile = $_SESSION['user_name'];

	if($userprofile == true)
	{

	}
	else
	{
		header('location:login_form.php');
	}

	if(isset($_POST['submit']))
	{

   		$name = mysqli_real_escape_string($conn, $_POST['name']);
   		$gender = $_POST['gender'];
   		$subject = $_POST['subject'];
   		$class = $_POST['class'];
   		$finance = $_POST['finance'];
		$opinion = mysqli_real_escape_string($conn, $_POST['opinion']);
   		$insert = "INSERT INTO survey(name, gender, subject, class, finance, opinion) VALUES('$name','$gender','$subject','$class','$finance','$opinion')";

    	mysqli_query($conn, $insert);

    	header('location:pietest.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UniRecom-Survey</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">⇑</button>
	<div class="nav">
        <img src="logo_black.png">
        <nav>
            <ul>
                <li><a href="landing.php">HOME</a></li>
                <li><a href="#">SURVEY</a></li>
                <li><a href="landing.php#query">SEARCH</a></li>
            </ul>
        </nav>
        <a href="logout_form.php"><button>Logout</button></a>
	</div>
	<div>
		<h1 class="survtitle">Share your opinion</h1>
		<h3 class="survsubtitle">Take a survey and help us create a better understanding of your decision</h3>
	</div>
	<div class="surveyform">
		<form method="POST" action="survey.php">
			<h3 class="survques">Enter your name</h3>
			<input type="text" name="name" class="q1" required>
			<h3 class="survques">Select your gender</h3>
			<select name="gender" class="q2" required>
				<option value="">Select</option>
                <option value="male">Male</option>
     			<option value="female">Female</option>
     			<option value="other">Others</option>	
         	</select>
         	<h3 class="survques">Select your preferred subject</h3>
     		<select name="subject" class="q2" required>
                <option value="">Select</option>
     			<option value="Data Science">Data Science</option>
     			<option value="Data Engineering">Data Engineering</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Game Design and Development">Game Design and Development</option>
                <option value="Database Administration">Database Administration</option>
                <option value="Web Development">Web Development</option>
                <option value="Block Chain and Cryptography">Block Chain and Cryptography</option>
                <option value="Computer Graphics">Computer Graphics</option>
     		</select>
     		<h3 class="survques">Select your education level</h3>
     		<select name="class" class="q2" required>
				<option value="">Select</option>
                <option value="freshman">Freshman (Undergrad)</option>
     			<option value="sophomore">Sophomore (Undergrad)</option>
     			<option value="junior">Junior (undergrad)</option>	
     			<option value="senior">Senior (undergrad)</option>
     			<option value="graduate">Graduate student</option>
         	</select>
         	<h3 class="survques">Select your education level</h3>
         	<select name="finance" class="q2" required>
				<option value="">Select</option>
                <option value="loan">Personal loan</option>
     			<option value="scholarship">Scholarship</option>
     			<option value="govt">Govt sponsored</option>	
     			<option value="self">Self-financed</option>
     			<option value="parent">Parents and/or relatives</option>
         	</select>
         	<h3 class="survques">Enter your suggestions (if any)</h3>
         	<input type="text" name="opinion" placeholder="Write your suggestions..." class="q3">

                <br>
         		<input type="submit" name="submit" value="Finish survey" class="qbutton">	
         	</form>
        </div>
	</div>

	<div class="footer">
        <h2>Developed by:</h1>
        <h3>Md. Shams Kadir Khan, Amina Begum Tithi, Fahmida Sultana Mahi, Sadia Mahfuz Sraboni<br>For the project of 2nd Year 2nd Semester</h3>
        <div class="contact">
            <a href="https://www.facebook.com/XanthophyllCB7"><img src="icon1.png"></a>
            <a href="https://www.instagram.com/guide_of_teyvat"><img src="icon2.png"></a>
            <a href="https://twitter.com/XanthophyllP"><img src="icon3.png"></a>
            <a href="landing.php"><img src="icon4.png"></a>  
        </div>    
    </div>
    <script src="design.js"></script>   
</body>
</html>