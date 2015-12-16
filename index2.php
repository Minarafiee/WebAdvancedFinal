<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
    	<title>Mina's Final Dairy Page 2</title>
		<meta name="keywords" content="HTML, CSS, Filters">
		<meta name="description" content="Filter CSS">

    	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
		<link href="./styles/style.css" rel="stylesheet">
		<link rel="icon" src="Icons/LOGO2.png">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    	<script type="text/javascript" src="scripts/script.js"></script>


	</head>

	<header class="nav">
			<div><img id="logo" src="Icons/LOGOF.png"></div>
			</header> 

	<body>
			 <p align="left">DigiDi is your life time project. It is a platform to collect all memories.<br>
				DigDi is a platform to record the present for the history of future. <br>
				It is a collection of our images, videos, audios and writings to remember life.<br>
				</p>


		<div class="container"> 
			
			  <input type="radio" id="image" name="type"/>
			  <label for="image" id="imagelabel"></label>

			  
			  <input type="radio" id="video" name="type"/>
			  <label for="video" id="videolabel"></label>

			  
			  <input type="radio" id="audio" name="type"/>
			  <label for="audio" id="audiolabel"></label>


			  <input type="radio" id="text" name="type"/>
			  <label for="text" id="textlabel"></label>

			  <input type="radio" id="reset" name="type"/>
			  <label for="reset" id="resetlabel"></label>
			</br>


			  <?php include 'demo2.php';?> 

 				
</div>
	  
		
	</body>
</html>