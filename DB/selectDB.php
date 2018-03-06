<?php

 function selectreq($tablename)
 {

   include('../DB/conn.php');

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }

   $sql = "SELECT * FROM $tablename WHERE `DELETE` = 0";

   $rs_result = $conn->query($sql);

   return $rs_result;
 }
?>
