<?php 
$conn = mysqli_connect("localhost", "root","","countdown");
if($conn){echo "Connection Successful"; }else{ echo " Conncetion Failed"; }

$sql1 = mysqli_query( $conn,"select * from daterange where id = 1 " );
$sql2 = mysqli_fetch_assoc( $sql1);
$startdate = $sql2['startDate'];
$enddate =$sql2['endDate'];
echo " startDate is " .$startdate."<br>";
echo "endDate is" .$enddate ;


?>