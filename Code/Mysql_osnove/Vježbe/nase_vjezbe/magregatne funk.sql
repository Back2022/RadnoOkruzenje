-- pROSJECNA CIJENA SVIH PROIZVODA
SELECT 
AVG(msrp),
AVG(buyprice) 'Average Price'

FROM classicmodels.products;

-- ----------------------
-- ukupan broj narudzbi
SELECT COUNT(DISTINCT(orderNumber))  AS ukupnoNarudzbi
-- , COUNT(orderNumber) AS ukupnoNarudzbi
FROM
classicmodels.orderdetails;


--  DOhvati ime i prezime customera i spoji ih u jedno polje
SELECT
customers.contactFirstName,
customers.contactLastName
, CONCAT(TRIM(customers.contactFirstName),' ',TRIM(customers.contactLastName)) AS imePrezime
FROM customers;

-- Iz tablice 'orders' izračunajte razliku u danima između atribute 'requiredDate' I 'shippedDate'
--  te rezultat sortirajte silazno

SELECT
*
, DATEDIFF(orders.requiredDate, orders.shippedDate) AS razlikaDana
FROM orders
ORDER BY razlikaDana DESC;


