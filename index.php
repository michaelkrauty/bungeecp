<!DOCTYPE html>
<html lang='en'>
<head>
  <title>BungeeCP</title>
  <meta name="author" content="Michael Krautkramer">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/index.php.css" rel="stylesheet">
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role='document'> <body role='document'>
  <?php include_once "functions.php"; ?>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <center>
        <div id="buttons">
          <?php
            if(count($_POST) > 0 && isset($_POST['start'])){
              startServer();
            }
            if(count($_POST) > 0 && isset($_POST['stop'])){
              stopServer();
            }
            if(count($_POST) > 0 && isset($_POST['command'])){
              executeCommand($_POST['command']);
            }
          ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button name="start" type="submit" class='btn btn-lg btn-success'>Start</button>
            <button name="stop" type="submit" class='btn btn-lg btn-danger'>Stop</button>
          </form>
        </div>
        <br>
        <?php include_once "console.inc.php"; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input name="command" class="form-control" placeholder="Enter a command here..." type="text"/>
        </form>
      </center>
      <br><br><br>
      <h3>debug:</h3>
      <p><?php if(screenOnline()){ echo "screen is online"; }else{ echo "screen is offline"; }?></p>
      <p><?php echo shell_exec("screen -list | grep sambish20_bungee");?></p>
      <p><?php echo shell_exec("cd /var/craftsrv/servers/x0009 && pwd");?></p>
      <p><?php echo shell_exec("ls -la /var/craftsrv/servers/x0009");?></p>
      <p><?php $lol = shell_exec("screen -list | grep sambish20_bungee"); echo current(explode(".", $lol));?></p>
    </div>
  </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./bootstrap/assets/js/docs.min.js"></script>
<script src="./webroot/js/Chart.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
