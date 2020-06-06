<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style_result.css">
  
</head>
<body>

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
  $result = "『グリフィンドール』<br><br>あなたは「勇気と騎士道精神」
  <br>「決断力のある」性格。 <br>一度決めたらまっすぐに突き進む人、<br>意思が強い人たちです。";
} else if (13 <= $total && $total <= 16) {
  $result = "『ハッフルパフ』<br><br>あなたは「正しく忠実で忍耐強く」
  <br>「勤勉で苦労を苦労と思わない」性格。 <br>正直に生きていて、嫌味なところがありません。<br>信頼できる人たちです。";
} else if (17 <= $total && $total <= 20) {
  $result = "『レイブンクロー』<br><br>あなたは「勤勉で賢く」
  <br>「知性を何よりも重んじる」性格。 <br>賢いけれどもちょっとズレていて、<br>個性的な人たちです。";
} else if (21 <= $total && $total <= 24) {
  $result = "『スリザリン』<br><br>あなたは「野心的で鋭敏」
  <br>「リーダー的で成果主義のある」性格。 <br>一つのことに熱中できて尚かつ<br>目標が達成できる人たちです。 ";
}
?>
<div class="container">
  <h1>診断結果...</h1>
  <br>
  <h3><?= $result ?></h3>
  <br>

  
  <form action="index.html" method="POST">
    <button type="button" onclick="history.back()" >戻る</button>
  </form>
</div>
  
</body>
</html>



