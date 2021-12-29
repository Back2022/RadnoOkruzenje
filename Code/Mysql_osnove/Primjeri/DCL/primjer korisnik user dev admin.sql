-- običan user, samo čitanje
CREATE USER 'videoteka_korisnik'@'localhost' IDENTIFIED BY '123';
GRANT USAGE ON *.* TO 'videoteka_korisnik'@'localhost';
GRANT SELECT, SHOW VIEW  ON `videoteka`.* TO 'videoteka_korisnik'@'localhost';
FLUSH PRIVILEGES;

-- dev, izmjene
CREATE USER 'videoteka_dev'@'localhost' IDENTIFIED BY '123';
GRANT USAGE ON *.* TO 'videoteka_dev'@'localhost';
GRANT ALL PRIVILEGES ON `videoteka`.* TO 'videoteka_dev'@'localhost';
FLUSH PRIVILEGES;

-- admin, kompletan pristup ali samo bazi videoteka
CREATE USER 'videoteka_admin'@'localhost' IDENTIFIED BY '123';
GRANT USAGE ON *.* TO 'videoteka_admin'@'localhost';
GRANT ALL PRIVILEGES ON `videoteka`.* TO 'videoteka_admin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;