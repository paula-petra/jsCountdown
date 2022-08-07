

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">

  <?php 
$conn = mysqli_connect("localhost", "root","","countdown");
// if($conn){echo "Connection Successful"; }else{ echo " Conncetion Failed"; }

$sql1 = mysqli_query( $conn,"select * from daterange");
$sql2 = mysqli_fetch_assoc( $sql1);
$startdate = $sql2['startDate'];
$enddate =$sql2['endDate'];
// echo " startDate is " .$startdate."<br>";
// echo "endDate is" .$enddate ;



?>
  <script src="count.js" defer></script>
  <link rel="pqqqqqqqqqqqqqqqqqqqqqqqreconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>


<div class="container">
    <div class="container-segment">
      <div class="segment-title">HOURS</div>
      <div class="segment">
        <div class="flip-card" data-hours-tens>
          <div class="top">2</div>
          <div class="bottom">2</div>
        </div>
        <div class="flip-card" data-hours-ones>
          <div class="top">4</div>
          <div class="bottom">4</div>
        </div>
      </div>
    </div>
    <div class="container-segment">
      <div class="segment-title">MINUTES</div>
      <div class="segment">
        <div class="flip-card" data-minutes-tens>
          <div class="top">0</div>
          <div class="bottom">0</div>  
        </div>
        <div class="flip-card" data-minutes-ones>
          <div class="top">0</div>
          <div class="bottom">0</div>
        </div>
      </div>
    </div>
    <div class="container-segment">
      <div class="segment-title">SECONDS</div>
      <div class="segment">
        <div class="flip-card" data-seconds-tens>
          <div class="top">0</div>
          <div class="bottom">0</div>
        </div>
        <div class="flip-card" data-seconds-ones>
          <div class="top">0</div>
          <div class="bottom">0</div>
        </div>
      </div>
    </div>
  </div>

<div id="data" data-dates="<?php echo $startdate; ?>,<?php echo $enddate; ?>"></div>
</body>

</html>