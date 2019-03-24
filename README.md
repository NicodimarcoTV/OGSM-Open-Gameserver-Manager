# OGSM Open-GameServer-Manager
This is a web Interface to manage your LGSM Servers

LinuxGSM: https://github.com/GameServerManagers/LinuxGSM

Installing dependencies

```
sudo apt-get install git php7.2 tmux curl python jq apache2 nano
```
Downloading The repository

```
sudo cd /var/www/html
sudo git clone https://github.com/NicodimarcoTV/OGSM.git
sudo cd /var/www/html/OGSM/
sudo mkdir Servers
```
Adding permissions

```
sudo chown www-data:www-data /var/www/html/*
sudo chown www-data:www-data /var/www/html/OGSM/*

```
Type ``` sudo visudo ``` and insert this line after ``` %sudo   ALL=(ALL:ALL) ALL ```

```
www-data ALL=(ALL) NOPASSWD: ALL
www-data ALL=(ALL) NOPASSWD: /sbin/poweroff, /sbin/reboot, /sbin/shutdown
```

Type ``` sudo nano /etc/apache2/sites-available/000-default.conf ``` and Edit ``` DocumentRoot /var/www/html ``` to ``` DocumentRoot /var/www/html/OGSM ```

