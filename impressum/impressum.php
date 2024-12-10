<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../include/css/styles.css">

    <!-- Navigation einbinden -->
    <nav class="navbar-custom">
        <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
        <!-- Hauptmenü -->
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
			font-family: Verdana, sans-serif;
			background-color: #f4f4f4;
			color: #000;
			margin: 0;
			padding: 0;
			overflow-y: scroll;
		}

		main {
			padding-top: 80px;  /* Abstand oben (wie Höhe der Navbar) */
			padding-bottom: 80px;  /* Sicherstellen, dass der Abstand zum Footer genug ist */
		}

		/* Inhaltsbereich */
		.inhalt {
			max-width: 600px; 
			margin: 0 auto;
			background: rgba(255, 255, 255, 0.8);
			padding: 20px;  /* Innenabstand */
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			z-index: 1;  
		}

		/* Hintergrundvideo */
		#hintergrundVideo {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: -1;  /* Video hinter dem Inhalt */
		}

			</style>
		
		</head>

		<body>
			<!-- Hintergrundvideo -->
			<video autoplay muted loop id="hintergrundVideo">
				<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
				<source src="../retterwissen/bilder_retterwissen/background_video.webm" type="video/webm">
			</video>

    <!-- Hauptinhalt -->
    <main>
        <div class="inhalt">
            
            <h1>Impressum</h1>
            <p>
                Willkommen zu <strong>Die Energieretter</strong> – ein Projekt des Multimedia-Studiums im Wintersemester 2024/2025 
                unter der Leitung von <strong>Prof. Götz Greiner</strong> und <strong>Dipl.-Phys. Thomas Severiens</strong>. 
                Dieses Projekt wurde erstellt von:
            </p>
            <ul>
                <li><strong>Sabrina Siebels</strong></li>
                <li><strong>Viktoria Grushev</strong></li>
                <li><strong>Sophie Hecker</strong></li>
            </ul>

            <!-- Bild- und Literaturverzeichnis -->
            <div class="interaktiver-abschnitt">
                <h2>Bildverzeichnis</h2>
                <p>Alle Bilder und Videos wurden unter Berücksichtigung der Lizenzbedingungen genutzt:</p>
                <ul>
                    <li>Background-Video: <a href="https://example.com" target="_blank">Link zur Quelle</a></li>
                    <li>Illustrationen: Eigene Anfertigungen durch die Projektgruppe.</li>
                    <li>Icons: Bezogen von <a href="https://www.flaticon.com" target="_blank">Flaticon</a>.</li>
                </ul>
            </div>

            <div class="interaktiver-abschnitt">
                <h2>Literaturverzeichnis</h2>
                <p>Die folgenden Quellen wurden für die Inhalte verwendet:</p>
                <ul>
                    <li>Buch: "Die Zukunft der Energie", Verlag XYZ, 2023</li>
                    <li>Artikel: "Innovation in der Klimaforschung", Online-Magazin ABC</li>
                    <li>Studie: "Nachhaltige Technologien 2024", Universität DEF</li>
                </ul>
            </div>

            <!-- Kontakt -->
            <div class="interaktiver-abschnitt">
                <h2>Kontakt</h2>
                <p>Bei Fragen zu diesem Projekt können Sie uns unter folgender E-Mail-Adresse erreichen:</p>
                <p><a href="mailto:info@energieretter.de">info@energieretter.de</a></p>
            </div>
        </div>
    </main>

  <!-- Footer -->
    <footer class="footer-custom">
        <div class="footer-links">
            <a href="../../impressum/impressum.php">Impressum</a>
        </div>
    </footer>
</body>
</html>

