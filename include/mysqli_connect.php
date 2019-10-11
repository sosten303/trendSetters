
<?php
 // This file provides the information for accessing the database.and connecting  to MySQL. coding to utf-8 
 // First we define the constants:                                                  
  DEFINE ('DB_USER', 'sosten');
  DEFINE ('DB_PASSWORD', 'soscpp');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'membersidb');
 // assign the database connection to a variable  $dbcon:
 $dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
 OR die ('Could not connect to MySQL: ' . mysqli_connect_error () ); 
 // echo "<h1>!connected to your membersidb Database</h1>";
  // Finally, we set the language encoding.as utf-8 
  mysqli_set_charset($dbcon, 'utf8');

     ?>