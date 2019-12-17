<!DOCTYPE html>
<html lang="de">

<head>


<meta charset="utf-8">

<link type="text/css" href="css/button.css" rel="stylesheet" media="screen" >
<link type="text/css" href="css/horizontalemenue.css" rel="stylesheet" media="screen" >
<<<<<<< HEAD
<<<<<<< Updated upstream
<Style>
body {
    background: url("Hintergrund.jpg");
    background-size:cover;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</Style>
=======
<link type="text/css" href="css/general.css" rel="stylesheet" media="screen" >
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>OGSM</title>

>>>>>>> Stashed changes
=======
<link type="text/css" href="css/general.css" rel="stylesheet" media="screen" >
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

>>>>>>> 22a01ea8440984965033d779372354cfd43acea9
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1>Herzlich Willkommen</h1>
<p><h1> beim OGSM-Open-Gameserver-Manager</h1></p>

<p>

<br>

<<<<<<< HEAD
<br>
=======
>>>>>>> 22a01ea8440984965033d779372354cfd43acea9
<ul>
    <li><a class="active" href="index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="php/install.php"><i class="fas fa-download"></i> Installations Menü</a></li>
    <li><a href="#"><i class="fas fa-download"></i> 222222</a></li>
    <li><a href="#"><i class="fas fa-download"></i> 3333333</a></li>
    <li class="right"><a href="#"><i class="fas fa-download"></i> Hilfe</a></li>
    <li class="right"><a href="#"><i class="fas fa-download"></i> Kontakt</a></li>

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

        <a class="buttonrot" onclick="shutdown()">
            <i class="fas fa-power-off"></i>
                 Server Herunterfahren
        </a>

        <br></br>
    </div>


    <div class="column spacer"></div>

    <div class="column middle">
        <h1>Startseite</h1>
    </div>

</div>

<footer>
    <p></p>
    <p>© OGSM</p>
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
