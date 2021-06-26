<?php 
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "task1";

    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <?php
   $m1=$_POST["m1"];
   $m2=$_POST["m2"];
   $m3=$_POST["m3"];
   $m4=$_POST["m4"];
   $m5=$_POST["m5"];
   $m6=$_POST["m6"];
   $status=$_POST['0'];
   $query="insert into task1(m1,m2,m3,m4,m5,m6)values({$m1},{$m2},{$m3},{$m4},{$m5},{$m6})";
   $result=mysqli_query($conn,$query);
//    $stmt->bind_param("iiiiii",$m1,$m2,$m3,$m4,$m5,$m6);
//    $stmt->execute();
//    echo "D";
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