<?php 
   $databaseHost = 'localhost';
   $databaseName = 'shop';
   $databaseUsername = 'root';
   $databasePassword = '';
   $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
   mysqli_set_charset($mysqli, 'UTF8');
?>