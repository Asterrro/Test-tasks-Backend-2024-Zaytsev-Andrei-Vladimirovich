<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
#запрос для соединения к нашей базе данных
$conn = mysqli_connect($servername, $username, $password, $dbname);

#условие проверки подключения к бд.
if(!$conn){
    die("Connection Failed". mysqli_connect_error());
} 


$sql = "SELECT department_name, COUNT(*) as Emp_num, AVG(salary) as Salary
         FROM  users JOIN department USING(id_department)
         GROUP BY id_department ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo $row["department_name"]. "   " . $row["Emp_num"]. " " . $row["Salary"]. "<br>";
    }
}

?>
