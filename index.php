<!DOCTYPE html>
<html lang="de">
<html>
<head>

<meta http-equiv="expires" content="0">
<meta http-equiv="cache-control" content="no-cache">

<meta charset="utf-8">

<link type="text/css" href="css/button.css" rel="stylesheet" media="screen" >
<link type="text/css" href="css/horizontalemenue.css" rel="stylesheet" media="screen" >
<Style>
body {
    background: url("Hintergrund.jpg");
    background-size:cover;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</Style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1 style="color:#52ce1c;">Herzlich Willkommen bei Open Game Server Manager</h1><p>

<br></br>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a class="horizontalemenue" href="php/install.php">Installations Menü</a></li>

<?php include("servers.txt"); ?>

</ul>

<h2 style="color:white;">Host System Optionen</h2>


	<a class="buttongruen" onclick="reboot()">
	Server Neustarten
	</a>

	<a class="buttonrot" onclick="shutdown()">
	Server Herunterfahren
	</a>

	<br></br>


<script>
function reboot() {
  var txt;
  var r = confirm("Wollen sie den Server wirklich Neustarten ?");
  if (r == true) {
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
  if (r == true) {
   window.location.href="php/action.php?Aktion=shutdown";
  } else {
   window.location.href="index.php";
  }
}
</script>


</body>
</html>
