<?php
include("../config/db.php");

if(isset($_POST['register'])){

$name=$_POST['fullname'];
$id=$_POST['id_number'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO applicants(fullname,id_number,email,phone,password)

VALUES('$name','$id','$email','$phone','$password')";

mysqli_query($conn,$sql);

header("Location:login.php");

}
?>

<form method="POST">

<h2>Create Account</h2>

<input name="fullname" placeholder="Full Name">

<input name="id_number" placeholder="National ID">

<input name="email" placeholder="Email">

<input name="phone" placeholder="Phone">

<input type="password" name="password" placeholder="Password">

<button name="register">Register</button>

</form>