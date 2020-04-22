<?php

$pharyngateNum = -50;

echo "<table border = \"1 \">";

while ($pharyngateNum <= 50) {
    $сelsiusNum = ($pharyngateNum - 32) / 1.8;
    echo "<td>";
    echo "$pharyngateNum" . " ";
    $pharyngateNum++;
    echo "</td>";
    echo "<td>";
    echo $сelsiusNum;;
    echo "</td>";
}

echo "</table>";


echo "<table border = \"1 \">";
for ($pharyngateNum = -50; $pharyngateNum <= 50; $pharyngateNum++) {
    $сelsiusNum = ($pharyngateNum - 32) / 1.8;
    echo "<td>";
    echo "$pharyngateNum" . " ";
    echo "</td>";
    echo "<td>";
    echo $сelsiusNum;;
    echo "</td>";
}
echo "</table>";




function getImage($src, $alt = "image", $width = "300px", $height = "300px") {
    return "<img src = $src width = '$width . px' height='$height . px' alt='$alt'>";
}

echo getImage("img.png", "img", 200, 200);

$path = "http://images.example
.com/";


function getImageSrc($src, $alt = "image", $width = "300px", $height = "300px") {
    global $path;
    return "<img src = '$path$src' width = '$width . px' height='$height . px' alt='$alt'>";
}

echo getImageSrc("photo.png", "img", 200, 200);