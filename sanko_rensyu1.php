<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$moneyCarried = 900;
//論理式 ? trueのときの値 : falseのときの値
$admission = ($moneyCarried>=1000) ? "入場できます" : "入場できません";
echo $admission;
?>
</body>
</html>

