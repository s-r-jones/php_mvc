<?php
$con=mysqli_connect("localhost","ipv6","ipv6","ipv6");
 // Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$ipAddress = mysqli_real_escape_string($con, $_POST['ipAddress']);

$sql="INSERT INTO ipv6 (name, ipaddress)
VALUES ('$name', '$ipAddress')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>



?>