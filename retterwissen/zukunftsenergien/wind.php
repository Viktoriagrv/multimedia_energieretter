<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <title>Windkraft</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        

		body {
			background:#F0F0F0;
			background-size: 100% 100%;
			background-attachment: fixed;
			font-family: 'Verdana', sans-serif;
			position: relative;
			flex-grow: 1;
			overflow: auto;
			
		}

        main {
            margin-top: 80px; /* Abstand zur fixierten Navbar */
            padding: 20px;
            z-index: 10; /* Slider und Hauptinhalt erscheinen über dem Hintergrund */
            flex-grow: 1; /* Der Inhalt nimmt so viel Platz wie möglich ein */
        }


		
		.text-kategorie {
			display: grid;
			grid-template-columns: 1fr; /* Eine Spalte */
			justify-content: center;    /* Zentriere den Container horizontal */
			width: 70%;                /* Begrenze die Breite auf 30% */
			margin: 0 auto;            /* Zentriere den Container im Layout */
			line-height: 1.6;          /* Lesbarkeit verbessern */
		}
		
			

    </style>
</head>

<body>
	<?php include '../../include/nav.php'; ?>

    <main>
		<h1 style="text-align: center; margin-top: 4%; margin-bottom: 0;">Wasserstoff in Industrie und Gewerbe</h1>
		<div class="text-kategorie">
        <p style="margin-bottom: 4%;">In der Industrie und im Gewerbe wird Wasserstoff für viele wichtige Dinge gebraucht. Zum Beispiel in der Stahlproduktion oder der 
		Chemieindustrie. Diese Bereiche brauchen viel Energie, und Wasserstoff kann helfen, diese Energie zu erzeugen. Wasserstoff hilft auch dabei, 
		die schädlichen fossilen Brennstoffe zu ersetzen, die der Umwelt schaden. So wird weniger CO₂ in die Luft abgegeben, und das hilft, den Klimawandel zu stoppen. </p>
		</div>
        <div class="slider-container">
            <button class="slider-btn prev-btn">&#8592;</button>
            <div class="slider">
                <div class="slide active" id="rohstoffe">
                    <h2>Rohstoffe</h2>
                    <video class="animation-video" id="animation-video" controls>
                        <source src="videos/rohstoffe.mp4" type="video/mp4">
                        Dein Browser unterstützt dieses Video-Format nicht.
                    </video>
                    <p>Wasserstoff wird als Rohstoff in der Chemie verwendet, z.B. in der Herstellung von Ammoniak.</p>
                </div>
                <div class="slide" id="maschinen">
                    <h2>Maschinen und Geräte</h2>
                    <video class="animation-video" id="animation-video" controls>
                        <source src="videos/maschinen.mp4" type="video/mp4">
                        Dein Browser unterstützt dieses Video-Format nicht.
                    </video>
                    <p>Wasserstoffbetriebene Maschinen bieten eine emissionsfreie Alternative.</p>
                </div>
                <div class="slide" id="waerme">
                    <h2>Industrielle Wärme</h2>
                    <video class="animation-video" id="animation-video" controls>
                        <source src="videos/industrielle-waerme.mp4" type="video/mp4">
                        Dein Browser unterstützt dieses Video-Format nicht.
                    </video>
                    <p>Wasserstoff kann zur Bereitstellung von hochtemperaturindustrieller Wärme verwendet werden.</p>
                </div>
            </div>
            <button class="slider-btn next-btn">&#8594;</button>
            <audio id="click-sound" src="ton/click-sound.mp3" preload="auto"></audio>
        </div>

        <section class="stand-prognose">
			<h2 style="text-align: center;">Heutiger Stand und zukünftige Prognose</h2>
			<div class="text-kategorie">
            <p>
                Im Moment verwenden viele Fabriken noch Kohle, Erdgas und Öl, um Energie zu erzeugen und Sachen herzustellen. 
				Diese Brennstoffe sind billig, aber sie setzen viel CO₂ frei, das die Erde wärmer macht und den Klimawandel verstärkt. 
				Besonders in der Stahl- und Zementindustrie ist es schwer, die CO₂-Emissionen zu vermeiden. Aber Wasserstoff könnte helfen, die CO₂-Emissionen zu reduzieren. 
				Er ist sauber, weil er beim Verbrennen kein CO₂ produziert, und er ist vielseitig einsetzbar.
				Wasserstoff ist wichtig, wenn wir klimaneutral werden wollen. Besonders in Prozessen, bei denen sehr hohe Temperaturen benötigt werden, 
				kann Wasserstoff eine gute Alternative zu fossilen Brennstoffen sein. Wasserstoff könnte also viele schädliche Brennstoffe ersetzen und so dazu beitragen, dass weniger CO₂ in die Luft kommt.
            </p>
			</div>
        </section>
		
    </main>	
