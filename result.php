<?php

var_dump($_POST);

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

$total = $q1 + $q2 + $q3;

echo $total;

if (8 <= $total && $total <= 12) {
  echo "G";
}

?>