-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for classicmodels
CREATE DATABASE IF NOT EXISTS `classicmodels` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `classicmodels`;

-- Dumping structure for procedure classicmodels.dajNajskupljeProizvode
DELIMITER //
CREATE PROCEDURE `dajNajskupljeProizvode`(
	IN `brojProizvoda` INT
)
    COMMENT 'Unesi koliko prozvoda zeliš?'
BEGIN
SELECT * FROM products 
ORDER BY products.MSRP DESC
LIMIT brojProizvoda;
END//
DELIMITER ;

-- Dumping structure for procedure classicmodels.drzaveUredi
DELIMITER //
CREATE PROCEDURE `drzaveUredi`(
	IN `zemlja` VARCHAR(50)
)
    COMMENT 'Unesi zemlju npr USA'
BEGIN
SELECT 
*
FROM
offices o
-- WHERE o.country LIKE 'USA';
WHERE o.country LIKE zemlja;
END//
DELIMITER ;

-- Dumping structure for procedure classicmodels.GetAllProducts
DELIMITER //
CREATE PROCEDURE `GetAllProducts`()
BEGIN
    SELECT *  FROM products;
END//
DELIMITER ;

-- Dumping structure for procedure classicmodels.ubaciUTest
DELIMITER //
CREATE PROCEDURE `ubaciUTest`(
	IN `brojRedova` INT
)
BEGIN
WHILE brojRedova > 0 DO
INSERT INTO `classicmodels`.`test` (`ime`, `prezime`) 
VALUES (
GenerateLicensePlate()  -- funkcija koja generira random 8 chAR
,`randomCustomer`()     -- funkcije koja dohvaca jednog customera po rand orderu
);
SET brojRedova = brojRedova-1;
END WHILE;
END//
DELIMITER ;

-- Dumping structure for function classicmodels.GenerateLicensePlate
DELIMITER //
CREATE FUNCTION `GenerateLicensePlate`() RETURNS varchar(8) CHARSET latin1
BEGIN
    DECLARE plate VARCHAR(8) DEFAULT "";

    SELECT concat(substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1),
       substring('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand() * 36 + 1, 1)
    ) into @newplate;

    SET plate = @newplate;


    RETURN plate;
    END//
DELIMITER ;

-- Dumping structure for function classicmodels.randomCustomer
DELIMITER //
CREATE FUNCTION `randomCustomer`() RETURNS varchar(100) CHARSET latin1
BEGIN
SELECT customers.contactLastName FROM customers ORDER BY RAND() LIMIT 1 INTO @randCust;
RETURN @randCust;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
