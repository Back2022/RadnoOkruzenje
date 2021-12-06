Radno okruzenje
====
## Radno okruženje - 1. seminar backend


1.Zahtjevi
====

-XAMPP (https://www.apachefriends.org/index.html)

-Netbeans (https://netbeans.org/)

-HeidiSQL (http://www.heidisql.com/)

-Git (https://git-scm.com/downloads)

-Composer (https://getcomposer.org/)

-VS Code (https://code.visualstudio.com/download)


2.Instalacija Sambe:
====
https://kifarunix.com/install-and-configure-samba-file-server-on-ubuntu-20-04/


3.Instalacija Apache:
====
 
https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04

![Apache instalacija](apache%20instalacija/Apache%20instalacija.md)


4.Instalacija PHP
====
```bash
sudo apt install php libapache2-mod-php php-mysql
```

restart apachea
```bash
sudo service apache2 restart
```

5.Instalacija Mysql
====

```bash
sudo apt install mysql-server
```

dodati bind 0.0.0.0
```bash
sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf
```

Spojiti se i dodati
```mysql
mysql> CREATE USER 'admin'@'%' IDENTIFIED BY '123';
Query OK, 0 rows affected (0,04 sec)

mysql> GRANT ALL PRIVILEGES ON * . * TO 'admin'@'%';
Query OK, 0 rows affected (0,02 sec)

mysql> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0,01 sec)

EDITIRAJ:
sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf
#za omogućavanje remote connection
bind-address            =0.0.0.0
```


4.Instalacija VirtualBox Ubuntu:
====

![instalacija](screenshoti/1.PNG)
![instalacija](screenshoti/2.PNG)

![instalacija](screenshoti/3.PNG)
![instalacija](screenshoti/4.PNG)
![instalacija](screenshoti/5.PNG)
![instalacija](screenshoti/6.PNG)
![instalacija](screenshoti/8.PNG)

### DOdajemo share folder ***/var/www/ParcijalniIspit ***
![instalacija](screenshoti/9.PNG)

![instalacija](screenshoti/10.PNG)
![instalacija](screenshoti/11.PNG)
![instalacija](screenshoti/12.PNG)
![instalacija](screenshoti/13.PNG)


