<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "classicmodels";

// In this example we are using MySQL but this applies to any database that has support for transactions
$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);    

// Make sure that PDO will throw an exception in case of error to make error handling easier
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    // From this point and until the transaction is being committed every change to the database can be reverted
    $db->beginTransaction();    

    // Insert the metadata of the order into the database
    $preparedStatement = $db->prepare("INSERT INTO `classicmodels`.`productlines` (`productLine`, `textDescription`) "
            . " "
            . "VALUES (:line, :desc)");
    
    $line="brodici";
    $desc="opisici";
    
    $preparedStatement->execute([
        'line' => $line,
        'desc' => $desc,
    ]);
    
    // Get the generated `order_id`
    $orderId = $db->lastInsertId();

    // Construct the query for inserting the products of the order
    $insertProductsQuery = 'INSERT INTO `orders_products` (`order_id`, `product_id`, `quantity`) VALUES';
    
    $products=[11,22,33,44,55,66,77,88,99];
    
    $count = 0;
    foreach ( $products as $productId => $quantity ) {
        $insertProductsQuery .= ' (:order_id' . $count . ', :product_id' . $count . ', :quantity' . $count . '),';
        
        $insertProductsParams['order_id' . $count] = $orderId;
        $insertProductsParams['product_id' . $count] = $productId;
        $insertProductsParams['quantity' . $count] = $quantity;
        
        ++$count;
        ++$orderId;
    }
    //var_dump($insertProductsQuery);
  /**
   *  SKINI TRAILLING COMMA, zarez koji smo ponavljali u petlji
   */
    $insertProductsQuery=substr($insertProductsQuery, 0, -1);
    var_dump($insertProductsQuery);
  //  print_r($insertProductsParams);    
    
    
    // Insert the products included in the order into the database
    $preparedStatement = $db->prepare($insertProductsQuery);
    $preparedStatement->execute($insertProductsParams);
    
    // Make the changes to the database permanent
    $db->commit();
}
catch ( PDOException $e ) { 
    // Failed to insert the order into the database so we rollback any changes
    $db->rollback();
    throw $e;
}

/**
 * 
 * CREATE TABLE `orders_products` (
	`order_id` INT(11) NOT NULL AUTO_INCREMENT,
	`product_id` INT(11) NULL DEFAULT NULL,
	`quantity` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`order_id`) USING BTREE
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=31
;

 */