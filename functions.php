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

function serverOnline(){
  include_once 'status.class.php';
  $status = new MinecraftServerStatus();
  $response = $status->getStatus("192.187.118.205", 25565);
  if($response){
    return true;
  }else{
    return false;
  }
}

?>