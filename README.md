# OGSM Open-GameServer-Manager
This is a web Interface to manage your OGSM Servers

Keep in Mind that this Project is still in Development

LinuxGSM: https://github.com/GameServerManagers/LinuxGSM

Installing dependencies

```
sudo apt-get install git tmux curl python jq apache2 nano zip unzip php7.4 php7.4-zip php7.4-mbstring openssl
```
Downloading The repository

```
cd /var/www/html
sudo git clone https://github.com/NicodimarcoTV/OGSM-Open-Gameserver-Manager.git
sudo mv OGSM-Open-Gameserver-Manager/ OGSM
cd /var/www/html/OGSM/
sudo mkdir Servers
sudo service apache2 restart
```
Adding permissions

```
sudo chown -R www-data:www-data /var/www/html/*
```
Type ``` sudo visudo ``` and insert the following lines after ``` %sudo   ALL=(ALL:ALL) ALL ```

```
www-data ALL=(ALL) NOPASSWD: ALL
www-data ALL=(ALL) NOPASSWD: /sbin/poweroff, /sbin/reboot, /sbin/shutdown
```

Type ``` sudo nano /etc/apache2/sites-available/000-default.conf ``` and Edit ``` DocumentRoot /var/www/html ``` to ``` DocumentRoot /var/www/html/OGSM ```

