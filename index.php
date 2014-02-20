<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Michael Krautkramer">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
  <title>BungeeCP</title>
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="webroot/css/index.css" rel="stylesheet">
</head>
<body role='document'> <body role='document'>
  <?php include_once "functions.php"; ?>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <div class='page-header'>
        <center>
          <div id="buttons">
            <?php
              if(count($_POST) > 0 && isset($_POST['start'])) {
                startServer();
              }
              if(count($_POST) > 0 && isset($_POST['stop'])) {
                stopServer();
              }
              if(count($_POST) > 0 && isset($_POST['restart'])) {
                restartServer();
              }
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <button name="start" type="submit" class='btn btn-lg btn-success' <?php if(!serverOnline()){echo "disabled='disabled'";}?>>Start</button>
              <button name="stop" type="submit" class='btn btn-lg btn-danger' <?php if(serverOnline()){echo "disabled='disabled'";}?>>Stop</button>
              <button name="restart" type="submit" class='btn btn-lg btn-warning' <?php if(serverOnline()){echo "disabled='disabled'";}?>>Restart</button>
            </form>
          </div>
        </center>
        <br><br><br>
        <h3>debug:</h3>
        <p><?php if screenOnline(){echo"screen is online";}else{echo"screen is offline";}?></p>
        <p><?php if serverOnline(){echo"server is online";}else{echo"screen is offline";}?></p>
        <p></p>
      </div>
    </div>
  </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="./bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./bootstrap/assets/js/docs.min.js"></script>
<script src="./webroot/js/Chart.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
