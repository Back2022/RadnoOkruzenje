
<?php
include("../../dbconn.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Prepared statement Mysqli connection</title>
        <style>
            .greska{
                color: #ff0;
                background-color: #000;
                font-weight: bold
            }
        </style>
    </head>

    <?php
// non prepared
    $query = "INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`)";
    $query .= " VALUES('Boats', 'Ovo su mali brodići šareni za turiste od gipsa po 100E')";
  //  $result = mysqli_query($conn, $query);

    //prepared stmt

    $stmt = $mysqli->prepare("INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`) "
            . " "
            . "VALUES (?, ?)");

    $line='Boats';
    $desc='Ovo su mali brodići šareni za turiste od gipsa po 100E';
    $stmt->bind_param("ss", $line, $desc); // idsb -> integer, double,string, blob
    $stmt->execute();
    
    ?>
&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
</body>
</html>