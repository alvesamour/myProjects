<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  />
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />

  <title>DAta types: Arrays</title>
</head>

<body>
  <div class="container-fluid">
  	<h1>Arrays </h1>
  	<p>
  		<?php 
  		//index arrays
  		    $carNames = array("Audi", "BMW", "Opel");
  		    echo "<p>Car Names: </p>";
  		    //afficher arrays
  		    print_r($carNames);
  		    echo "<p>Car Names: first Element</p>";
  		    echo $carNames[0];
  		    //Associative array
  		    $buyShoes = array("A"=>'NIKE', "B"=>"ADIDAS", "C"=>"PUMA");
  		    echo "<p>Shoes Makes: </p>";
  		    print_r($buyShoes);
  		    echo "<br> dump";
  		    var_dump($buyShoes);
  		?>
  	</p>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>