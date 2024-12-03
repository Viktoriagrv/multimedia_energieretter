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

        .helden-bereich{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            text-align: center;
       		}

        .helden-bild{
			position:absolute;
			top:25%;
			left:10%;
			height: 60%;
            width: auto;
			}

        #sprechblase {
            position: absolute;
			top:25%;
			left: 35%;
            background: rgba(255, 255, 255, 1);
            border-radius: 15px;
            padding: 20px;
            max-width: 300px;
            text-align: left;
            font-family: Verdana, Geneva, sans-serif;
            font-size: 1rem;
			color: #285238; 
            border: #333;
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
		
		.HEADER{
			position:absolute;
			top:25%;
			left:60%;
			font-family: "bangers";
			font-size:3rem;
			color: #e8a723;
			}

		.CODE{
			position: absolute;
			top:40%;
			left: 60%;
            border-radius: 15px;
            padding: 20px;
            max-width: 40%;
            text-align: left;
            font-family: "bangers";
            font-size: 2rem;
			color: #285238; 
            border: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			}
		
		
		.EINGEBEN{
			position:absolute;
			top:55%;
			left: 60%;
			font-family: verdana;
			color:#285238;
			background-color: white;
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
                    <a href="../../mission/codeeingabe.php">Spiel fortsetzen</a>
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
		<img class="helden-bild" src="../images/AquaBoy.png" alt="Superheld">
        <div class="helden-bereich">
            
            <div id="sprechblase">
                Du musstest während deiner Mission kurz weg? Kein Problem! 
                Du erinnerst dich bestimmt, dass du von deinem Superhelden einen Code bekommen hast. Gib diesen einfach ein und mach da weiter, wo du aufgehört hast.
            </div>
            
				
			<div>
				<p class="HEADER">Gebe deinen Code ein:</p>
				<input class="CODE" value=''>
				<button class="EINGEBEN">Weiter</button>		
			</div>
                
        
    </main>

    <script>
		
		
		document.querySelector(".EINGEBEN").addEventListener('click',EingabeAuswerten);
		
		function EingabeAuswerten() {														// 		Funktion mit Verzweigung
			if (document.querySelector('input').value.toLowerCase() == 'geht') {			//Überprüfung der Eingabe
				window.location.href = "missionsstart.php";															// Ausgabe bei positivem Ergebnis
				}
			else {
				alert('Der Code ist leider nicht richtig.');															// Ausgabe bei negativem Ergebnis
			}
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
