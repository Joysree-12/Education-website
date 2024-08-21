<?php
$con=mysqli_connect('localhost:3307','root','','onlineweb');
if($con){
    echo "connect successful<br>";
}else{
    echo die(mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];
$sql="insert into  `userweb` (name, email, mobile, comment) VALUES ('$name','$email','$mobile','$comment')";
$result=mysqli_query($con,$sql);
if($result){
    echo"Data inserted successfully";
}
else{
    die(mysqli_error($con));
}
}
header("location:index.php");
?>