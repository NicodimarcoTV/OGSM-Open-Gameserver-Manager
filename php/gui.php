<?php

/// START ///

// START CONFIG //

$config = include('../config/config.php');
$Home = $config["Home"];
$Stelle = "3";

$Server = $_GET['server'];

// END CONFIG //

// START SKRIPT //

$Name = shell_exec("bash $Home/sh/info.sh $Server $Stelle");
echo "$Name";

// END SKRIPT //

/// END ///

?>

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

<br></br>


<h2 style="color:#1a9cba;">Server Optionen</h2>

<a class="buttongruen" href="action.php?Aktion=start&Server=<?php echo htmlspecialchars($Server); ?>" methode="get"><?php echo htmlspecialchars($Name); ?> Starten</a>

<a class="buttonorange" href="action.php?Aktion=restart&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Name); ?> Neustarten</a>

<a class="buttonrot" href="action.php?Aktion=stop&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Name); ?> Stoppen</a>

<h2 style='color:<?php echo htmlspecialchars($Color); ?>;'><?php echo htmlspecialchars($Status); ?></h2>

<br></br>


<iframe height="600" width="1300" src="console.php?Server=<?php echo htmlspecialchars($server); ?>">
</iframe>

<br></br>

<a class="buttonrot" href="action.php?Aktion=deinstall&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Name); ?> Deinstallieren </a>


</body>
</html>

