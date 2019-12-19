<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">

<link type="text/css" href="css/button.css" rel="stylesheet" media="screen" >
<link type="text/css" href="css/horizontalemenue.css" rel="stylesheet" media="screen" >

<link type="text/css" href="css/general.css" rel="stylesheet" media="screen" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>OGSM</title>


<link type="text/css" href="css/general.css" rel="stylesheet" media="screen" >
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
    <h1>Herzlich Willkommen</h1>
    <p><h1> beim OGSM-Open-Gameserver-Manager</h1>
</header>
<p>

<br>

<br>

<ul>
    <li><a class="active" href="index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="php/install.php"><i class="fas fa-download"></i> Installations Menü</a></li>
    <li><a href="php/gui.php"><i class="fas fa-terminal"></i> Konsole</a></li>
    <li><a href="php/config.php"><i class="fas fa-cogs"></i> Einstellungen</a></li>
    <li class="right"><a href="#"><i class="far fa-question-circle"></i> Hilfe</a></li>
    <li class="right"><a href="#"><i class="far fa-address-book"></i> Kontakt</a></li>

<?php include("servers.txt"); ?>

</ul>
<br>
<div class="row">


    <div class="column side">
        <h2>Host System Optionen</h2>


        <a class="buttongruen" onclick="reboot()">
            <i class="fas fa-redo"></i>
                Server Neustarten
        </a>
        <p>
        <a class="buttonrot" onclick="shutdown()">
            <i class="fas fa-power-off"></i>
                 Server Herunterfahren
        </a>

        <br>
    </div>


    <div class="column spacer"></div>

    <div class="column middle">
        <h1>Startseite</h1>
        <br>
        <h4><p style="text-align: center"><strong>Herzlich Willkommen</strong></p></h4>
        <p style="text-align: justify">Beim OpenGameServerManager (©OGSM) by NicodimarcoTV & CoolusaHD </p>
    </div>

</div>

<footer>
    <p></p>
    <p>©OGSM by NicodimarcoTV & CoolusaHD</p>
</footer>




<script>
function reboot() {
  var txt;
  var r = confirm("Wollen sie den Server wirklich Neustarten ?");
  if (r === true) {
   window.location.href="php/action.php?Aktion=reboot";
  } else {
   window.location.href="index.php";
  }
}
</script>

<script>
function shutdown() {
  var txt;
  var r = confirm("Wollen sie den Server wirklich Herunterfahren ?");
  if (r === true) {
   window.location.href="php/action.php?Aktion=shutdown";
  } else {
   window.location.href="index.php";
  }
}
</script>


</body>
</html>
