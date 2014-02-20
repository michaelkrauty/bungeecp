<?php

function startServer(){
  if(!screenOnline()){
    shell_exec("rm -f /var/craftsrv/servers/x0009/proxy.log*");
    shell_exec("cd /var/craftsrv/servers/x0009/ && screen -dmS sambish20_bungee java -Xmx256M -jar BungeeCord.jar");
  }
}

function stopServer(){
  if(screenOnline()){
    shell_exec("screen -x sambish20_bungee -p 0 -X stuff \"`printf \"end\r\"`\";");
  }
}

function screenOnline(){
  $out = shell_exec("screen -list");
  return strpos($out, "sambish20_bungee");
}

?>
