ALTER TABLE `filmovi`
ADD KEY `fk_zanr` (`sifraZanra`),
  ADD CONSTRAINT `fk_zanr` FOREIGN KEY (`sifraZanra`) REFERENCES `zanr` (`sifraZanra`) ON UPDATE CASCADE;


ALTER TABLE `filmovi` 
ADD CONSTRAINT `fk_zanr` FOREIGN KEY (`sifraZanra`) REFERENCES `zanr`(`sifraZanra`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `posudba`
  ADD KEY `sifraCjenika` (`sifraCjenika`),
  ADD KEY `clanskiBroj` (`clanskiBroj`),
  ADD KEY `sifraFilma` (`sifraFilma`),
  ADD CONSTRAINT `fk_cijena` FOREIGN KEY (`sifraCjenika`) REFERENCES `cjenik` (`sifraCjenika`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_clan` FOREIGN KEY (`clanskiBroj`) REFERENCES `clanovi` (`clanskiBroj`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`sifraFilma`) REFERENCES `filmovi` (`sifraFilma`) ON UPDATE CASCADE;

ALTER TABLE `posudba`
	ADD CONSTRAINT `FK_posudba_filmovi` FOREIGN KEY (`sifraFilma`) REFERENCES `filmovi` (`sifraFilma`) ON UPDATE CASCADE ON DELETE RESTRICT;
