<?php

$conn = new mysqli("127.0.0.1", "root", "", "sales_data", 3306);


$quer1="SELECT CategoryName, SUM(Revenue) as total_revinue
FROM sales_data
GROUP BY CategoryName;
";
$store=$conn->query($quer1);
while($show=$store->fetch_assoc()){
    echo $show['CategoryName']." ".$show['total_revinue']."<br>";
}


$quer2="
UPDATE sales_data
SET CategoryName='Low Performing'
WHERE Revenue<40000;
";
$store=$conn->query($quer2);
echo "updaed low catagory";

$quer3="
UPDATE sales_data
SET Revenue=Revenue+(Revenue*0.1)
WHERE Revenue>70000
";
$store=$conn->query($quer3);
echo "updaed low catagory";


$quer4="
    SELECT CategoryName, COUNT(CategoryID) AS total_device
FROM sales_data
GROUP BY CategoryName
";

$store=$conn->query($quer4);

while($show=$store->fetch_assoc()){
    echo $show['CategoryName']." ".$show['total_device']."<br>";
}


?>