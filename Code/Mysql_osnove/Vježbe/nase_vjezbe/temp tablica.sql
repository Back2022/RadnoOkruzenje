 -- Trazimo dvostruke vrijednosti u tablici
 
 -- Kreiramo privremenu temp tablicu s jedinstvenim prezimenima
 CREATE TEMPORARY TABLE temp1 AS ( SELECT DISTINCT lastName FROM employees);
 
 
 -- Selektiramo ona prezimena koji ima više od 1
  SELECT lastName, count(lastName) as broj FROM employees GROUP BY lastName HAVING broj>1;