SELECT 
-- *
o.city
, o.addressLine1
, o.addressLine2
, o.postalCode
, COUNT(e.employeeNumber) AS brojZaposlenika -- 1 rekord 13 zaposlanika (san franc.)
, SUM(p.amount) AS paymentUkupno
 , ROUND(SUM(p.amount)/COUNT(e.employeeNumber),2) AS dolaraPoZaposlenom2
, CONCAT('$', FORMAT(SUM(p.amount)/COUNT(e.employeeNumber), 2))  AS dolaraPoZaposlenom
FROM offices o LEFT JOIN employees e ON e.officeCode=o.officeCode
LEFT JOIN customers c ON c.salesRepEmployeeNumber=e.employeeNumber
LEFT JOIN payments p ON p.customerNumber=c.customerNumber
WHERE p.amount IS NOT NULL
AND p.paymentDate BETWEEN '2004-01-01' AND '2004-12-31'
GROUP BY o.officeCode
ORDER BY dolaraPoZaposlenom DESC;

SELECT 

*
/*
o.city
, o.addressLine1
, o.addressLine2
, o.postalCode
, COUNT(e.employeeNumber) AS brojZaposlenika -- 1 rekord 13 zaposlanika (san franc.)
, SUM(p.amount) AS paymentUkupno
 , ROUND(SUM(p.amount)/COUNT(e.employeeNumber),2) AS dolaraPoZaposlenom2
, CONCAT('$', FORMAT(SUM(p.amount)/COUNT(e.employeeNumber), 2))  AS dolaraPoZaposlenom

*/

FROM payments p RIGHT JOIN customers c ON p.customerNumber=c.customerNumber
RIGHT JOIN employees e ON e.employeeNumber=c.salesRepEmployeeNumber
RIGHT JOIN offices o   ON e.officeCode=o.officeCode

-- WHERE p.amount IS NOT NULL
-- AND p.paymentDate BETWEEN '2004-01-01' AND '2004-12-31'
-- GROUP BY o.officeCode
-- ORDER BY dolaraPoZaposlenom DESC
;

SELECT 

*
/*
o.city
, o.addressLine1
, o.addressLine2
, o.postalCode
, COUNT(e.employeeNumber) AS brojZaposlenika -- 1 rekord 13 zaposlanika (san franc.)
, SUM(p.amount) AS paymentUkupno
 , ROUND(SUM(p.amount)/COUNT(e.employeeNumber),2) AS dolaraPoZaposlenom2
, CONCAT('$', FORMAT(SUM(p.amount)/COUNT(e.employeeNumber), 2))  AS dolaraPoZaposlenom

*/

FROM payments p LEFT JOIN customers c ON p.customerNumber=c.customerNumber
LEFT JOIN employees e ON e.employeeNumber=c.salesRepEmployeeNumber
LEFT JOIN offices o   ON e.officeCode=o.officeCode

-- WHERE p.amount IS NOT NULL
-- AND p.paymentDate BETWEEN '2004-01-01' AND '2004-12-31'
-- GROUP BY o.officeCode
-- ORDER BY dolaraPoZaposlenom DESC
;