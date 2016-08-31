<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$point = 50;
if ($point >= 80) {
    echo "A判定";
} elseif ($point >= 70 && $point < 80) {
    echo "B判定";
} elseif ($point >= 60 && $point < 70) {
    echo "C判定";
} elseif ($point < 60) {
    echo "D判定";
}
?>
</body>
</html>

