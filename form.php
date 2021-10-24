<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed".
    mysqli_connect_error());
}

//echo "successful";
$uname= $_POST['uname'];
$word=$_POST['word'];
$sql ="INSERT INTO dstrip.form( `uname`,`word`) VALUES ('$uname', '$word');";

        
//echo $sql;


if($con->query($sql)==true){
   // echo "successfully inserted";
}
else{
    echo "ERROR: $sql<br> $con->error";
}
$con->close();




?>


<!DOCTYPE html>
<html lang="en">

<head>
 
     <meta charset="UTF-8">
     <link rel="stylesheet" href="form.css">
    
    <title>form</title>
</head>

<body background="info.jpg" style=" background-size:cover ">
      <form action="form.php" method="post">
        <div class="container">
        <h1> ENTER YOUR NAME AND PASSWORD </h1>
       ENTER  USER NAME: <input type="text"  name="uname" id="uname" placeholder="enter user name"><br>
        ENTER PASSWORD :<input type="text" name="word" id="word" placeholder="enter password"><br>
    
        <button class="btn">Submit</button></div>

    </form>
</body>

</html>