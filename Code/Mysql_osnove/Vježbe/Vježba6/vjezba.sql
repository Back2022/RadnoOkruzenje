SELECT * 
FROM employees;
--
SELECT 
    lastname, 
    firstname, 
    jobtitle,
    email
FROM
    employees;
--
SELECT
    contactLastname,
    GROUP_CONCAT(contactFirstname SEPARATOR ' + ') AS imenaGrupna,
    count(contactFirstname) AS ukupnoGrupa
-- JSon agregatne rade tek od verzije MariaDB 10.5.0. odnosno MYsql 5.7.22
--   , JSON_ARRAYAGG(contactFirstname) AS JsonArr, 
--    JSON_OBJECTAGG(contactFirstname)  AS JsonObj
-- JSON_ARRAYAGG()	Return result set as a single JSON array
-- JSON_OBJECTAGG()	Return result set as a single JSON object
-- GROUP_CONCAT(name SEPARATOR ' ')
FROM
    customers
GROUP BY
    `contactLastName`
HAVING ukupnoGrupa > 1
ORDER BY
    contactLastname DESC;
--
SELECT 
    lastname, 
    firstname, 
    jobtitle
FROM
    employees
WHERE
    jobtitle = 'Sales Rep';
--
SELECT 
    DISTINCT lastname
FROM
    employees
ORDER BY 
    lastname;