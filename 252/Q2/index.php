<?php


$Attendees=$_POST["Attendees"];
$Seat_Capacity=$_POST["Seat_Capacity"];
$Ticket_Price=$_POST["Ticket_Price"];

$Total_screen=ceil($Attendees/$Seat_Capacity);
echo "Total is=".$Total_screen."<br>";
$empty_set=($Seat_Capacity*$Total_screen)-$Attendees;
echo "Empty Seats=".$empty_set."<br>";
$waste_money=$empty_set*$Ticket_Price;
echo "Wastage money=".$waste_money;



?>