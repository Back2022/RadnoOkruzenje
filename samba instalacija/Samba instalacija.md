Instalacija Samba na Ubuntu 20
====
https://kifarunix.com/install-and-configure-samba-file-server-on-ubuntu-20-04/

```bash
sudo apt update
sudo apt install samba smbclient cifs-utils
sudo nano /etc/samba/smb.conf
sudo testparm
```

***/etc/samba/smb.conf***

```apacheconf
[global]
	log file = /var/log/samba/log.%m
	logging = file
	map to guest = Bad User
	max log size = 1000
	netbios name = XXXX
	obey pam restrictions = Yes
	pam password change = Yes
	panic action = /usr/share/samba/panic-action %d
	passwd chat = *Enter\snew\s*\spassword:* %n\n *Retype\snew\s*\spassword:* %n\n *password\supdated\ssuccessfully* .
	passwd program = /usr/bin/passwd %u
	server role = standalone server
	server string = %h server (Samba, Ubuntu)
	unix password sync = Yes
	usershare allow guests = Yes
	# DODANO
	workgroup = 123
	force group = php
	force user = php
    ###	
	idmap config * : backend = tdb




[Public]
	comment = Public share
	guest ok = Yes
	path = /home/php/Public
	read only = No
```

```bash
sudo systemctl restart smbd

sudo smbpasswd -a php
New SMB password:
Retype new SMB password: (123)
Added user php.
php@php-VirtualBox:~$ sudo systemctl restart smbd
```


