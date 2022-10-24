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


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UniRecom</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
	<button onclick="topFunction()" id="myBtn" title="Go to top">⇑</button>
	<div class="nav">
        <img src="logo_black.png">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="survey.php">SURVEY</a></li>
                <li><a href="#query">SEARCH</a></li>
            </ul>
        </nav>
        <a href="logout_form.php"><button>Logout</button></a>
	</div>
	<div class=main>
        <div>
            <img src="logo.png">
        </div>    
        <div class="header">
            <h1>Welcome to Unirecom</h1>
            <h3>Unirecom is a simple University recommendation web page that can show you the top ranked university in the world according to a subject that you choose.
        </div>
	</div>
	<div class="midsec">
		<h1>What can you do in UniRecom?</h1>		
	</div>
	<div class="section1">
		<div class="secgrid">
			<img src="sec1.png">
		</div>
		<div class="secpara">
			<h3><a href="#query">Choose your preference</a></h3>
			<h4>Select your preferred country or subject and see the top ranked universities around the world!</h4>
		</div>
	</div>	
	<div class="section2">
		<div class="secpara2">
			<h3><a href="survey.php">Share your opinion</a></h3>
			<h4>Take a survey, answer some questions and know what others are thinking about their future!</h4>
		</div>
		<div class="secgrid2">
			<img src="sec2.png">
		</div>
	</div>	
	<div class="section1">
		<div class="secgrid">
			<img src="sec3.png">
		</div>
		<div class="secpara">
				<h3><a href="#">Browse through</a></h3>
				<h4>Browse the websites of different top ranked universities of the world and take your decision!</h4>
			</div>
		</div>
	</div>
	<div class="surv-main" id="query">
        <h1>Select a way to search</h1>
        <div class="survselect">
	        <div class="survbutton">
	        	<img src="surv1.png"><br>
	        	<a href="country-search.php"><button>Search By Country</button></a>
	        </div>
	        <div class="survbutton">
	        	<img src="surv2.png"><br>
	        	<a href="sub-search.php"><button>Search By Subject</button></a>
	        </div>
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
