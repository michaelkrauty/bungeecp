<?php

function startServer(){
  if(!screenOnline()){
    shell_exec("cd /home/minecraft/testbungee/ && screen -dmS testbungee java -jar BungeeCord.jar");
  }else{
    shell_exec("screen -x testbungee -p 0 -X stuff \"`printf \".unhold\r\"`\";");
  }
}

function stopServer(){
  shell_exec("screen -x testbungee -p 0 -X stuff \"`printf \".hold\r\"`\";");
}

function restartServer(){
  shell_exec("screen -x testbungee -p 0 -X stuff \"`printf \"end\r\"`\";");
}

function screenOnline(){
  $out = shell_exec("screen -list");
  return strpos($out, "testbungee");
}

function serverOnline(){
  include_once 'status.class.php';
  $status = new MinecraftServerStatus();
  $response = $status->getStatus("localhost", 65437);
  if($response){
    return true;
  }else{
    return false;
  }
}

?>
