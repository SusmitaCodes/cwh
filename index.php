<?php
if(isset($_post['name'])){
	$server ="localhost";
	$username="root";
	$password="";

	$con = mysqli_connect($server,$username,$password);

	if(!$con){
		die("connection to the database is failed due to".mysqli_connect_error());

	}

	//echo "succes connecting to the db";
    $name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$desc=$_POST['desc'];

	$sql ="INSERT INTO `trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`)
	 VALUES (`$name`, `$age`, `$gender`, `$email`, `$phone`, `$desc`,current_timestamp())";
	 echo $sql;

	 if($con->query($sql)==true){
		echo "successfully inserted";
	 }
	 else{
		echo "ERROR: $sql <br> $con->error";
	 }
	 $con->close();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- <img src="iit-indian-institute-of-technology-kharagpur4613 (1).jpg" alt="iit" > -->
  
    <div class="container">
        <h2>Welcome to IIT Kharagpur US Trip Form</h2>
        <p>Enter your details and submit this form to confirm your participation in the trip.</p>
    
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter you name"><br>
            <input type="text" name="age" id="name" placeholder="Enter you age"><br>
            <input type="text" name="gender" id="gender" placeholder="enter your gender"><br>
            <input type="email" name="email" id="email" placeholder="enter your emial"><br>
            <input type="phone" name="phone" id="phone" placeholder="enter your phone number"><br>
            <textarea name="desc" id="desc" cols="30" row="10" placeholder="enter any other information here"></textarea><br>
            <button class="btn">Submit</button>
           
        </form>
    </div>

    <script src="index.js"></script>
</body>
</html>

