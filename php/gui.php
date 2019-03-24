<?php

$server = $_GET['server'];

    $lines = file('../serverlist.txt');
    foreach ($lines as $line)
    {
    if(strpos($line, $server) !== false)
     {
       $str[] = $line;
     }
    }
    print_r($str);

    $str = implode("|",$str);

    $arr = preg_split('/\s*\,\s*/', $str);
    var_dump($arr);
    $Server = $arr[2];
    var_dump($Server);

    ob_end_clean();

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
    background: url("../bilder/Hintergrund.jpg");
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
  <li><a class="active" href="../index.php">Home</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Server</a>
    <div class="dropdown-content">
      <a href="http://192.168.178.67/linux-dash">Resourcen Monitor</a>
      <a href="http://nicodimarcotv.ddnss.de">Hardware</a>
  <li><a class="horizontalemenue" href="install.php">Installations Menü</a></li>

<?php include("servers.txt"); ?>

</ul>

<br></br>


<h2 style="color:#1a9cba;">Server Optionen</h2>

<a class="buttongruen" href="action.php?Aktion=start&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Server); ?> Starten</a>

<a class="buttonorange" href="action.php?Aktion=restart&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Server); ?> Neustarten</a>

<a class="buttonrot" href="action.php?Aktion=stop&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Server); ?> Stoppen</a>


<br></br>

<br></br>

<a class="buttonrot" href="action.php?Aktion=deinstall&Server=<?php echo htmlspecialchars($server); ?>" methode="get"><?php echo htmlspecialchars($Server); ?> Deinstallieren </a>


</body>
</html>

