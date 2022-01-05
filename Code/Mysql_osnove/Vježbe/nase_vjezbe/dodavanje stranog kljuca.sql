ALTER TABLE `filmovi`
ADD KEY `fk_zanr` (`sifraZanra`),
  ADD CONSTRAINT `fk_zanr` 
  FOREIGN KEY (`sifraZanra`) 
  REFERENCES `zanr` (`sifraZanra`) ON UPDATE CASCADE;