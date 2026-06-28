<?php

$Attend=$_POST["Attendees"];
$Cost_per_person=$_POST["Cost_per_person"];
$Venue_Capacity=$_POST["Venue_Capacity"];


$Total_vanues=ceil($Attend/$Venue_Capacity);
echo "Total vanue is=".$Total_vanues."<br>";

$empty_sets=($Total_vanues*$Venue_Capacity)-$Attend;
echo "empty sets=".$empty_sets."<br>";

$wasted_money=($empty_sets*$Cost_per_person);

echo " wasted money=".$wasted_money."<br";

echo "hello world";


?>