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
  <li><a class="horizontalemenue" href="../index.php">Home</a></li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Server</a>
    <div class="dropdown-content">
      <a href="http://192.168.178.67/linux-dash">Resourcen Monitor</a>
      <a href="http://nicodimarcotv.ddnss.de">Hardware</a>
  <li><a class="active" href="install.php">Installations Menü</a></li>

<!-- Server Liste -->

<?php include("servers.txt"); ?>

</ul>

<br></br>

<h1 style="color:#52ce1c;">Server Auswahl</h1>

 <select name="auswahl" onChange="window.location=this.value">
  <option value="">Bitte Server Auswählen</option>
  <option value="/php/action.php?Aktion=install&Server=arma3server">ARMA 3</option>
  <option value="/php/action.php?Aktion=install&Server=sdtdserver">7 Days to Die</option>
  <option value="/php/action.php?Aktion=install&Server=arkserver">ARK: Survival Evolved</option>
  <option value="/php/action.php?Aktion=install&Server=boserver">Ballistic Overkill</option>
  <option value="/php/action.php?Aktion=install&Server=bf1942server">Battlefield 1942</option>
  <option value="/php/action.php?Aktion=install&Server=bdserver">Base Defense</option>
  <option value="/php/action.php?Aktion=install&Server=bmdmserver">Black Mesa: Deathmatch</option>
  <option value="/php/action.php?Aktion=install&Server=bsserver">Blade Symphony</option>
  <option value="/php/action.php?Aktion=install&Server=bbserver">BrainBread</option>
  <option value="/php/action.php?Aktion=install&Server=bb2server">BrainBread 2</option>
  <option value="/php/action.php?Aktion=install&Server=bt1944server">Battalion 1944</option>
  <option value="/php/action.php?Aktion=install&Server=codserver">Call of Duty</option>
  <option value="/php/action.php?Aktion=install&Server=cod2server">Call of Duty 2</option>
  <option value="/php/action.php?Aktion=install&Server=cod4server">Call of Duty 4</option>
  <option value="/php/action.php?Aktion=install&Server=coduoserver">Call of Duty: United Offensive</option>
  <option value="/php/action.php?Aktion=install&Server=codwawserver">Call of Duty: World at War</option>
  <option value="/php/action.php?Aktion=install&Server=ccserver">Codename CURE</option>
  <option value="/php/action.php?Aktion=install&Server=csserver">Counter-Strike 1.6</option>
  <option value="/php/action.php?Aktion=install&Server=csczserver">Counter-Strike: Condition Zero</option>
  <option value="/php/action.php?Aktion=install&Server=csgoserver">Counter-Strike: Global Offensive</option>
  <option value="/php/action.php?Aktion=install&Server=cssserver">Counter-Strike: Source</option>
  <option value="/php/action.php?Aktion=install&Server=dodserver">Day of Defeat</option>
  <option value="/php/action.php?Aktion=install&Server=dodsserver">Day of Defeat: Source</option>
  <option value="/php/action.php?Aktion=install&Server=doiserver">Day of Infamy</option>
  <option value="/php/action.php?Aktion=install&Server=dmcserver">Deathmatch Classic</option>
  <option value="/php/action.php?Aktion=install&Server=dstserver">Don't Starve Together</option>
  <option value="/php/action.php?Aktion=install&Server=dabserver">Double Action: Boogaloo</option>
  <option value="/php/action.php?Aktion=install&Server=ecoserver">Eco</option>
  <option value="/php/action.php?Aktion=install&Server=emserver">Empires Mod</option>
  <option value="/php/action.php?Aktion=install&Server=fctrserver">Factorio</option>
  <option value="/php/action.php?Aktion=install&Server=fofserver">Fistful of Frags</option>
  <option value="/php/action.php?Aktion=install&Server=gmodserver">Garrys Mod</option>
  <option value="/php/action.php?Aktion=install&Server=gesserver">GoldenEye: Source</option>
  <option value="/php/action.php?Aktion=install&Server=hl2dmserver">Half-Life 2: Deathmatch</option>
  <option value="/php/action.php?Aktion=install&Server=hldmsserver">Half-Life Deathmatch: Source</option>
  <option value="/php/action.php?Aktion=install&Server=hldmserver">Half-Life: Deathmatch</option>
  <option value="/php/action.php?Aktion=install&Server=hwserver">Hurtworld</option>
  <option value="/php/action.php?Aktion=install&Server=insserver">Insurgency</option>
  <option value="/php/action.php?Aktion=install&Server=inssserver">Insurgency: Sandstorm</option>
  <option value="/php/action.php?Aktion=install&Server=jc2server">Just Cause 2</option>
  <option value="/php/action.php?Aktion=install&Server=jc3server">Just Cause 3</option>
  <option value="/php/action.php?Aktion=install&Server=kfserver">Killing Floor</option>
  <option value="/php/action.php?Aktion=install&Server=kf2server">Killing Floor 2</option>
  <option value="/php/action.php?Aktion=install&Server=l4dserver">Left 4 Dead</option>
  <option value="/php/action.php?Aktion=install&Server=l4d2server">Left 4 Dead 2</option>
  <option value="/php/action.php?Aktion=install&Server=mcserver">Minecraft</option>
  <option value="/php/action.php?Aktion=install&Server=mtaserver">Multi Theft Auto</option>
  <option value="/php/action.php?Aktion=install&Server=mumbleserver">Mumble</option>
  <option value="/php/action.php?Aktion=install&Server=nmrihserver">No More Room in Hell</option>
  <option value="/php/action.php?Aktion=install&Server=nsserver">Natural Selection</option>
  <option value="/php/action.php?Aktion=install&Server=ns2server">Natural Selection 2</option>
  <option value="/php/action.php?Aktion=install&Server=ns2cserver">NS2: Combat</option>
  <option value="/php/action.php?Aktion=install&Server=opforserver">Opposing Force</option>
  <option value="/php/action.php?Aktion=install&Server=pstbsserver">Post Scriptum: The Bloody Seventh</option>
  <option value="/php/action.php?Aktion=install&Server=pvkiiserver">Pirates Vikings & Knights II</option>
  <option value="/php/action.php?Aktion=install&Server=pcserver">Project Cars</option>
  <option value="/php/action.php?Aktion=install&Server=pzserver">Project Zomboid</option>
  <option value="/php/action.php?Aktion=install&Server=q2server">Quake 2</option>
  <option value="/php/action.php?Aktion=install&Server=q3server">Quake 3: Arena</option>
  <option value="/php/action.php?Aktion=install&Server=qlserver">Quake Live</option>
  <option value="/php/action.php?Aktion=install&Server=qwserver">Quake World</option>
  <option value="/php/action.php?Aktion=install&Server=roserver">Red Orchestra: Ostfront 41-45</option>
  <option value="/php/action.php?Aktion=install&Server=ricochetserver">Ricochet</option>
  <option value="/php/action.php?Aktion=install&Server=rustserver">Rust</option>
  <option value="/php/action.php?Aktion=install&Server=rwserver">Rising World</option>
  <option value="/php/action.php?Aktion=install&Server=sampserver">San Andreas Multiplayer</option>
  <option value="/php/action.php?Aktion=install&Server=sbotsserver">StickyBots</option>
  <option value="/php/action.php?Aktion=install&Server=ss3server">Serious Sam 3: BFE</option>
  <option value="/php/action.php?Aktion=install&Server=sbserver">Starbound</option>
  <option value="/php/action.php?Aktion=install&Server=stserver">Stationeers</option>
  <option value="/php/action.php?Aktion=install&Server=squadserver">Squad</option>
  <option value="/php/action.php?Aktion=install&Server=svenserver">Sven Co-op</option>
  <option value="/php/action.php?Aktion=install&Server=tf2server">Team Fortress 2</option>
  <option value="/php/action.php?Aktion=install&Server=tfcserver">Team Fortress Classic</option>
  <option value="/php/action.php?Aktion=install&Server=ts3server">Teamspeak 3</option>
  <option value="/php/action.php?Aktion=install&Server=twserver">Teeworlds</option>
  <option value="/php/action.php?Aktion=install&Server=terrariaserver">Terraria</option>
  <option value="/php/action.php?Aktion=install&Server=tuserver">Tower Unite</option>
  <option value="/php/action.php?Aktion=install&Server=ut2k4server">Unreal Tournament 2004</option>
  <option value="/php/action.php?Aktion=install&Server=ut3server">Unreal Tournament 3</option>
  <option value="/php/action.php?Aktion=install&Server=ut99server">Unreal Tournament 99</option>
  <option value="/php/action.php?Aktion=install&Server=vsserver">Vampire Slayer</option>
  <option value="/php/action.php?Aktion=install&Server=wetserver">Wolfenstein: Enemy Territory</option>
  <option value="/php/action.php?Aktion=install&Server=wurmserver">Wurm Unlimited</option>
  <option value="/php/action.php?Aktion=install&Server=etlserver">ET: Legacy</option>
  <option value="/php/action.php?Aktion=install&Server=zpsserver">Zombie Panic! Source</option>
 </select>

</body>
</html>
