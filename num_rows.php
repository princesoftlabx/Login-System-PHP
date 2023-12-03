<?php
include("partials/dbconnect.php");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: ". mysqli_connect_error();
  }

$sql="SELECT lname,email FROM formdata ORDER BY lname";

if ($result=$con->query($sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
