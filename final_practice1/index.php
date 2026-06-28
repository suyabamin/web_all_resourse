<?php
echo "hello world";
//connect with database================

$survername="localhost";
$username="root";
$password="";
$dbname="sunset_hotel";
$conn=new mysqli($survername,$username,$password,$dbname);

if($conn->connect_error){
    die("connnection filed".$conn->connect_error);
}else{
    echo "connection successfull"."<br>";
}


//run the query===================================
echo "a. Write a query to display all bookings where PaymentStatus is Paid."."<br>";
$Z=0;
$sql="

SELECT GuestName as Z
FROM room_bookings
WHERE PaymentStatus='Paid';

";
$results=$conn->query($sql);


if($results->num_rows>0){
    while($row=$results->fetch_assoc()){
        echo $row["Z"]."<br>";
    }
}
//////////b. Write a query to find the average TotalBill across all bookings.



$averagae_bill=0;
$sql="

FROM room_bookingsSELECT AVG(TotalBill) as averagae_bill

";


$results=$conn->query($sql);


if($results->num_rows>0){
    $row=$results->fetch_assoc();
echo $row["averagae_bill"]."<br>";
}





?>

