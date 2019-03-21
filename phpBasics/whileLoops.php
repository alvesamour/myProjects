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

<title>While Loop</title>
</head>

<body>
	<div class="container-fluid">
		<h1>While loop</h1>
		<p>
  		<?php
  		$i=1;
  		while ($i<=10) {
  		    echo $i . "<br />";
  		    $i++;
  		}   
  		
  		
  		$car = array("Audi","BMW", "Opel");
  		$j = 0;
  		while ($j <3) {
  		    echo $car[$j] . "<br />";
  		    $j++;
  		}
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