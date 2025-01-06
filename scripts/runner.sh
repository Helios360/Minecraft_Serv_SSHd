#!/bin/bash

#This file does not work yet !!!

USERNAME="Your_username(ADMIN)"
HOST="Input the ip of the machine that runs the mc serv"
SCRIPT="cd [PATH_TO_THE_SERV] && run.bat"
PASSWORD="Your_password"
serv="The name of the serv folder"



sshpass -p $PASSWORD ssh -T $USERNAME@$HOST << EOF
cd c:[path to serv folder]"$serv"
run.bat
EOF
