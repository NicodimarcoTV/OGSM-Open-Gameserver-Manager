<!DOCTYPE html>
<html lang="de">
<html>
<head>

<meta charset="utf-8">

<link type="text/css" href="../css/button.css" rel="stylesheet" media="screen" >
<link type="text/css" href="../css/horizontalemenue.css" rel="stylesheet" media="screen" >
<Style>
body {
    background: url("../config/Hintergrund.jpg");
    background-size:cover;
    background-repeat: no-repeat;
    padding-top: 40px;
}
</Style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<h1 style="color:#52ce1c;">Herzlich Willkommen bei OGSM-Open-Gameserver-Manager</h1><p>

<br></br>
<ul>
  <li><a class="active" href="../index.php">Home</a></li>
  <li><a class="horizontalemenue" href="install.php">Installations Menü</a></li>

<?php include("../config/servers.txt"); ?>

</ul>

</html>


/// START ///

<?php

// START CONFIG //

$config = include('../config/config.php');
$Home = $config["Home"];

$Server = $_GET['Server'];
$Aktion = $_GET['Aktion'];

$Stelle = "2";
$Stelle2 = "3";

// END CONFIG //

// START SKRIPT //

$Name = shell_exec("bash $Home/sh/info.sh $Server $Stelle");
echo "$Name";

if ($Aktion == "deinstall") {
  $Variable = "../index.php";
  action();
} elseif ($Aktion == "reboot") {
  $Variable = "../index.php";
  action();
} elseif ($Aktion == "shutdown") {
  $Variable = "../index.php";
  action();
} elseif ($Aktion == "install") {
  $Variable = "gui.php?server=$Server";
  action();
}

// END SKRIPT //

// START FUNCTIONS //

function action() {
    global $Home, $Aktion, $Name;
    shell_exec("bash $Home/sh/action.sh $Aktion $Name");
}

// END FUNCTIONS //

?>

/// END ///


<meta http-equiv="refresh" content='0; URL="<?php echo htmlspecialchars($Variable);?>"'>
