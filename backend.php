<?php
session_start();

$host='localhost';
 $db = 'ecommerce';
 $password='';
 $user='root';

 //create connection
$con=mysqli_connect ($host, $user, $password, $db) or die ("connection failed" . mysqli_connect_error());

$fullname=$phone=$home=$username=$email=$password=$use= $userlog=$us=$prod=$amoun="";

$fullnameerr = $emailerr = $phoneerr = $usernameerr = '';

$fullnameT=$phoneT=$homeT = $emailT= $usernameT=$passwordT="";



function test($data){

	$data= trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}

if(isset($_POST["btn"])){

	$fullname = $_POST["fullname"];
	$home = $_POST["home"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	 if(!preg_match("/^[a-zA-Z ]*$/", $fullname)){
         
         $nameerr = "only letters and whitespace allowed";
         
    }
    else{
    	$fullnameT = test($fullname);

    	if(!preg_match("/0[78][01]\d+/", $phone)){
            $phoneerr = "Invalid phone number";
    	}
    	else{
            $phoneT = test($phone);

    		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    			$emailerr = "Invalid email address";
    		}
    		else{
    			$emailT = test($email);

    			if(!preg_match("/[a-z]+[0-9]+$/", $username)){

    				$usernameerr = "invalid username";
    			}

    			else{
                       $homeT = test($home);
                       $passwordT = test($password);
                       $usernameT = test($username);

                       $stm = $con -> prepare("INSERT INTO users values(' ', ?, ?, ?, ?, ?, ?)");
	     $stm -> bind_param('ssssss', $fullnameT, $homeT, $phoneT, $usernameT, $emailT, $passwordT);
	     $query = $stm -> execute();
 
              if($query){
        echo '<script type="text/javascript"> alert("Congratulations! Welcome to our store.")</script>';
	
              	
	     header("location: eindex.php");
              }
    			}
    		}
    	}
    }

}
if(isset($_POST['login'])){
	$userlog= $_POST['user'];
	$pass= $_POST['pass'];

	$sql = ("SELECT * FROM users WHERE username='$userlog' AND password='$pass'") or die("unable to connect");

	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);

	if(mysqli_num_rows($result)>0){
		
		$_SESSION['username']= $userlog; 
		  header("location: eindex.php");
		

		
	}
	else{
		echo '<script type="text/javascript"> alert("username and password do not match"> </script>';
	}

	 }

	 if(isset($_POST['buy'])){
	 	$amount = $_POST["amount"];
        $product = $_POST['product'];
       

	 }

?>