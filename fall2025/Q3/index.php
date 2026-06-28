<?php
$conn=new mysqli("127.0.0.1","root","","campus_library",3306);

$query1="
SELECT Status ,COUNT(BookTitle) as book_count
FROM book_loans
GROUP BY Status
HAVING book_count>1
";
$store=$conn->query($query1);

while($show=$store->fetch_assoc()){
    echo $show["Status"]."---".$show["book_count"]."<br>";
}

$query2="
UPDATE book_loans

SET Status='Grace Period', PenaltyFee=0 

WHERE Status='Overdue' AND DaysOverdue<7
";
$store=$conn->query($query2);


$query3="
UPDATE book_loans
SET PenaltyFee=PenaltyFee+(PenaltyFee*0.1)
WHERE PenaltyFee>20 AND PenaltyFee+(PenaltyFee*0.1)<=50;
";
$store=$conn->query($query3);

$query4="
SELECT BookTitle, SUM(PenaltyFee) as fees 
FROM book_loans
GROUP BY BookTitle
ORDER BY fees DESC
";
$store=$conn->query($query4);
while($show=$store->fetch_assoc()){
    echo $show["BookTitle"]."---".$show["fees"]."<br>";
}

echo "hello world";
?>