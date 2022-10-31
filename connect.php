<?php

$course=$_POST['course'];
$price=$_POST['price'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$DD=$_POST['DD'];
$MM=$_POST['MM'];
$yyyy=$_POST['yyyy'];
$gender=$_POST['gender'];
$cardnum=$_POST['cardnum'];
$cvc=$_POST['cvc'];

//DATABASE CONNECTION

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
  die('Connection Failed :' .$conn->connect_error);
}else {

  $stmt = $conn->prepare("insert into payment(course,price,fullname,email,DD,MM,yyyy,gender,cardnum,cvc)value(?,?,?,?,?,?,?,?,?,?)" );

  $stmt->bind_param("ssssiiisii",$course,$price,$fullname,$email,$DD,$MM,$yyyy,$gender,$cardnum,$cvc);
  $stmt->execute();
  echo "<center>" . "<br>" . "<br>" . "<br>" .  "<h2>" . "Registration Successfully......" . "</h2>" . "</center>";
  $stmt->close();
  $conn->close();
}

?>
