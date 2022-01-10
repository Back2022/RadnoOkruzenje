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

/*
        INDEX `sifraCjenika` (`sifraCjenika`) USING BTREE,
	INDEX `clanskiBroj` (`clanskiBroj`) USING BTREE,
	INDEX `sifraFilma` (`sifraFilma`) USING BTREE,
	CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`sifraCjenika`) REFERENCES `videoteka`.`cjenik` (`sifraCjenika`) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT `posudba_ibfk_2` FOREIGN KEY (`clanskiBroj`) REFERENCES `videoteka`.`clanovi` (`clanskiBroj`) ON UPDATE CASCADE ON DELETE RESTRICT,
	CONSTRAINT `posudba_ibfk_3` FOREIGN KEY (`sifraFilma`) REFERENCES `videoteka`.`filmovi` (`sifraFilma`) ON UPDATE CASCADE ON DELETE RESTRICT
*/