<div class="walter-container">
			<img src="bilder/walter/walter-vorne.png" alt="Walter" class="walter-img">
			<div class="sprechblase">Klick mich!</div>
		</div>
    <footer>
        &copy; 2024 Wasserstoff Lernplattform
    </footer>

    <!-- JavaScript -->
    <script>
        	// Nav Bar einbinden
fetch('navbar.html')
    .then(response => response.text())
    .then(data => {
        // Navbar in das Placeholder-Div einfügen
        document.getElementById('navbar-placeholder').innerHTML = data;

        // Event Listener für den Audio-Button setzen
        const audioBtn = document.querySelector('#audio-btn');
        const Klingelton = new Audio('ton/atmo2.mp3');
        
        audioBtn.addEventListener('click', function MusikAnAus() {
            if (!Klingelton.paused) {
                Klingelton.pause();
            } else {
                Klingelton.play();
                Klingelton.loop = true; // Endlosschleife aktivieren
            }
        });
    })
    .catch(error => console.error('Fehler beim Laden der Navbar:', error));

        // Slider-Funktionalität
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function updateSlider() {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentIndex);
            });
        }

        document.querySelector('.next-btn').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
            document.getElementById('click-sound').play();
        });

        document.querySelector('.prev-btn').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
            document.getElementById('click-sound').play();
        });

        updateSlider();


		let isSpeaking = false; // Variable, um den aktuellen Zustand der Vorlesefunktion zu verfolgen

		// Funktion für Text-to-Speech
		function vorlesen(text) {
			const synth = window.speechSynthesis;

			// Wenn bereits gesprochen wird, abbrechen
			if (isSpeaking) {
				synth.cancel(); // Stoppt das Vorlesen
				isSpeaking = false; // Setze den Zustand auf "nicht sprechen"
				return; // Beende die Funktion
			}

			const utterance = new SpeechSynthesisUtterance(text);

			// Optional: Stimme und Einstellungen
			utterance.lang = "de-DE"; // Deutsch
			utterance.pitch = 2;      // Tonhöhe
			utterance.rate = 1.2;     // Geschwindigkeit

			synth.speak(utterance); // Startet das Vorlesen
			isSpeaking = true; // Setze den Zustand auf "sprechen"
		}


		// Event-Listener für das Schaf
		document.querySelector('.sheep-img').addEventListener('click', () => {
			const prognoseText = document.getElementById('prognose-text').innerText; // Text aus dem Abschnitt holen
			vorlesen(prognoseText); // Vorlesen starten oder stoppen
		});


       // Wolken erstellen
        const maxWolken = 10;

        function erzeugeWolke() {
            if (document.querySelectorAll('.wolke').length >= maxWolken) return;

            const wolke = document.createElement('img');
            wolke.src = 'bilder/wolke4.png';
            wolke.classList.add('wolke');

            const zufaelligeHoehe = Math.random() * window.innerHeight * 0.4;
            const zufaelligeGroesse = Math.random() * 100 + 100;
            wolke.style.top = `${zufaelligeHoehe}px`;
            wolke.style.width = `${zufaelligeGroesse}px`;

            const dauer = Math.random() * 20 + 20;
            wolke.style.animation = `fliegeNachRechts ${dauer}s linear forwards`;

            document.getElementById('himmel').appendChild(wolke);

            wolke.addEventListener('animationend', () => {
                wolke.remove();
            });
        }

        setInterval(erzeugeWolke, Math.random() * 2000 + 2000);
        
    </script>
</body>
</html>

