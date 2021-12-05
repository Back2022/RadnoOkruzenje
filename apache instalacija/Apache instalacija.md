
Instalacija Apache2 na Ubuntu 20
====
## 1. Dodajemo virtual host 
konfiguracijska datoteku ***ubuntu.app.conf***


>Želimo oblik  http://ubuntu.test/ParcijalniIspit/


```bash
cd /etc/apache2/sites-available/
sudo cp 000-default.conf ubuntu.app.conf
sudo nano /etc/apache2/sites-available/ubuntu.app.conf
```
***ubuntu.app.conf***
```xml
NameVirtualHost *
<VirtualHost ubuntu.test:80>
    ServerName ubuntu.test
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/html/ParcijalniIspit
    SetEnv APPLICATION_ENV "development"
    <Directory "/var/www/html/ParcijalniIspit">
        DirectoryIndex index.php
        Options Indexes 
        Require all granted
    </Directory>
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

## 2. Postavke ports.conf

```bash
cat /etc/apache2/ports.conf 
sudo nano /etc/apache2/ports.conf 
```

dodajemo portove ***80*** i ***8888***

***ports.conf***
```xml
Listen 80
Listen 8888
<IfModule ssl_module>
	Listen 443
</IfModule>

<IfModule mod_gnutls.c>
	Listen 443
</IfModule>
```
Konfiguracijsku datoteku je potrebno omogućiti naredbom ***a2ensite***
```bash
#/etc/apache2/sites-available/ubuntu.app.conf
sudo a2ensite ubuntu.app.conf 
```

Nakon virtualhost i ports postavki potrebno je ***restartirati apache servis***
```console
#reload konfiguracije bez restarta servisa
sudo systemctl reload apache2

#full restart
sudo service apache2 restart
systemctl status apache2
```
## 3. Postavljamo hosts datoteku za DNS mapiranje


> Ovo je konfiguracijski file za virtual host
```sh
sudo nano /etc/hosts

cat /etc/hosts
127.0.0.1	localhost
127.0.1.1	php-VirtualBox
127.0.0.2       ubuntu.test
```

Isprobamo:


```Shell
ping ubuntu.app
PING ubuntu.app (34.102.136.180) 56(84) bytes of data.
64 bytes from 180.136.102.34.bc.googleusercontent.com (34.102.136.180): icmp_seq=1 ttl=56 time=24.7 ms
64 bytes from 180.136.102.34.bc.googleusercontent.com (34.102.136.180): icmp_seq=2 ttl=56 time=29.6 ms
64 bytes from 180.136.102.34.bc.googleusercontent.com (34.102.136.180): icmp_seq=3 ttl=56 time=36.1 ms

```
## 4. dodajemo virtualbox u apache2 grupu

VIrtualBox user je  ***vboxsf***, Apache2 grupa je ***www-data***
sudo adduser www-data vboxsf

cd /var/www/