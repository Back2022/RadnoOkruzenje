/*
Iz tablica 'customers' i 'orders' dohvatite sljedeće podatke:
customerNumber
customerName
orderNumber
Status
Morate dohvatiti sve kupce neovisno da li su nešto naručili.
*/

SELECT
c.customerNumber
, c.customerName
, o.orderNumber
, o.`status`
FROM customers c LEFT JOIN orders o
ON o.customerNumber=c.customerNumber;

/*
Iz tablica 'customers' i 'orders' dohvatite sljedeće podatke:
customerNumber
customerName
orderNumber
Status
Morate dohvatiti sve kupce neovisno da li su nešto naručili.
DOHVATI SAMO ONE KOJI NISU NIŠTA NARUCILI 
*/

SELECT
c.customerNumber
, c.customerName
, o.orderNumber
, o.`status`
FROM customers c LEFT JOIN orders o
ON o.customerNumber=c.customerNumber
-- WHERE o.`status` LIKE 'Ca%'
-- WHERE o.`status` IS NULL
;