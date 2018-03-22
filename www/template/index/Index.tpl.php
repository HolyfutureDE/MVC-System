<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->controllerConfig()["title"]; ?></title>

    <link rel="stylesheet" href="www/public/css/materialize.css"/>
    <link rel="stylesheet" href="www/public/css/index.css"/>
    <link rel="stylesheet" href="www/public/css/main.css"/>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="www/public/images/online.png"/>

    <meta charset="UTF-8">
    <meta name="description" content="Habbo.af - ein wundersamer Ort für deine Habbo Freunde!"/>
    <meta name="author" content="HabboAF"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta property="og:title" content="Habbo.af - ein wundersamer Ort für deine Habbo Freunde!"/>
    <meta property="og:url" content="http://www.habbo.af/"/>
    <meta property="og:image" content=""/>
</head>

<body>
<section id="header">
    <section id="logo"><img src="www/public/images/habbologo.png"
                            class="logo"></section>
    <section id="menu">
        <div class="row">
            <div class="col s12 m5 l1 xl3">
                <div class="online"><img src="www/public/images/online.png"/></div>
                <div class="onlineCounter">88 Habbo's online!</div>
            </div>

            <div class="right">
                <ul>
                    <li><i class="fab fa-twitter"></i> @HabboAF</li>
                    <li><i class="fab fa-twitter"></i> @HabboAF</li>
                    <button type="button" onclick="showRegister()" class="register browser-default">Erstelle dir einen
                        Habbo Account
                    </button>
                </ul>
            </div>
        </div>
    </section>
    <section id="subMenu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#news">News</a></li>
        </ul>
    </section>

    <div style="width:100%; height:4px; float:left; background-color:#0767b2;"></div>
</section>

<section id="rightBody" style="width:50%; float:right;">
    <div class="row">
        <div class="col xl12">
            <div class="container">
                <div class="umbrella"></div>
                <div class="rBodyContent">
                    <h4>Entdecke eine spannende Welt im Habbo...</h4>
                    <p>Räume entdecken, Freunde finden und mit ihnen Spielen!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="body" class="body">
    <div class="row">
        <div class="col xl12">
            <div class="container" style="margin-top:90px!important;">
                <h5 class="indexTitle center-align">Willkommen im Habbo.af</h5>
                <p class="indexSubTitle center-align">Ein wundersamer Ort um neue Freunde zu finden</p>
                <br/><br/><br/><br/>
                <form method="POST">
                    <div class="formContent">
                        <h5 style="text-transform:uppercase; color:#444444; font-size:23px;">Einloggen</h5>
                        <br/>
                        <input type="text" name="username" class="indexInput browser-default"
                               placeholder="Benutzername oder E-mail"/><br/>
                        <input type="text" name="password" class="indexInput browser-default"
                               placeholder="Passwort"/><br/>
                        <input type="submit" class="logIn" name="userLogIn" style="z-index:99;" value="Einloggen"/>
                        <button type="submit" class="facebookLogIn" name="fbLogIn" style="z-index:99;">Einloggen mit
                            Facebook
                        </button>
                        <a href="#" onclick="showRegister()" id="showRegister"><p style="text-align:center;">Neu hier im
                                Habbo? <b>Erstell dir einen kostenlosen Account!</b></p></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br/>
</section>

<section id="registerBody" class="body" style="display:none;">
    <div class="row">
        <div class="col xl12">
            <div class="container" style="margin-top:90px!important;">
                <form method="POST" onsubmit="return checkForm()">
                    <div class="formContent">
                        <!-- Step 1 -->
                        <div id="step1">
                            <h5 class="indexTitle center-align">Erstelle einen Account</h5>
                            <p class="indexSubTitle center-align">Natürliches alles ohne versteckte kosten...</p>

                            <p id="error" style="display:none;">Das ist ein Error</p>

                            <br/><br/><br/><br/>
                            <h4 style="color:#444444; font-size:20px;">Benutzername</h4>
                            <p style="font-size:12px; color:#BDBDBD;">Wähle ihn sorgfältig. Du kannst ihn danach nicht
                                mehr ändern!</p>
                            <input type="text" name="regUser" id="regUser" class="indexInput browser-default"/>
                            <br/>

                            <h4 style="color:#444444; font-size:20px;">E-mail</h4>
                            <p style="font-size:12px; color:#BDBDBD;">Du benötigst diese E-mail Adresse später, um
                                exklusive
                                Inhalte von Habbo.af nutzen zu können</p>
                            <input type="text" name="regMail" id="regMail" class="indexInput browser-default"/><br/>

                            <h4 style="color:#444444; font-size:20px;">Wiederherstellungscode</h4>
                            <p style="font-size:12px; color:#BDBDBD;">Dein Wiederherstellungscode wird benötigt, wenn du
                                dein Passwort vergessen oder keinen Zugriff auf dein Konto mehr hast. </p>
                            <input type="text" name="code" id="regCode" class="indexInput browser-default"/><br/>

                            <br/><br/>

                            <button class="closeRegister browser-default">SCHLIEßEN</button>

                            <input type="button" name="step2" id="registerStep2" onclick="showStep2()" class="registerStep2 browser-default" value="WEITER" style="display:block" />
                        </div>

                        <!-- Step 2 -->
                        <div id="step2" style="display:none;">
                            <h5 class="indexTitle center-align">Passwort</h5>
                            <p class="indexSubTitle center-align">Wähle ein starkes Passwort aus. Es ist wichtig, um
                                dich einzuloggen!</p>

                            <br/><br/><br/><br/>
                            <h4 style="color:#444444; font-size:20px;">Passwort</h4>
                            <p style="font-size:12px; color:#BDBDBD;">Wir empfehlen ein Passwort mit mindestens 6
                                Zeichen!</p>
                            <input type="text" name="regPassword" class="indexInput browser-default"/><br/>

                            <h4 style="color:#444444; font-size:20px;">Passwort wiederholen</h4>
                            <p style="font-size:12px; color:#BDBDBD;">Überprüf nochmal, ob du dich nicht vertippt
                                hast.</p>
                            <input type="text" name="regRePassword" class="indexInput browser-default"/><br/>

                            <br/><br/>

                            <a href="#" onclick="goBack()" style="line-height:50px; font-size:16px; text-align:center;"
                               class="closeRegister browser-default">ZURÜCK</a>

                            <input type="submit" class="registerStep2 browser-default" name="regButton"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="bodyftr">
    <div class="row">
        <div class="col xl12">
            <div class="footer">
                <ul>
                    <li><a href="">Kontakt (Geschäftliches / Probleme)</a></li>
                    <li><a href="">Allgemeine Geschäftsbedingungen</a></li>
                    <li><a href="">Datenschutzerklärung</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Ein technisches Problem melden</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script src="www/public/js/index.js"></script>
</body>
</html>

<?php

if (isset($_POST['regButton'])) {
    return $this->checkRegister(strip_tags(trim($_POST['regUser'])), strip_tags(trim($_POST['regMail'])), strip_tags(trim($_POST['code'])), strip_tags(trim($_POST['regPassword'])), strip_tags(trim($_POST['regRePassword'])));
}

if (isset($_POST['userLogIn'])) {
    $this->checkLogin(strip_tags(trim($_POST['username'])), strip_tags(trim($_POST['password'])));
}
?>