#!/bin/bash

### Config ###

. /var/www/html/OGSM/config/config.txt
serverlist="$serverlist"
Server="$1"
Stelle="$2"

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
	   echo "ERROR"
	fi
}


### Function Call ###

server_info
