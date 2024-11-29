<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code-Eingabe</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../include/css/styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        #helden-bereich {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            text-align: center;
        }

        #helden-bild {
            width: 200px;
            height: auto;
        }

        #sprechblase {
            position: relative;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 16px;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        #sprechblase:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid rgba(255, 255, 255, 0.9);
        }

        .code-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .code-knopf {
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .code-knopf:hover {
            background-color: #005f73;
        }

        #neu-starten-knopf {
            background-color: #ff6347;
            font-weight: bold;
        }

        #neu-starten-knopf:hover {
            background-color: #c0392b;
        }

        #hintergrund-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Hintergrundvideo -->
    <video autoplay muted loop id="hintergrund-video">
        <source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
        <source src="../retterwissen/bilder_retterwissen/background_video.webm" type="video/webm">
    </video>

    <!-- Navigation -->
    <nav class="navbar-custom">
        <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
        <div class="menu">
            <a href="../../index.php" class="menu-link menu-item">Vorspann</a>
            <div class="dropdown menu-item">
                <button class="dropbtn menu-link">Mission</button>
                <div class="dropdown-content">
                    <a href="../../mission/superhelden.php">Die Superhelden</a>
                    <a href="../../mission/missionsstart.php">Missionsstart</a>
                    <a href="../../mission/codeeingabe.php">Code-Eingabe</a>
                </div>
            </div>
            <div class="dropdown menu-item" style="margin-right: 50px;">
                <button class="dropbtn menu-link">Retterwissen</button>
                <div class="dropdown-content">
                    <a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
                    <a href="../../retterwissen/innovationen.php">Innovationen</a>
                    <a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hauptinhalt -->
    <main>
        <div id="helden-bereich">
            <img src="" alt="Superheld" id="helden-bild">
            <div id="sprechblase">
                Du musstest während deiner Mission kurz weg? Kein Problem! 
                Du erinnerst dich bestimmt, dass du von deinem Superhelden mal einen Code bekommen hast. Gib diesen einfach ein und mach da weiter, wo du aufgehört hast.
            </div>
            <div class="code-buttons">
                <button class="code-knopf" onclick="codeAuswaehlen('WAS-1-SER')">WAS-1-SER</button>
                <button class="code-knopf" onclick="codeAuswaehlen('MISSION-42')">MISSION-42</button>
                <button class="code-knopf" onclick="codeAuswaehlen('RETTER-99')">RETTER-99</button>
                <button id="neu-starten-knopf" onclick="neuStarten()">Du hast den Code vergessen oder willst von neu beginnen? Kein Problem, fang hier von vorne an!</button>
            </div>
        </div>
    </main>

    <script>
        function codeAuswaehlen(code) {
            alert(`Code ${code} wurde ausgewählt! Du wirst weitergeleitet...`);
            // Weiterleitungslogik, z.B.: window.location.href = `missionsstart.php?code=${code}`;
        }

        function neuStarten() {
            alert("Neustart gewählt! Du wirst zur Startseite weitergeleitet.");
            window.location.href = "../../index.php";
        }
    </script>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="footer-links">
            <a href="../../impressum/impressum.php">Impressum</a>
        </div>
    </footer>
</body>
</html>
