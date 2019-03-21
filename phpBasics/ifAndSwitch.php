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

<title>If and Switch</title>
</head>

<body>

	<div class="container-fluid">
		<h1>If and Switch</h1>
		<p>
  		<?php
  		$dream = true;
  		if($dream) {
  		    echo "<p>Success!</p>";
  		}else{
  		    echo "<p>Believe again!</p>";
  		}
  		
  		
  		$x = ($dream)?"A":"B";
  		echo $x;
  		//temperatude if else
  		$temp = 25;
  		if ($temp<15) {
  		    echo "<p>It's cold</p>";
  		    }elseif($temp>30){
  		        echo "<p>It's Hot</p>";
  		    }else{
  		        echo "<p>It's medium</p>";
  		    }
  		    
  		 //Switch
  		 $car = "Opel";
  		 switch ($car){
  		     case "Audi":
  		         echo "It's a good car.";
	             break;
  		     case "Opel":
  		         echo "It's not expensive";
  		         break;
  		     default:
  		         echo "Just by a car";
  		         break;
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