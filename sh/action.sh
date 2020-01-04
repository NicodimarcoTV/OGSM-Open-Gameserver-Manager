#!/bin/bash
#Server Config

. /var/www/html/OGSM/config/config.txt

HOME="$home"
USER="$user"
commands="$@"
ACTION="$1"
SERVER="$2"
LOGFILE="$logfile"

### Functions ###

NAME=$(sudo -u $USER bash /var/www/html/OGSM/sh/info.sh $SERVER 3 $ACTION)
echo $NAME
#NAME=Minecraft

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
   echo $NAME
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
   sleep 5 ; sudo reboot &
}

shutdown_script() {
   sleep 5 ; sudo shutdown &
}

check_log_count() {

sudo -u $USER bash /var/www/html/OGSM/sh/info.sh $SERVER 2 $ACTION "log_count"

}

#Select Action

if [ "$ACTION" = "install" ]
then
    mkdir $LOGFILE/$SERVER
    mkdir $LOGFILE/$SERVER/install
    install_script >> $LOGFILE/$SERVER/install/INSTALL.$(date "+%d-%m-%Y|%H:%M").log
    check_log_count
elif [ "$ACTION" = "start" ]
then
    mkdir $LOGFILE/$SERVER/start/
    start_script >> $LOGFILE/$SERVER/start/START.$(date "+%d-%m-%Y|%H:%M").log
    check_log_count
elif [ "$ACTION" = "stop" ]
then
    mkdir $LOGFILE/$SERVER/stop/
    stop_script >> $LOGFILE/$SERVER/stop/STOP.$(date "+%d-%m-%Y|%H:%M").log
    check_log_count
elif [ "$ACTION" = "restart" ]
then
    mkdir $LOGFILE/$SERVER/restart/
    restart_script >> $LOGFILE/$SERVER/restart/RESTART.$(date "+%d-%m-%Y|%H:%M").log
    check_log_count
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
