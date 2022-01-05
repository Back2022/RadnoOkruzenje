-- Koliko je prodano proizvoda svake vrste

SELECT 
productCode
, SUM(quantityOrdered) 
FROM orderdetails
GROUP BY productCode;

-- za svaki proizvod ukupnp broj narudzbi
SELECT 
orderdetails.productCode
, products.productName
-- , COUNT(orderdetails.orderNumber) AS kolicinaP -- ukupan broj narudzbi po proizvodu
, SUM(orderdetails.quantityOrdered) AS zbrojP -- ukupan broj proizvoda
, SUM(orderdetails.quantityOrdered)/COUNT(orderdetails.orderNumber) AS prosjekP -- prosjecan broj proizvoda po narudzbi
, AVG(orderdetails.quantityOrdered) AS avgP -- prosjecan broj proizvoda po narudzbi
FROM orderdetails LEFT JOIN products ON orderdetails.productCode=products.productCode
GROUP BY productCode;

-- JOIN
SELECT 
DISTINCT orderdetails.productCode,
products.productName
FROM orderdetails RIGHT JOIN products ON orderdetails.productCode=products.productCode;