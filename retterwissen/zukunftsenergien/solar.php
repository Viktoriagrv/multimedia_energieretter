<html lang="de"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarenergie</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

    <!-- STYLESHEETS -->
	<link rel="stylesheet" href="../../include/css/styles.css">
	
    <!-- NAVIGATION  -->
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

		
		/* BODY */
		body {
  		  margin: 0;
  		  padding: 0;
  		  font-family: Arial, sans-serif;
   			 overflow-x: auto; /* SCROLLEN */
		}

		/* SONNE */
        .SONNE {
            display: flex;
            justify-content: space-around;
            gap: 100px;
            position: relative;
            margin-bottom: 60px;
        }

		/* SPRECHBLASEN ALLGEMEIN*/

		main {
			padding: 20px;
			display: flex;
			flex-direction: column;
			gap: 15px;
			max-height: 90vh; /* MAX. HÖHE */
			margin-top: 100px;
			overflow-y: auto; /* SCROLLEN */
		}

		/* SPRECHBLASE STYLE */

		.sprechblase {
			position: relative;
			background: #fff;
			border: 2px solid #333;
			border-radius: 10px; /* RUNDUNG */
			padding: 10px 20px; /* BREITERE SPRECHBLASE*/
			font-size: 14px; /* SCHRIFTGRÖßE */
			line-height: 1.3; /* ZEILENABSTAND */
			color: black;
			text-align: justify;
			box-sizing: border-box;
			width: fit-content; /* SPRECHBLASE NUR SO GROß WIE TEXT */
			max-width: 500px; /* BREITE */
			margin-left: 80px; /* ABSTAND ZUR LINKEN SEITE */
			margin-right: 80px; /* ABSTAND ZUR RECHTEN SEITE */
		}

			/* LAUTSPRECHER */
			.sprechblase img {
				width: 16px; /* LAUTSPRECHER-GRÖßE */
				height: 16px;
				cursor: pointer;
				position: absolute;
				top: 10px;
				right: 10px; /* LAUTSPRECHER OBEN RECHTS IN DIE ECKE */
			}

			/* SPRECHBLASEN WEIßER TEIL DREIECK */
		.sprechblase::after {
			content: '';
			position: absolute;
			bottom: -8px; /* KLEINER PFEIL */
			left: 20px; 
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 8px 8px 0 8px; 
			border-color: #fff transparent transparent transparent;
		}

				/* SPRECHBLASEN SCHWARZER TEIL DREIECK */
		.sprechblase::before {
			content: '';
			position: absolute;
			bottom: -10px;
			left: 18px; 
			width: 0;
			height: 0;
			border-style: solid;
			border-width: 10px 10px 0 10px; 
			border-color: #333 transparent transparent transparent;
		}

		/* ANKLICKBARE WÖRTER */
		.woerter span {
			color: #e8a723; 
			cursor: pointer;
			text-decoration: underline;
		}

		/* ANORDNUNG SPRECHBLASEN */
		#sprechblase1 {
			align-self: flex-start; /*LINKS */
		}

		#sprechblase2 {
			align-self: flex-end; /* REVHTS */
		}

		#sprechblase3 {
			align-self: flex-start; /* LINKS */
			margin-bottom: 55px; /* ABSTAND NACH UNTEN */
		}


		/* BUTTONS */
		.buttons {
			margin-top: 5px; 
			display: flex;
			gap: 8px;
		}

		.button {
			background-color: #e8a723;
			color: white;
			border: none;
			padding: 6px 10px; 
			border-radius: 5px;
			cursor: pointer;
			font-size: 10px; 
		}

		.button:hover {
			background-color: #d67b00;
		}

		/* KARTEN */
		.karte {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: white;
			padding: 12px;
			border-radius: 10px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
			max-width: 60%; 
			z-index: 1000;
			display: none;
		}

		.karte h2 {
			margin-top: 0;
		}

		.karte p {
			font-size: 12px; /* Kleinere Schriftgröße */
			line-height: 1.4; /* Kleinere Zeilenhöhe */
		}

				/* SCHLIEßBUTTON */
		.close-button {
			background: #e8a723;
			border: none;
			padding: 6px 10px; 
			color: white;
			border-radius: 5px;
			cursor: pointer;
			font-size: 10px; 
		}

		.close-button:hover {
			background: #d67b00;
		}

</style>

	</head>
		<body>
    	<!-- HINTERGRUNDVIDEO GALAXIE -->
    	<video autoplay muted loop id="backgroundVideo">
       	 <source src="../bilder_retterwissen/background_video.mp4" type="video/mp4">
    	</video>

<main>
	  <div> <img src="../bilder_retterwissen/sonne.png" alt="Solarenergie" width="345" height="345"> </div>
	
  <!-- SPRECHBLASE 1 -->

	  <div class="sprechblase" id="sprechblase1">

		<p id="simple1">
		  Sonnenenergie, oder auch Solarenergie genannt, ist Energie, die von der Sonne kommt. Die Sonne strahlt eine große Menge an Energie aus. Ein kleiner Teil dieser Strahlen erreicht die Erde und erwärmt sie. Die Menschen können diese Energie nutzen und in andere Energien umwandeln. Die Sonnenstrahlen liefern weit mehr Energie, als Mensch und Natur brauchen können. Mit Solarmodulen kann man die Sonnenenergie einfangen und in Stromb verwandeln. Das Besondere daran ist, dass sie keine schädlichen Gase produziert und deshalb gut für die Umwelt ist.
		</p>


			<div class="button">
			<button> Play / Pause </button>
		</div>
	  </div>
	</main>



    </div>

			
    <script>
	
    const sonnenBild = document.getElementById('sonnenBild');

    // Aktueller Status der Sonne
    let position = 'center'; // Optionen: 'center', 'right', 'left'

    // Event-Listener für die Klicks
    sonnenBild.addEventListener('click', () => {
        if (position === 'center') {
            // Bewege nach rechts
            sonnenBild.style.transform = 'translateX(200px)';
            position = 'right';
        } else if (position === 'right') {
            // Bewege nach links
            sonnenBild.style.transform = 'translateX(-200px)';
            position = 'left';
        } else if (position === 'left') {
            // Zurück zur Mitte
            sonnenBild.style.transform = 'translateX(0)';
            position = 'center';
        }
    });


		// MUSIK 
		document.querySelector('button').addEventListener('click', MusikAnAus);
	
		const Klingelton = new Audio('spacey_button.mp3')
		
			function MusikAnAus (){ 
				if (! Klingelton.paused)
					Klingelton.paused();
				}
		
		 		else {
					Klingelton.play();
					Klingelton.loop = true;
				}
				
    </script>
			

    <!-- FOOTER -->
    <footer class="footer-custom">
        <div class="footer-links">
            <a href="../../impressum/impressum.php">Impressum</a>
        </div>
    </footer>
	
</body>
</html>
