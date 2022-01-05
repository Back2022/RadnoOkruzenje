SELECT 
o.orderNumber
, o.`status`
, od.priceEach AS 'Prva cijena koja se pojavila'
, MIN(od.priceEach) AS 'min cijena koja se pojavila'
, MAX(od.priceEach) AS 'max cijena koja se pojavila'
, SUM(od.priceEach) AS 'Ukupna cijena'
FROM
orders o INNER JOIN orderdetails od ON o.orderNumber = od.orderNumber
GROUP BY o.orderNumber;