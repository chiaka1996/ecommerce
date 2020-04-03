<?php

include 'backend.php';
 ?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>kids wear</title>
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
	<nav class="navbar navbar-expand-sm" id="navigation" width="100%"> 	
		
		<div width="10%"> <a class="nav-brand" href="eindex.php"><h1><i>Kidswear</i></h1></a></div>
		

		
<!-- 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
			<span class="navbar-toggler-icon"></span>
		</button> -->
		<!-- <div class="collapse navbar-collapse" id="collapsiblenavbar"> -->
			<div id="nform" ><form  action="eindex.php" >
				<input type="text" width="5%">
				<button class="btn btn-success" type="submit">search</button>
			</form>
		</div>

			
			 <div id="user2">	<img src="images/user.png" width="15%" height="1%" id="user"><span><?php echo $_SESSION['username']; ?></span></div>
			

			<div id="cart" >
				<a href=""><img src="images/carticon.png" width="15%" height="1%">cart<i style="border-radius: 50%; background-color: green; color: white;">8</i> </a>
			</div>
		
	<!-- </div> -->
		</nav>
	<body>
		
		 <!-- <nav class="navbar navbar-expand-sm" id="navigation" width="100%"> 	
		
		<div width="10%"> <a class="nav-brand" href="eindex.php"><h1><i>Kidswear</i></h1></a></div>
		

		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
			<span class="navbar-toggler-icon"></span>
		</button> -->
		<!-- <div class="collapse navbar-collapse" id="collapsiblenavbar"> -->
