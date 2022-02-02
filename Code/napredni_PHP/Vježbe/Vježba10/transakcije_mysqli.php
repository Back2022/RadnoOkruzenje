
<?php
include("../../dbconn.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mysql connection</title>
        <style>
            .greska{
                color: #ff0;
                background-color: #000;
                font-weight: bold
            }
        </style>
    </head>

    <?php

    function begin() {
        global $conn, $query;
        $query = "BEGIN";
        $result = mysqli_query($conn, $query);
    }

    function commit() {
        global $conn, $query;
        $query = "COMMIT";
        $result = mysqli_query($conn, $query);
    }

    function rollback() {
        global $conn, $query;
        $query = "ROLLBACK";
        $result = mysqli_query($conn, $query);
    }

// Pokrecemo transakciju
    begin();

    $error_num = 0;
    $result = false;

    try {
        /*  $query = "INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
          $query .= " VALUES ('99999', 'Zadara', 13)";

         */
        $query = "INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`)";
        $query .= " VALUES ('Boats', 'Ovo su mali brodići šareni za turiste od gipsa po 100E')";
        $result = mysqli_query($conn, $query);
        
    } catch (mysqli_sql_exception $exc) {
        echo "NEPOZNATA TABLICA, provjeri ime u bazi podataka "
        . $exc->getTraceAsString() . "<span class='greska'>"
        . $exc->getMessage() . " </span>";
        $result = false;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }


    if (!$result)
        echo $error_num++;

    try {
        $query = "INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`)";
        $query .= " VALUES ('Boats2', 'Ovo su mali brodići šareni za turiste od gipsa po 100E')";
        $result = mysqli_query($conn, $query);
    } catch (mysqli_sql_exception $exc) {
        echo "NEPOZNATA TABLICA, provjeri ime u bazi podataka "
        . $exc->getTraceAsString() . "<span class='greska'>"
        . $exc->getMessage() . " </span>";
        $result = false;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

    if (!$result)
        echo $error_num++;

    try {
        $query = "INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`)";
        $query .= " VALUES ('Boats3', 'Ovo su mali brodići šareni za turiste od gipsa po 100E')";
        $result = mysqli_query($conn, $query);
    } catch (mysqli_sql_exception $exc) {
        echo "NEPOZNATA TABLICA, provjeri ime u bazi podataka "
        . $exc->getTraceAsString() . "<span class='greska'>"
        . $exc->getMessage() . " </span>";
        $result = false;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }

    
        $query = "DELETE FROM `classicmodels`.`productlines` WHERE  `productLine`='Boats5'";
        $result = mysqli_query($conn, $query);
    if (!$result)
        echo $error_num++;

    if ($error_num <= 0) {
        commit();
        echo 'uspjesno commit';
    } else {
        echo 'Greška! negdje u querije, broj grešaka:' . $error_num;
        rollback();
    }
    
    // primjer pomocu mysqli poziv na proceduru
    $query="CALL `dajNajskupljeProizvode`('2')";
    $result = mysqli_query($conn, $query);
    var_dump($result->fetch_assoc());
    ?>

</body>
</html>