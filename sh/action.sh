#!/bin/bash
#Server Config

. /var/www/html/OGSM/config/config.txt
#echo "Benutzer=$user" >&2
#echo "Home Verzeichnis=$home" >&2

HOME="$home"
USER="$user"
commands="$@"
ACTION="$1"
SERVER="$2"
NAME="$3"


#Functions

echo $NAME

install_script() {
 if [ -e $HOME/$SERVER/$SERVER ]
 then
   echo " Server ist Bereits installiert !!!"
 else
   mkdir $HOME/$SERVER
   cd $HOME/$SERVER
   echo "$SERVER" >&2
   wget -O linuxgsm.sh "https://linuxgsm.sh"
   chmod +x linuxgsm.sh
   chown $USER:$USER $HOME/$SERVER
   sudo -u $USER bash linuxgsm.sh $SERVER
   sudo -u $USER bash $SERVER ai
   cd $HOME/
   sudo -u $USER sed -i "/<!-- Server Liste -->/a <li><a class=horizontalemenue href=php/gui.php?server=$SERVER methode=get>$NAME</a></li>" "../config/servers.txt"
 fi
}

start_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER st
}

stop_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER sp
}

restart_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER r
}

update_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER u
   sudo -u $USER bash $SERVER ul
}

monitor_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER m
}

details_script() {
   cd $HOME/$SERVER
   sudo -u $USER bash $SERVER dt
}

deinstallieren_script() {
   if [ -d $HOME/$SERVER/ ]
   then
     cd $HOME/$SERVER
     sudo -u $USER bash $SERVER sp
     sudo -u $USER rm -r $HOME/$SERVER/
     cd $HOME
     sudo -u $USER sed -i "/$SERVER/d" "../config/servers.txt"
   else
     echo " Server ist nicht Installiert !!!"
   fi
}

reboot_script() {
   sleep 10 ; sudo reboot &
}

shutdown_script() {
   sleep 10 ; sudo shutdown &
}



#Select Action

if [ "$ACTION" = "install" ]
then
    install_script
elif [ "$ACTION" = "start" ]
then
    start_script
elif [ "$ACTION" = "stop" ]
then
    stop_script
elif [ "$ACTION" = "restart" ]
then
    restart_script
elif [ "$ACTION" = "status" ]
then
    update_script
elif [ "$ACTION" = "monitor" ]
then
    monitor_script
elif [ "$ACTION" = "details" ]
then
    details_script
elif [ "$ACTION" = "deinstall" ]
then
    deinstallieren_script
elif [ "$ACTION" = "reboot" ]
then
    reboot_script
elif [ "$ACTION" = "shutdown" ]
then
    shutdown_script

else [ "$ACTION" = "" ]
    echo "Nicht Gefunden"
fi
