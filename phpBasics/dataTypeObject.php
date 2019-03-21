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

  <title>DAta types: Object</title>
</head>

<body>
  <div class="container-fluid">
  	<h1>Object </h1>
  	<p>
  		<?php 
  		    class car {
  		        //properties
  		       public $make = "opel";
  		       private $status = "off";
  		       
  		       //methods
  		       function turn_on() {
  		           $this->status = "on";
  		       }
  		       
  		       function getStatus() {
  		           return $this->status;
  		       }
  		    }
  		    
  		    $myCar = new car;
  		    var_dump($myCar);
  		    echo ("<br/>");
  		    echo $myCar->make;
  		    echo ("<br/>");
  		    //fatal error, it's private - have to use methods
  		    //echo $myCar->status;
  		    //echo ("<br/>");
  		    //now we car use status with this method
  		    $myCar->turn_on();
  		    var_dump($myCar);
  		    echo ("<br/>");
  		    //with this function we car acces the status too
  		    echo $myCar->getStatus();
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