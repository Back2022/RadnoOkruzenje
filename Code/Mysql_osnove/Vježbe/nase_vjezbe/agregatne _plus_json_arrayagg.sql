SELECT
    contactLastname,
    GROUP_CONCAT(contactFirstname SEPARATOR ' + ') AS imenaGrupna,
    count(contactFirstname) AS ukupnoGrupa
   , JSON_ARRAYAGG(contactFirstname) AS JsonArr
   , JSON_OBJECTAGG(contactFirstname,'')  AS JsonObj
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