<!-- 			<div id="nform" ><form  action="eindex.php" >
				<input type="text" width="5%">
				<button class="btn btn-success" type="submit">search</button>
			</form>
		</div>

			
			<div id="user2">	<img src="images/user.png" width="30%" height="1%" id="user"><span><?php  $use; ?></span></div>
			

			<div id="cart" >
				<a href=""><img src="images/carticon.png" width="30%" height="1%">cart<i style="border-radius: 50%; background-color: green; color: white;">8</i> </a>
			</div>
		
	
		</nav> --> 
		<div width="100%" height="100%" class="contain">
		<div class="container-fluid" id="fluid">
			<div class="row" width="100%">
				<div class="col-sm-2">
					<ul class="list-unstyled">
						<li><a href="#">female wears</a></li>
						<li><a href="#">male wears</a></li>
						<li><a href="#">boys Shoes & Slippers</a></li>
						<li><a href="#">Girls Shoes & Slippers</a></li>
						<li><a href="#"> kid Bags</a></li>
						<li><a href="#">Accessories</a></li>
						<li><a href="#">Games</a></li>
					</ul>

			</div>
			<div class="col-sm-8">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/image1.jpg" height="332px" >
							
						</div>
						<div class="carousel-item">
							<img src="images/image2.jpg" height="332px"  >
							
						</div>
						<div class="carousel-item">
							<img src="images/image3.jpg" height="332px" >
							
						</div>
					</div>
					<a href="#demo" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
										<a href="#demo" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-2" >
				<ul class="list-unstyled">
					<li><a href="#" data-toggle="modal" data-target="#mymodal"><i class='fas fa-address-card'></i>About us</a></li>
					<div class="modal" id="mymodal">
						<div class="modal-dialog">
							<div class="modal-content">
								
								<div class="modal-header">
									<h4 class="modal-tittle">ABOUT US</h4>
									<button type="button" class="close" data-dismiss="modal">&times</button>
								</div>
								<div class="modal-body">
									<p>We are an online retail store that deal in kids neccesities like cloths, shoes etc.</p>
								</div>
								<div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">close</button></div>
							</div>
						</div>
					</div>
					<li><a href="#" data-toggle="modal" data-target="#my"><i class='fas fa-phone'></i>Contact us</a></li>
					<div class="modal" id="my">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
			 						<h2 class="modal-tittle">CONTACT US</h2>
									<button type="button" class="close" data-dismiss="modal">&times</button>
								</div>
								<div class="modal-body">
									<p>contact us through this number 
                                         08084052359
									</p>
								</div>
								<div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal">close</button>
							</div>
							</div>
						</div>
					</div>
					<li><a href="esignup.php">Sign Up</a></li>
					
					<li  ><a href="#" data-toggle="modal" data-target="#log">Log in</a></li>
					<div class="modal" id="log">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-tittle" style="color:  #FF1493;" > Log in</h1>
									<button class="close" data-dismiss="modal">&times</button>
								</div>
								<div class="modal-body">
									<div>
										<form action="eindex.php" method="post">
											<div class="form-group">
												<label > USERNAME:</label>
												<input type="text" class="form-control" name="user"  >
											</div>
											<div class="form-group">
												<label for="pwd"> PASSWORD:</label>
												<input type="password" class="form-control" name="pass"  >
											</div>
											<button type="submit" class="btn btn-primary" name="login">Submit</button>

										</form>
									</div> 
								</div>
							</div>
						</div>
					</div>
					<li>
						<div class="row">
							<div class="col-sm-6"><a href=""><!-- <i class="fa fa-facebook" ></i> --><img src="images/facebookicon.png" width="30px" height="30px"></a></div>
							<div class="col-sm-6"><a href=""><img src="images/twittericon.png" width="35px" height="35px"></a></div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-sm-6"><a href=""><img src="images/watsapicon.jpg" width="50px" height="50px"></a></div>
							<div class="col-sm-6"><a href=""><img src="images/instagramicon.jpg" width="43px" height="40px"></a></div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		</div> 
	<br><br>
		<div class="row" id="container2">
				<div class="col-sm-12"><a href="#"><h2 style="color: white;">NEW ARRIVALS<h2></a></div>
			</div>
			<div class="row" id="container3">
				<div class="col-sm-3"><a href="#" data-toggle="modal" data-target="#babygown"><img src="images/image7.jpg" width="220px" height="220px">
                  <p style="color:  #FF1493; font-weight: bold;">Baby gown (2-3yrs)
                  <br>
                  <span>N2,500</span></p>
              </a>
              <div class="modal" id="babygown">
              	
              	<div class="modal-dialog modal-xl">
              		<div class="modal-content">
              			<div class="modal-header">
              				<h2 style="color: #FF1493;">NEW ARRIVALS<h2>
              				<button class="close" data-dismiss="modal">&times</button>
              			</div>
              			<div class="modal-body">

              				 <div class="row" >
              					<div class="col-sm-8">
              						
              						<div>
              							<img src="images/image7.jpg" width="520px" height="520px">
              						</div>
              					</div>
              					<div class="col-sm-4">
              						<h2 name="product">Premium Baby Gown</h2>
              						<div><p>
              							1. Made of silk for super comfort<br>
              							2. Preferable for hot season<br>
              							3. available for age 3-6yrs<br>
              						</p>
              						
              					</div>

              						<br>
              						<form method="post" action="eindex.php">

              						<div class="row">
              							<div class="col-sm-6" > <button style="background-color: #FFFF00;" name="amount" id="amt">N2,500</button></div>
              							<div class="col-sm-6"><button style="background-color: skyblue;" name="buy">BUY NOW</button></div>
              						</div>
              					</form>
              						<br><br>
                                      <div>
                                      	
                                      	<textarea rows="7" column="10" id="txtarea">please add your comment</textarea>

              						<form method="post" action="eindex.php" id="txtarea">
              							
              							<button>comment</button>
              						</form>
              					</div>


              					</div>
              				</div>
              				

              			</div>
              		</div>
              	</div>
              </div>
				</div>


					<div class="col-sm-3"><a href="#" data-toggle="modal" data-target="#sneak"><img src="images/image5.jpg"> <p style="color:  #FF1493; font-weight: bold;">Baby sneakers
                  <br>
                  <span>N3000</span></p></a>
                  <div class="modal" id="sneak">
              	
              	<div class="modal-dialog modal-xl">
              		<div class="modal-content">
              			<div class="modal-header">
              				<h2 style="color: #FF1493;">NEW ARRIVALS<h2>
              				<button class="close" data-dismiss="modal">&times</button>
              			</div>
              			<div class="modal-body">

              				 <div class="row" >
              					<div class="col-sm-8">
              						
              						<div>
              							<img src="images/image5.jpg" width="520px" height="520px">
              						</div>
              					</div>
              					<div class="col-sm-4">
              						<h2>Baby Sneakers</h2>
              						<div>
              							<span>SIZE</span><br>
              							<form action="eindex.php">
              								<button>7</button>
              								<button>8</button>
              								<button>9</button>
              								<button>10</button>
              						
              							</form>
              					</div>

              						<br>

              						<div class="row">
              							<div class="col-sm-6" > <span style="background-color: #FFFF00; ">N3,000</span></div>
              							<div class="col-sm-6"><button style="background-color: skyblue;">BUY NOW</button></div>
              						</div>
              						<br><br>
                                      <div>
                                      	
                                      	<textarea rows="7" column="10" id="txtarea">please add your comment</textarea>

              						<form method="post" action="eindex.php" id="txtarea">
              							
              							<button>comment</button>
              						</form>
              					</div>


              					</div>
              				</div>
              				

              			</div>
              		</div>
              	</div>
              </div>
