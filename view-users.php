<?php
session_start();
if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)) { 
header("Location: login.php"); 
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>users table</title>
</head>
<body>

	<h1>Login as a member</h1>
	<a href="signup-finall.php">Back to the main menu</a>
<?php // This script retrieves all the records from the users table.

 require('mysqli_connect.php'); // Connect to the database.
 // Make the query:
 $q = "SELECT CONCAT(lname, ' ', fname) AS name,DATE_FORMAT(registration_date, '%M %d, %Y') AS regdat FROM users ORDER BY registration_date ASC";
  $result = @mysqli_query ($dbcon, $q); // Run the query.
   if ($result) { // If it ran OK, display the records.// Table header.
   	echo '<table> <tr><td><b>Name</b></td><td><b>Date Registered</b></td></tr>';
    // Fetch and print all the records:
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { echo '<tr><td>' . $row['name'] . '</td><td>' . $row['regdat'] . '</td></tr>'; }
    echo '</table>'; // Close the table so that it is ready for displaying.
    mysqli_free_result ($result); // Free up the resources.
     } else { // If it did not run OK.
      // Error message:
     echo '<p class="error">The current users could not be retrieved. We apologize for any inconvenience.</p>';
        // Debug message: 
     echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
     } // End of if ($result)
     mysqli_close($dbcon); // Close the database connection.
 ?>

</body>
</html>