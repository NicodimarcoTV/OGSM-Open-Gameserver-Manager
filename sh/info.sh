#!/bin/bash

### Config ###

. /var/www/html/OGSM/config/config.txt
serverlist="$serverlist"
logfile="$logfile"
USER="$user"
Server="$1" #Server Name
Stelle="$2" #1,2,3
type="$3" # install,start,stop,restart
function="$4" #log_count
### Functions ###

server_info(){
        IFS=","
        server_info_array=($(grep -aw "${Server}" "${serverlist}"))
        shortname="${server_info_array[0]}" # csgo
        gameservername="${server_info_array[1]}" # csgoserver
        gamename="${server_info_array[2]}" # Counter Strike: Global Offensive

	if [ $Stelle = "1" ]
	then
	   echo $shortname
	elif [ $Stelle = "2" ]
	then
	   echo $gameservername
	elif [ $Stelle = "3" ]
	then
	   echo $gamename
	else
	   echo "Keinen Passenden Namen zur Stelle $Stelle gefunden."
	fi
}

log_count(){

	if [ $(find $logfile/$gameservername/$type -type f | wc -l) -gt 30 ]
	then
	   echo "Lösche $(((e=$(find $logfile/$gameservername/$type -type f | wc -l))-30)) Logfiles"
	   cd $logfile/$gameservername/$type
	   sudo -u $USER ls -1t | tail -n +30 | xargs rm -f
	else
	   echo "Weniger als 30 Logfiles vorhanden. Aktuell sind $(find $logfile/$gameservername/$type -type f | wc -l) Logfiles vorhanden."
	fi
}

### Function Call ###

server_info

if [ "$function" = "log_count" ]
then
  log_count
fi
