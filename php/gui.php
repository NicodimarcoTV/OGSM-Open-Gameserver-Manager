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

    <link type="text/css" href="../css/general.css" rel="stylesheet" media="screen" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="/js/select.js"></script>
    <title>OGSM</title>


    <link type="text/css" href="../css/general.css" rel="stylesheet" media="screen" >
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<header>
    <p><h1>
        <span class="highlight">O</span>pen-<span class="highlight">G</span>ame<span class="highlight">S</span>erver-<span class="highlight">M</span>anager
    </h1>
</header>
<p>

<br></br>
<ul>
    <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="install.php"><i class="fas fa-download"></i> Installations Menü</a></li>
    <li><a class="active" href="gui.php"><i class="fas fa-terminal"></i> Konsole</a></li>
    <li><a href="config.php"><i class="fas fa-cogs"></i> Einstellungen</a></li>
    <li class="right"><a href="help.php"><i class="far fa-question-circle"></i> Hilfe</a></li>
    <li class="right"><a href="contact.php"><i class="far fa-address-book"></i> Kontakt</a></li>

    <?php include("../config/servers.txt"); ?>

</ul>
<br>
<div class="row">

    <div class="column left">

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


        <div class="column side">
            <h2>Aktueller Gameserver</h2>

            <a class="buttongruen" href="action.php?Aktion=start&Server=<?php echo htmlspecialchars($server); ?>" methode="get">
                <?php echo htmlspecialchars($Name); ?> <i class="fas fa-rocket"></i> Starten</a>
            <a class="buttonorange" href="action.php?Aktion=restart&Server=<?php echo htmlspecialchars($server); ?>" methode="get">
                <?php echo htmlspecialchars($Name); ?><i class="fas fa-redo"></i> Neustarten</a>

            <a class="buttonrot" href="action.php?Aktion=stop&Server=<?php echo htmlspecialchars($server); ?>" methode="get">
                <?php echo htmlspecialchars($Name); ?> <i class="fas fa-power-off"></i> Stoppen</a>

            <br>
            <br>
            <br>
            <p></p>
            <a class="buttonrot" href="action.php?Aktion=deinstall&Server=<?php echo htmlspecialchars($server); ?>" methode="get">
                <?php echo htmlspecialchars($Name); ?><i class="fas fa-trash-alt"></i> Deinstallieren </a>
            <br>
            <br>


        </div>
    </div>

    <div class="column spacer"></div>

    <div class="column middle">
        <h1>System Konsole</h1>
        <br>
        <h4><p style="text-align: center"><strong>Interface:</strong></p></h4>

        <iframe height="100%" width="100%" src="console.php">
        </iframe>


        <br>
        <br>
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
            window.location.href="./action.php?Aktion=reboot";
        } else {
            window.location.href="./gui.php";
        }
    }
</script>

<script>
    function shutdown() {
        var txt;
        var r = confirm("Wollen sie den Server wirklich Herunterfahren ?");
        if (r === true) {
            window.location.href="./action.php?Aktion=shutdown";
        } else {
            window.location.href="./gui.php";
        }
    }
</script>
