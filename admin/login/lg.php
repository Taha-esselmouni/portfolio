<?php
session_start();
// get values from form
if (isset($_POST['submit'])) {
$user = $_POST['user'];
$password = $_POST['password'];



// connect to the database
$connection = mysqli_connect('Localhost','root','taha','portfolio-20');

// query the database for user
$result = mysqli_query($connection,"SELECT * FROM login WHERE user = '$user' AND password =  md5('$password')") or die("faild to query data" .mysql_error()) ; 
 $row = mysqli_fetch_array($result);
 if ($row['user'] == $user && $row['password'] == md5($password)) {
     //echo " you are loged" ;
     header("Location: ../index.php");
 }
 else{
     echo "you are not loged" ;
 }
}
?>