<?php

/*
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'TUTORIALS';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }
    echo 'Connected successfully<br>';
    
    
    $sql = 'SELECT name FROM tutorials_inf';
    $result = mysqli_query($conn, $sql);
    */

   include '../../dbconn.php';
   $conn=$mysqli;
   $sql="SELECT * FROM customers WHERE customerName LIKE 'D%'";
   $result = $mysqli->query($sql);
    
   
   echo "Ukupno ima ".mysqli_num_rows($result)." redova<br>";

    if (mysqli_num_rows($result) > 0) {
     //   while($row = mysqli_fetch_assoc($result)) {  //proceduralno
         while($row = $result->fetch_assoc()) {          // objektno 
            echo "Name: " . $row["customerName"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);