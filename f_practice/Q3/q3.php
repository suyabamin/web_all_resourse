<?php

$conn = new mysqli("127.0.0.1", "root", "", "uiutech_final", 3306);

function runQuery(mysqli $conn, string $sql)
{
    $result = $conn->query($sql);

    if ($result === false) {
        die("Query failed: " . $conn->error);
    }

    return $result;
}

$query1 = "
SELECT PerformanceRating, COUNT(EmployeeID) AS totalemployee
FROM employee_final
GROUP BY PerformanceRating
";

$store = runQuery($conn, $query1);

echo "<h3>Employees by Performance Rating</h3>";
while ($show = $store->fetch_assoc()) {
    echo $show['PerformanceRating'] . " ------- " . $show['totalemployee'] . "<br>";
}

$query2 = "
UPDATE employee_final
SET PerformanceRating = 'C'
WHERE Salary < 40000 AND PerformanceRating != 'D'
";
runQuery($conn, $query2);
echo "<br>Performance rating updated successfully.<br>";

$query3 = "
UPDATE employee_final
SET Salary = Salary + 5000
WHERE Salary > 50000 AND Salary + 5000 <= 60000
";
runQuery($conn, $query3);
echo "Salary updated successfully.<br>";

$query4 = "
SELECT DepartmentName, COUNT(EmployeeID) AS total_employee
FROM employee_final
GROUP BY DepartmentName
ORDER BY total_employee DESC
";

$store = runQuery($conn, $query4);


while ($show = $store->fetch_assoc()) {
    echo $show['DepartmentName'] . " ------- " . $show['total_employee'] . "<br>";
}

$conn->close();
?>
