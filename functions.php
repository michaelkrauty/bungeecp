<?php

function startServer(){
  if(!screenOnline()){
    shell_exec("cd /home/minecraft/testbungee/ && screen -dmS testbungee java -jar BungeeCord.jar");
  }
}

function stopServer(){
  if(screenOnline()){
    shell_exec("screen -x testbungee -p 0 -X stuff \"`printf \"end\r\"`\";");
  }
}

function screenOnline(){
  $out = shell_exec("screen -list");
  return strpos($out, "testbungee");
}

?>
