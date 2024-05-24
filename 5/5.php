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
} else {
     echo "Успех";
} 

$sql1 = "CREATE TABLE department(
    id_department INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(30)
    )";

if ($conn->query($sql1) === TRUE) {
    echo "+";
  } else {
    echo $conn->error;
}


$sql2 = "CREATE TABLE users(
    id_users INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(30),
    id_department INT,
    salary INT,
    FOREIGN KEY (id_department) REFERENCES department (id_department)
    )";


if ($conn->query($sql2) === TRUE) {
    echo "+";
  } else {
    echo  $conn->error;
  }


$sql3 = "INSERT INTO department (department_name)
  VALUES ('Backend'), ('DevOps'), ('Android'), ('IOS')";
  
if ($conn->query($sql3) === TRUE) {
      echo "+";
    } else {
      echo $conn->error;
    }


$sql4 = "INSERT INTO users (surname, id_department, salary)
VALUES ('Алекссев', 3, 50000),('Петрухин', 3, 60000),('Есенин', 2, 70000),
('Маяковский', 1, 80000), ('Нортон', 4, 90000), ('Антропов', 1, 100000),
('Андреев', 4, 110000), ('Силантьев', 1, 120000)";

if ($conn->query($sql4) === TRUE) {
    echo "+";
  } else {
    echo $conn->error;
  }




?>



