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

</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<header>
    <p><h1>
        <span class="highlight">O</span>pen-<span class="highlight">G</span>ame<span class="highlight">S</span>erver-<span class="highlight">M</span>anager
    </h1>
</header>
<p>
<br>
<ul>
    <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
    <li><a class="active" href="install.php"><i class="fas fa-download"></i> Installations Menü</a></li>
    <li><a href="gui.php"><i class="fas fa-terminal"></i> Konsole</a></li>
    <li><a href="config.php"><i class="fas fa-cogs"></i> Einstellungen</a></li>
    <li class="right"><a href="help.php"><i class="far fa-question-circle"></i> Hilfe</a></li>
    <li class="right"><a href="contact.php"><i class="far fa-address-book"></i> Kontakt</a></li>
<!-- Server Liste -->
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
    </div>

    <div class="column spacer"></div>

    <div class="column middle">
        <h1>Installations Menü</h1>
        <br>
        <h4><p style="text-align: center"><strong>Server Auswahl</strong></p></h4>



        <div class="custom-select" style="width:300px; text-align: center;">
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
        </div>



        <br>
        <br>
    </div>

</div>

<footer>
    <p></p>
    <p>©OGSM by NicodimarcoTV & CoolusaHD</p>
</footer>

<script>
    var x, i, j, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < selElmnt.length; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                h = this.parentNode.previousSibling;
                for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        for (k = 0; k < y.length; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        for (i = 0; i < y.length; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < x.length; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /* If the user clicks anywhere outside the select box,
    then close all select boxes: */
    document.addEventListener("click", closeAllSelect);
</script>


<script>
    function reboot() {
        var txt;
        var r = confirm("Wollen sie den Server wirklich Neustarten ?");
        if (r === true) {
            window.location.href="./action.php?Aktion=reboot";
        } else {
            window.location.href="../install.php";
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
            window.location.href="./install.php";
        }
    }
</script>

</body>
</html>
