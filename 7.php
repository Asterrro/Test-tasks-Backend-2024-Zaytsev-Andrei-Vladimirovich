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


$sql = "SELECT surname, salary
         FROM  users JOIN department USING(id_department)
         WHERE surname LIKE ('А%') AND salary >= 100000";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo $row["surname"]. "  " . $row["salary"].  "<br>";
    }
}

?>
