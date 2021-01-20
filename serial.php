<?php
include_once("classes.php");

try {
    $img = new Picture(1, "name", "path/name", 1000);
    $imgSerial = serialize($img);
    file_put_contents("serial.txt", $imgSerial);
    echo "<h1 align='center' style='color: green; margin-top:10%;'>УСПЕШНО</h1>";
    echo "<script>";
    echo "window.location = 'unserial.php'";
    echo "</script>";
} catch (\Throwable $th) {
    echo "Произошла ошибка: " . $th;
}