<?php
include_once("classes.php");

$imgSerial = file_get_contents("serial.txt");
$imgUnserial = unserialize($imgSerial);
$imgUnserial->Show();