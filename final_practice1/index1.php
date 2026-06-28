<?php
$reg=$_POST["num_reg"];
$fee=$_POST["fee"];
$capacity=$_POST["capacity"];

$total_rooms=$reg/$capacity;
echo "total seet".$total_rooms;
?>