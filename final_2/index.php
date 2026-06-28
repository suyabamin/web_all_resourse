<?php

echo "hello dfdfdfdfworld";
/// database connection
$ser="localhost";
$us="root";
$pass="";
$dbname="city_hospital";
$conn=new mysqli($ser,$us,$pass,$dbname);


/*if($conn->connect_error){
    die("connection filed".$conn->connect_error);
}else{
    echo "connection is successfully"."<br>";
}  */
echo "a. Write a query to display all columns for appointments whose AppStatus is Completed."."<br>";
//run the query==================
$sql="
SELECT *
FROM appointment_records
WHERE AppStatus='Completed'
";

$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo $row["PatientName"]."<br>";
    }
}


//another question is

echo "b. Write a query to display the PatientName and Fee of the patient with the highest fee."."<br>";
$max_fee=0;
$sql= "
SELECT Max(Fee) as max_fee
FROM appointment_records

";

$result=$conn->query($sql);
if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
   $max_fee=$row["max_fee"];
    echo $row["max_fee"];
   }
}




$sql="
select *
from appointment_records
where Fee=$max_fee;
";


$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo $row["PatientName"]."<br>";
    }
}


$count=0;
$sql= "
SELECT COUNT(*) as totlal_appoyentment
FROM appointment_records
WHERE DoctorID=402;

";

$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $count=$row["totlal_appoyentment"];
        echo $row["totlal_appoyentment"]."<br>";
    }
}

?>