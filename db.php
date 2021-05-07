<?php
$host="ec2-54-166-167-192.compute-1.amazonaws.com";
$port        = "port = 5432";
$dbname="ddd2v9f3fokp3q";
$credentials = " user= ftefyysaztiijg  password=cada1cc04c842c493f5f75194f9ef5e6e463b27f9468b87aa755a1bcbf5da67f";

$db_con=mysqli_connect($host,$port,$dbname,$credentials);


   if(!$dbcon) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
