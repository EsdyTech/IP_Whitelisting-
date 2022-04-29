<?php
include('includes/dbconnection.php');

//assets
$que1=mysqli_query($con,"select * from ipaddress_tbl");
$allIps = mysqli_num_rows($que1);

//assets
$que2=mysqli_query($con,"select * from ipaddress_tbl where isAllowed = 'Yes'");
$ipsYes = mysqli_num_rows($que2);

//assets
$que3=mysqli_query($con,"select * from ipaddress_tbl where isAllowed = 'No'");
$ipsNo = mysqli_num_rows($que3);

//assets
$que4=mysqli_query($con,"select * from ipaddress_tbl");
$assets = mysqli_num_rows($que4);


?>