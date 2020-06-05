<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <style>
    body {
      background-color: #ffc9d2;
    }
  </style>

<?php

// require_once('functions.php');

// var_dump($_POST);

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];

$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8;

// echo $total;

if (8 <= $total && $total <= 12) {
  echo "『グリフィンドール』";
} else if (13 <= $total && $total <= 16) {
  echo "『ハッフルパフ』";
} else if (17 <= $total && $total <= 20) {
  echo "『レイブンクロー』";
} else if (21 <= $total && $total <= 24) {
  echo "『スリザリン』";
}
?>


<form action="index.html" method="POST">
  <button type="button" onclick="history.back()" >戻る</button>
</form>
  
</body>
</html>



