<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code-Eingabe</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
	
	<div class="ALLES">
		<?php include '../include/nav.php'; ?>

		<!-- Hintergrundvideo -->
		<video autoplay muted loop id="hintergrund-video">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../retterwissen/bilder_retterwissen/background_video.webm" type="video/webm">
		</video>


		<!-- Hauptinhalt -->
		<main>
			<img class="HELD-CODE" src="../images/AquaBoy.png" alt="Superheld">
			<div class="helden-bereich">

				<div id="sprechblase">
					Du musstest während deiner Mission kurz weg? Kein Problem! 
					Du erinnerst dich bestimmt, dass du von deinem Superhelden einen Code bekommen hast. Gib diesen einfach ein und mach da weiter, wo du aufgehört hast.
				</div>


				<div>
					<p class="HEADER-CODE">Gebe deinen Code ein:</p>
					<input class="CODE" value=''>
					<button class="EINGEBEN">Weiter</button>		
				</div>

			<div class="FEHLERMELDUNG-CODE">
				<div>Das war leider nicht der richtig Code.<br><br>
					Bist du dir sicher, dass du ihn korrekt eingeben hast? <br><br>
				</div>
				<button id="SCHLIESSEN-CODE" class="FEHLER-CODE">Versuche es noch einmal</button>
			</div>
		</main>
			
	</div>

    <script>
		
		
		document.querySelector(".EINGEBEN").addEventListener('click',EingabeAuswerten);
		
		function EingabeAuswerten() {														// Funktion mit Verzweigung
			if (document.querySelector('input').value.toLowerCase() == "xdf-338"){			// Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_scarlet.php";						// Weiterleiten bei positivem Ergebnis
				}
			if(document.querySelector('input').value.toLowerCase() == "iqn-432"){
				window.location.href = "kapitel3/wasser_scarlet.php";
			}
			
			if (document.querySelector('input').value.toLowerCase() == "fts-909"){			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_knight.php";							// Weiterleiten bei positivem Ergebnis
			}
			if(document.querySelector('input').value.toLowerCase() == "bjs-162"){
				window.location.href = "kapitel3/wasser_knight.php";
			}
			
			if (document.querySelector('input').value.toLowerCase() == "cds-157"){			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_blaze.php";							// Weiterleiten bei positivem Ergebnis
			}
			if(document.querySelector('input').value.toLowerCase() == "smc-612"){
				window.location.href = "kapitel3/wasser_blaze.php";
			}
			
			if (document.querySelector('input').value.toLowerCase() == "fvk-842"){			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_thunder.php";						// Weiterleiten bei positivem Ergebnis
			}
			if(document.querySelector('input').value.toLowerCase() == "hsa-792"){
				window.location.href = "kapitel3/wasser_thunder.php";
			}
			
			if (document.querySelector('input').value.toLowerCase() == "jko-264"){			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_titan.php";							// Weiterleiten bei positivem Ergebnis
			}
			if(document.querySelector('input').value.toLowerCase() == "xrg-518"){
				window.location.href = "kapitel3/wasser_titan.php";
			}
			
			if (document.querySelector('input').value.toLowerCase() == "sdl-204"){			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_sonic.php";							// Weiterleiten bei positivem Ergebnis
			}
			if(document.querySelector('input').value.toLowerCase() == "pok-672"){
				window.location.href = "kapitel3/wasser_sonic.php";
			}
			
			else {
				ZeigeFehlermeldung();														// Ausgabe bei negativem Ergebnis
			}
		}
		
		function ZeigeFehlermeldung(){
			document.querySelector(".FEHLERMELDUNG-CODE").classList.add("ZEIGEN");
		}
	
        document.querySelector("#SCHLIESSEN-CODE").addEventListener("click",FehlermeldungAus);
		
		function FehlermeldungAus(){
			document.querySelector(".FEHLERMELDUNG-CODE").classList.remove("ZEIGEN");
			document.querySelector("input").value = ""; 									// Eingabefeld leeren (programmiert mit ChatGPT)
		}
		
    </script>
		
</body>
</html>
