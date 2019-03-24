<!DOCTYPE html>
<html lang="de">
<html>
<head>

<meta charset="utf-8">

<link type="text/css" href="css/button.css" rel="stylesheet" media="screen" >
<link type="text/css" href="css/horizontalemenue.css" rel="stylesheet" media="screen" >
<Style>
body {
    background: url("bilder/Hintergrund.jpg");
    background-size:cover;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</Style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1 style="color:#52ce1c;">Herzlich Willkommen bei Open Game Server Manager</h1><p>

<h1  style="color:#1a9cba">Hosted by NicodimarcoTV</h1>
<br></br>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Server</a>
    <div class="dropdown-content">
      <a href="http://192.168.178.67/linux-dash">Resourcen Monitor</a>
      <a href="http://nicodimarcotv.ddnss.de">Hardware</a>
  <li><a class="horizontalemenue" href="php/install.php">Installations Menü</a></li>

<?php include("servers.txt"); ?>

</ul>

<h2 style="color:white;">Host System Optionen</h2>


	<br><a class="buttongruen" href="skripte/wake.php" >
	Server Starten
	</a>

	<a class="buttonorange" href="skripte/restart.php">
	Server Neustarten
	</a>

	<a class="buttonrot" href="skripte/poweroff.php">
	Server Stoppen
	</a>

	<a class="buttongelb" href="http://192.168.178.67/linux-dash">
        Resourcen Monitor
        </a>

 	<a class="buttonblau" href="http://nicodimarcotv.ddnss.de">
        Zur Hardware
        </a></br>

	<br></br>

</body>
</html>
