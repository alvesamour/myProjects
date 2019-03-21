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

<title>For Loop</title>
</head>

<body>
	<h1>For: </h1>
	<div class="container-fluid">
		<h1>If and Switch</h1>
		<p>
  		<?php
  		    for ($i = 1; $i <= 10; $i++) {
  		        echo $i . "<br />";
  		    }
  		    
  		    
  		    $car = array("Audi","BMW", "Opel");
  		    foreach ($car as $value){
  		        echo $value . "<br />";
  		    }
  		    
  		    $market = array("1"=>"Leite", "2"=>"Cerveja", "3"=>"Pao", "4"=>"sumo");
  		    foreach ($market as $key => $value){
  		        echo $key . " : " . $value . "<br />";
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