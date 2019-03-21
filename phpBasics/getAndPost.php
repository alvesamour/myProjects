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

<title>Get And Post</title>
</head>

<body>
	<div class="container-fluid">
		<h1>Method Get</h1>
		<div class="col-sm-4 col-md-6 col-lg-3">
		<?php 
		
		echo "<p>GET</p>";
		  print_r($_GET);
		  if($_GET["submit"]){
		      if($_GET["username"]){
		          echo "<p>Bienvenu " . $_GET["username"] . " dans ma page</p>" ;
		      }  
		  }
		  /*echo "<p>POST</p>";
		  print_r($_POST);
		  if($_POST["submit"]){
		      if($_POST["country"]){
		          echo "<p>Form submited</p>" ;
		      }
		  }*/
		?>
		<!-- Method Get -->
			<form method="get" action="getAndPost.php">
				<div class="form-group">
					<label for="username">Username: </label> <input type="text"
						class="form-control" id="username" name="username"
						placeholder="username">
				</div>
				<input type="submit" name="submit" value="submit" class="btn btn-primary"></input>
			</form>
			<hr>
			<br>
			<h1>Method POST</h1>
			<!-- Method Post 
				<form method="post" action="getAndPost.php">
				<div class="form-group">
					<label for="country">Country: </label> <input type="text"
						class="form-control" id="country" name="country"
						placeholder="country">
				</div>
				<input type="submit" name="submit" value="submit" class="btn btn-primary"></input>
			</form>-->
		</div>
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