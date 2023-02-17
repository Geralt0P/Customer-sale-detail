<?php
   $name = $_POST['name'];
   $sales = $_POST['sales'];
   $country = $_POST['country'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $image = $_POST['image'];

   $conn = new mysqli('localhost','root','','test');
   if($conn->connect_error){
   	 die('Connection Failed :'.$conn->connect_error);
   }else{
   	   $stmt = $conn->prepare("insert into users(name, sales, country, state, city, image) values(?,?,?,?,?,?)");
   	   $stmt->bind_param("sisssb",$name, $sales, $country, $state, $city, $image);
   	   $stmt->execute();
   	   echo "Form Succesfully Submitted...";
   	   $stmt->close();
   	   $conn->close();
   }
?>