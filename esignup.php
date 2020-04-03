<?php   include 'backend.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>esignup</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>  
</head>
<body>
	 <nav class="navbar navbar-expand-sm" id="navigation" width="100%"> 	
		
		<img src="images/menuicon1.png" width="2%" height="2%" > <a class="nav-brand" href="eindex.php"><h1><i>Kidswear</i></h1></a>
		

		
<!-- 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
			<span class="navbar-toggler-icon"></span>
		</button> -->
		<!-- <div class="collapse navbar-collapse" id="collapsiblenavbar"> -->
			<form  action="eindex.php" id="nform">
				<input type="text" >
				<button class="btn btn-success" type="submit">search</button>
			</form>

			<div id="cart" >
				<a href=""><img src="images/carticon.png" width="40px" height="40px">cart<i style="border-radius: 50%; background-color: green; color: white;">8</i> </a>
			</div>
		
	<!-- </div> -->
		</nav>

	<div id="esignup">

		<p style="color: #1E90FF;">Welcome to Your one stop online kids store, To be part of the Communnity, please fill the form below<p>
										<form action="esignup.php" method="post">
											<div class="form-group">
															<span style = 'color:red';> <?Php echo $fullnameerr ?> </span><br>
												<label for="name"> FULLNAME:</label>
												<input type="text" class="form-control" name="fullname" id="name" required>
											</div>
											<div class="form-group">
															<span style = 'color:red';> <?Php echo $usernameerr ?> </span><br>
												<label for="name"> USERNAME:</label>
												<input type="text" class="form-control" name="username" id="name" placeholder="user123"  required >
											</div>

											<div class="form-group">

												<label for="address"> HOME ADDRESS:</label>
												<input type="text" class="form-control" name="home" id="address" required>
											</div>
											<div class="form-group">
															<span style = 'color:red';> <?Php echo $phoneerr ?> </span><br>
												
												<label for="phone"> PHONE NO:</label>
												<input type="text" class="form-control" name="phone" id="phone"  required>
											</div>
											<div class="form-group">
															<span style = 'color:red';> <?Php echo $emailerr ?> </span><br>
												<label for="email"> EMAIL:</label>
												<input type="email" class="form-control" name="email" id="email"  required>
											</div>
											<div class="form-group">
												<label for="pwd"> PASSWORD:</label>
												<input type="password" class="form-control" name="password" id="pwd"  required>
											</div>
											<button type="submit" class="btn btn-primary" name="btn">Submit</button>

										</form>
									</div> 

</body>
</html>


 