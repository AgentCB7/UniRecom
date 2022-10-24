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

	if (isset($_POST['submit']))
    {

        $coun=$_POST['country'];

        $query = "SELECT * FROM subject_info WHERE country='$coun' ORDER BY ranking";


        $execute = mysqli_query($conn,$query);
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
                <li><a href="landing.php">HOME</a></li>
                <li><a href="survey.php">SURVEY</a></li>
                <li><a href="landing.php#query">SEARCH</a></li>
            </ul>
        </nav>
        <a href="logout_form.php"><button>Logout</button></a>
	</div>
	<div class="formmain">
		<div class="searchmain">
		<h1>Welcome to search query</h1>
		<h3>Search for the best ranked universities in the world according to your preferred subject</h3>
	</div>
		<div class="form">
		 	<form method="POST" action="country-search.php">
		 		<select name="country" class="subselect">
		            <option value="Not">Select your preferred country</option>
		 			<option value="USA">USA</option>
		 			<option value="UK">UK</option>
		            <option value="Australia">Australia</option>
		            <option value="Canada">Canada</option>
		            <option value="China">China</option>
		            <option value="Germany">Germany</option>
		            <option value="Singapore">Singapore</option>
		            <option value="Switzerland">Switzerland</option>
		 		</select>

		        <br>
		 		<input type="submit" name="submit" value="Find Best Recommendations">	
		 	</form>
		</div>
		<div class="table" id="table">
		    <table>
		        <thead>
		            <tr>
		                <th>Subject</th>
		                <th>Name</th>
		                <th>Ranking</th>
		            </tr>    
		        </thead>
		        <tbody>
		            <?php
		            error_reporting(E_ERROR | E_PARSE);
		            if ($execute)
		            {
		                foreach ($execute as $uni) 
		                {
		                ?>
		                <tr>
		                    <td><?= $uni['subject']; ?></td>
		                    <td><?= $uni['uniname']; ?></td>
		                    <td><?= $uni['ranking']; ?></td>
		                </tr><?php    
		                }?><?php
		            }
		            ?>
		            </tr>  
		        </tbody> 
		    </table>
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