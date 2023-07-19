<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "meet";

$connection = mysqli_connect($server , $username , $password , $database);

if ($connection -> connect_error){
    die($connection -> connect_error);
}
else{
    echo "Connection Successful <br/> You Are now connected to Database: $database";
}

$Buyer_name = $_REQUEST["Buyer_name"];
$product_id = $_REQUEST["product_id"];
$email = $_REQUEST["email"];
$date = $_REQUEST["date"];
$feedback = $_REQUEST["feedback"];

$query = "INSERT INTO feedback_form VALUES ('$Buyer_name','$product_id','$email','$date','$feedback')"; 

if(mysqli_query($connection, $query)){  
    echo "Record inserted successfully";
}
else{  
   echo "Could not insert record: ". mysqli_error($connection);
}  
   
   mysqli_close($connection); 
?>