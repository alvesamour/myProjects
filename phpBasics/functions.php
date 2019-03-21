<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower"
	rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />

<title>Function</title>
</head>

<body>
	<div class="container-fluid">
		<h1>Function</h1>
		<p>
  		<?php
  		//function welcome
  		function welcomeYou(){
  		    echo "<p>Welcome Romilson Alves</p>";
  		}
  		
  		welcomeYou();
  		//function users
  		function userData($name, $money){
  		   echo  "<p>Hi  $name. Your money is $money Euros. </p>";
  		}
  		
  		userData("Victor", 200);
  		
  		//function with return
  		function somme($x, $y){
  		    return $x + $y;
  		}
  		$somme = somme(4, 5);
  		echo "<p>La somme entre 4 et 5 est $somme</p>";
  		?>     
  	</p>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>