</div>                  
              	
              
						<div class="col-sm-3"><a href="#" data-toggle="modal" data-target="#warmer"><img src="images/image11.jpg">
						 <p style="color:  #FF1493; font-weight: bold;">Supreme Head Warmer
                  <br>
                  <span>N1000</span></p></a>
<div class="modal" id="warmer">
              	
              	<div class="modal-dialog modal-xl">
              		<div class="modal-content">
              			<div class="modal-header">
              				<h2 style="color: #FF1493;">NEW ARRIVALS<h2>
              				<button class="close" data-dismiss="modal">&times</button>
              			</div>
              			<div class="modal-body">

              				 <div class="row" >
              					<div class="col-sm-8">
              						
              						<div>
              							<img src="images/image11.jpg" width="520px" height="520px">
              						</div>
              					</div>
              					<div class="col-sm-4">
              						<h2>Supreme Head Warmer</h2>
              						<div>
              							1. Help keep your baby warm during harmattan<br>
              							2. available in all sizes<br>
              							3. Age 6months - 6years

              					</div>

              						<br>

              						<div class="row">
              							<div class="col-sm-6" > <span style="background-color: #FFFF00; ">N1,000</span></div>
              							<div class="col-sm-6"><button style="background-color: skyblue;">BUY NOW</button></div>
              						</div>
              						<br><br>
                                      <div>
                                      	
                                      	<textarea rows="7" column="10" id="txtarea">please add your comment</textarea>

              						<form method="post" action="eindex.php" id="txtarea">
              							
              							<button>comment</button>
              						</form>
              					</div>


              					</div>
              				</div>
              				

              			</div>
              		</div>
              	</div>
              </div>
              </div>

							<div class="col-sm-3"><a href="#" data-toggle="modal" data-target="#bsocks"><img src="images/image9.jpg">  <p style="color:  #FF1493; font-weight: bold;">Baby Socks
                  <br>
                  <span>N500</span></p></a>
                  <div class="modal" id="bsocks">
              	
              	<div class="modal-dialog modal-xl">
              		<div class="modal-content">
              			<div class="modal-header">
              				<h2 style="color: #FF1493;">NEW ARRIVALS<h2>
              				<button class="close" data-dismiss="modal">&times</button>
              			</div>
              			<div class="modal-body">

              				 <div class="row" >
              					<div class="col-sm-8">
              						
              						<div>
              							<img src="images/image9.jpg" width="520px" height="520px">
              						</div>
              					</div>
              					<div class="col-sm-4">
              						<h2>Baby Socks</h2>
              						<div>
              							1. Help keep your baby warm and stylish<br>
              							2. available in all sizes<br>
              							3. Age 6months - 6years

              					</div>

              						<br>

              						<div class="row">
              							<div class="col-sm-6" > <span style="background-color: #FFFF00; ">N500</span></div>
              							<div class="col-sm-6"><button style="background-color: skyblue;">BUY NOW</button></div>
              						</div>
              						<br><br>
                                      <div>
                                      	
                                      	<textarea rows="7" column="10" id="txtarea">please add your comment</textarea>

              						<form method="post" action="eindex.php" id="txtarea">
              							
              							<button>comment</button>
              						</form>
              					</div>


              					</div>
              				</div>
              				

              			</div>
              		</div>
              	</div>
              </div> 

              </div>
			</div>

			<br><br>


		<div class="row" id="container2" style="background-color: green;">
				<div class="col-sm-12"><a href="#"><h2 style="color: white;">KID WEARS<h2></a></div>
			</div>
			<div class="row" id="container3">
				<div class="col-sm-3"><a href="#"><img src="images/wears1.jpg" width="220px" height="220px"></a>
                  <p style="color:  #FF1493; font-weight: bold;">full combo
                  <br>
                  <span>N5,500</span></p>
				</div>
					<div class="col-sm-3"><a href="#"><img src="images/wears2.jpg" width="220px" height="220px"> <p style="color:  #FF1493; font-weight: bold;">Baby supreme
                  <br>
                  <span>N4000</span></p></a></div>
						<div class="col-sm-3"><a href="#"><img src="images/image4.jpg" width="220px" height="220px">
						 <p style="color:  #FF1493; font-weight: bold;">Baby shirt
                  <br>
                  <span>N1000</span></p></a></div>
							<div class="col-sm-3"><a href="#"><img src="images/image6.jpg" width="220px" height="220px">  <p style="color:  #FF1493; font-weight: bold;">Aladin jacket
                  <br>
                  <span>N6000</span></p></a></div>
			</div>
			<br><br>
		<div class="row" id="container2" style="background-color: blue;">
				<div class="col-sm-12"><a href="#"><h2 style="color: white;">SHOES & SLIPPERS<h2></a></div>
			</div>
			<div class="row" id="container3">
				<div class="col-sm-3"><a href="#"><img src="images/shoe1.jpg" width="220px" height="220px"></a>
                  <p style="color:  #FF1493; font-weight: bold;">Baby shoe (2-3yrs)
                  <br>
                  <span>N2,500</span></p>
				</div>
					<div class="col-sm-3"><a href="#"><img src="images/shoe2.jpg" width="220px" height="220px"> <p style="color:  #FF1493; font-weight: bold;">Baby sneakers
                  <br>
                  <span>N3000</span></p></a></div>
						<div class="col-sm-3"><a href="#"><img src="images/shoe3.jpg" width="220px" height="220px">
						 <p style="color:  #FF1493; font-weight: bold;">Crystal balls shoes
                  <br>
                  <span>N2000</span></p></a></div>
							<div class="col-sm-3"><a href="#"><img src="images/baby3.jpg" width="220px" height="220px">  <p style="color:  #FF1493; font-weight: bold;">Baby slippers
                  <br>
                  <span>N100</span></p></a></div>
			</div>
			<br><br>
		<div class="row" id="container2" style="background-color: #808000;">
				<div class="col-sm-12"><a href="#"><h2 style="color: white;">KID BAGS<h2></a></div>
			</div>
			<div class="row" id="container3">
				<div class="col-sm-3"><a href="#"><img src="images/bag1.jpg" width="220px" height="220px"></a>
                  <p style="color:  #FF1493; font-weight: bold;">Baby Rabbit
                  <br>
                  <span>N1,500</span></p>
				</div>
					<div class="col-sm-3"><a href="#"><img src="images/bag2.jpg" width="220px" height="220px"> <p style="color:  #FF1493; font-weight: bold;">Power Pack
                  <br>
                  <span>N3000</span></p></a></div>
						<div class="col-sm-3"><a href="#"><img src="images/bag3.jpg" width="220px" height="220px">
						 <p style="color:  #FF1493; font-weight: bold;">Crystal Bag
                  <br>
                  <span>N2000</span></p></a></div>
							<div class="col-sm-3"><a href="#"><img src="images/bag4.jpg" width="220px" height="220px">  <p style="color:  #FF1493; font-weight: bold;">Baby Bloom
                  <br>
                  <span>N1200</span></p></a></div>
			</div>
			<br><br>
		<div class="row" id="container2" style="background-color: darkgrey;">
				<div class="col-sm-12"><a href="#"><h2 style="color: white;">ACCESSORIES<h2></a></div>
			</div>
			<div class="row" id="container3">
				<div class="col-sm-3"><a href="#"><img src="images/bag1.jpg" width="220px" height="220px"></a>
                  <p style="color:  #FF1493; font-weight: bold;">Baby Rabbit
                  <br>
                  <span>N1,500</span></p>
				</div>
					<div class="col-sm-3"><a href="#"><img src="images/bag2.jpg" width="220px" height="220px"> <p style="color:  #FF1493; font-weight: bold;">Power Pack
                  <br>
                  <span>N3000</span></p></a></div>
						<div class="col-sm-3"><a href="#"><img src="images/bag3.jpg" width="220px" height="220px">
						 <p style="color:  #FF1493; font-weight: bold;">Crystal Bag
                  <br>
                  <span>N2000</span></p></a></div>
							<div class="col-sm-3"><a href="#"><img src="images/bag4.jpg" width="220px" height="220px">  <p style="color:  #FF1493; font-weight: bold;">Baby Bloom
                  <br>
                  <span>N1200</span></p></a></div>
			</div>
	<script type="text/javascript" src="script.js"></script>
	</body>
	</html>