<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarenergie</title>

	
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="../../include/css/styles.css">

    <!-- NAVIGATION -->
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
	
    <style>
		
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
            height: 100%;
        }

        /* SONNEN CONTAINER */
        .sonnen-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffeeba;
        }

        .sonnen-container img {
            width: 300px;
            height: auto;
            animation: schweben 3s ease-in-out infinite;
        }

        @keyframes schweben {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Sprechblasen rechts */
        main {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .sprechblase {
            position: relative;
            background: #fff;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 15px;
            font-size: 14px;
            line-height: 1.4;
            color: black;
            text-align: justify;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: erscheinen 0.5s ease-out;
        }

        @keyframes erscheinen {
            from {
                transform: scale(0.9);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .button {
            background-color: #e8a723;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #d67b00;
        }
    </style>
</head>
<body>
    <div class="container">
		
        <!-- SONNENBEREICH -->
        <div class="sonnen-container">
            <img src="../bilder_retterwissen/sonne.png" alt="Solarenergie">
        </div>

        <!-- SPRECHBLASENBEREICH -->
        <main>
            <!-- SPRECHBLASE 1 -->
            <div class="sprechblase" id="SPRECHBLASE1">
                <p id="TEXT1">Sonnenenergie ist Energie, die von der Sonne kommt und umweltfreundlich in Strom umgewandelt werden kann.</p>
                <button class="button" onclick="toggleText('TEXT1', 'EINFACHE ERKLÄRUNG', 'AUSFÜHRLICHE ERKLÄRUNG')">Wechseln</button>
            </div>

            <!-- SPRECHBLASE 2 -->
            <div class="sprechblase" id="SPRECHBLASE2">
                <p id="TEXT2">Solarmodule fangen Sonnenstrahlen ein und wandeln sie in saubere Energie um, die keine schädlichen Gase freisetzt.</p>
                <button class="button" onclick="toggleText('TEXT2', 'EINFACHE ERKLÄRUNG', 'AUSFÜHRLICHE ERKLÄRUNG')">Wechseln</button>
            </div>

            <!-- SPRECHBLASE 3 -->
            <div class="sprechblase" id="SPRECHBLASE3">
                <p id="TEXT3">Die Sonne liefert weit mehr Energie, als wir benötigen. Solarenergie hilft, fossile Brennstoffe zu ersetzen.</p>
                <button class="button" onclick="toggleText('TEXT3', 'EINFACHE ERKLÄRUNG', 'AUSFÜHRLICHE ERKLÄRUNG')">Wechseln</button>
            </div>
			
			 <!-- SPRECHBLASE 4 -->
            <div class="sprechblase" id="SPRECHBLASE4">
                <p id="TEXT4">Die Sonne liefert weit mehr Energie, als wir benötigen. Solarenergie hilft, fossile Brennstoffe zu ersetzen.</p>
                <button class="button" onclick="toggleText('TEXT4', 'EINFACHE ERKLÄRUNG', 'AUSFÜHRLICHE ERKLÄRUNG')">Wechseln</button>
            </div>
        </main>
    </div>

    <script>
        const texte = {
            'TEXT1': {
                'EINFACHE ERKLÄRUNG': 'Sonnenenergie ist Energie, die von der Sonne kommt und umweltfreundlich in Strom umgewandelt werden kann.',
                'AUSFÜHRLICHE ERKLÄRUNG': 'Sonnenenergie ist eine der nachhaltigsten Energiequellen. Die Strahlung der Sonne kann durch moderne Technik effizient genutzt werden, um Energie ohne Umweltbelastung zu erzeugen.'
            },
            'TEXT2': {
                'EINFACHE ERKLÄRUNG': 'Solarmodule fangen Sonnenstrahlen ein und wandeln sie in saubere Energie um, die keine schädlichen Gase freisetzt.',
                'AUSFÜHRLICHE ERKLÄRUNG': 'Solarmodule, auch Photovoltaikanlagen genannt, nutzen spezielle Halbleiter, um die Energie der Sonnenstrahlen in elektrischen Strom umzuwandeln. Dies geschieht effizient und ohne die Freisetzung von Schadstoffen.'
            },
            'TEXT3': {
                'EINFACHE ERKLÄRUNG': 'Die Sonne liefert weit mehr Energie, als wir benötigen. Solarenergie hilft, fossile Brennstoffe zu ersetzen.',
                'AUSFÜHRLICHE ERKLÄRUNG': 'Die Sonne liefert pro Jahr Tausende von Terawattstunden Energie auf die Erde – genug, um den gesamten globalen Energiebedarf zu decken. Mit der richtigen Infrastruktur können fossile Brennstoffe schrittweise ersetzt werden.'
            },
			'TEXT4': {
                'EINFACHE ERKLÄRUNG': 'Solarmodule fangen Sonnenstrahlen ein und wandeln sie in saubere Energie um, die keine schädlichen Gase freisetzt.',
                'AUSFÜHRLICHE ERKLÄRUNG': 'Solarmodule, auch Photovoltaikanlagen genannt, nutzen spezielle Halbleiter, um die Energie der Sonnenstrahlen in elektrischen Strom umzuwandeln. Dies geschieht effizient und ohne die Freisetzung von Schadstoffen.'
            },
        };

        function toggleText(id, einfacheErklärung, ausführlicheErklärung) {
            const textElement = document.getElementById(id);
            textElement.textContent = textElement.textContent === texte[id][einfacheErklärung]
                ? texte[id][ausführlicheErklärung]
                : texte[id][einfacheErklärung];
        }
    </script>
<footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>
</body>
</html>

