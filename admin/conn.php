<?php

$host="localhost";
$user="root";
$pw="taha";
$ndb="portfolio-20";
$conn=mysqli_connect($host,$user,$pw,$ndb,3306);
 if($conn){
  //echo"connected";
 }else{
  echo"no connected";}
?>