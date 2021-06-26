<?php 
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "task1";

    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);




 ?>

 <!DOCTYPE html>
 <html>
 <!-- --------------------------------------------- -->
 <head>
 	<title>Test</title>
 </head>
 <!-- --------------------------------------------- -->
 
 <body>
 	<?php
 	$eng1=$_POST["eng1"];
 	$eng2=$_POST["eng2"];
 	$eng3=$_POST["eng3"];
 	$eng4=$_POST["eng4"];
 	$eng5=$_POST["eng5"];

 	$query="insert into task1(m1,m2,m3,m4,m5,m6)values({$m1},{$m2},{$m3},{$m4},{$m5},{$m6})";
    $result=mysqli_query($conn,$query);

     if ($result){
       echo "Data added sucessfully";
   }else{
       die("Can Not conenct to the database".mysqli_connect_error($conn));
   }

 	?>


 </body>
 </html>

 <?php
mysqli_close($conn);
?>