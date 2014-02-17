<?php

function startServer(){
  shell_exec("screen -x sambish20bungee -p 0 -X stuff \"`printf \".unhold\r\"`\";");
}

function stopServer(){
  shell_exec("screen -x sambish20bungee -p 0 -X stuff \"`printf \".hold\r\"`\";");
}

function restartServer(){
  shell_exec("screen -x sambish20bungee -p 0 -X stuff \"`printf \"end\r\"`\";");
}


?>