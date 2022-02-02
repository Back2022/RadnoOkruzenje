<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classicmodels";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`) "
            . " "
            . "VALUES (:line, :desc)");
    $line='Boats';
    $desc='Ovo su mali brodići šareni za turiste od gipsa po 100E';

    $stmt->bindParam(':line', $line);
    $stmt->bindParam(':desc', $desc);
    $stmt->execute();

    // insert another row
    $line='Boats2';
    $desc='Ovo su mali brodići šareni za turiste od gipsa po 100E';
    $stmt->execute();

    // insert another row
    $line='Boats3';
    $desc='Ovo su mali brodići šareni za turiste od gipsa po 100E';
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;