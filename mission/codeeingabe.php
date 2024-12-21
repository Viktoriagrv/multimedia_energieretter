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

    <style>
        
        .HELD-CODE{
			position:absolute;
			top:30%;
			left:10%;
			height: 60%;
            width: auto;
			}

        #sprechblase {
            position: absolute;
			top:20%;
			left: 30%;
            width:20%;
            height: auto;
            border-radius: 20px 20px 20px 0px;
            background-color: white;
            box-shadow: 5px 5px 10px 0px gray;
            padding: 20px;
            text-align: left;
            font-family: "open sans";
            font-size: 1.5rem;
			color: #285238; 
        }
  						
		.HEADER{
			position:absolute;
			top:25%;
			left:60%;
			font-family: "bangers";
			font-size:4rem;
			color: #e8a723;
		}

		.CODE{
			position: absolute;
			top:42%;
			left: 60%;
            border-radius: 15px;
            padding: 20px;
            max-width: 40%;
            text-align: left;
            font-family: "bangers";
            font-size: 2rem;
			color: #285238; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		}
		
		
		.EINGEBEN{
			position:absolute;
			top:55%;
			left: 60%;
            height: 5%;
            width: 10%;
            font-family: "bangers";
            font-size: 2rem;
			color: #e8a723;
			text-decoration: none;  
            background-color: #285238;
            border-radius: 10px;
        }
		
		.EINGEBEN:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
		}
        
    </style>
</head>

<body>
	
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
				<p class="HEADER">Gebe deinen Code ein:</p>
				<input class="CODE" value=''>
				<button class="EINGEBEN">Weiter</button>		
			</div>
                
        
    </main>

    <script>
		
		
		document.querySelector(".EINGEBEN").addEventListener('click',EingabeAuswerten);
		
		function EingabeAuswerten() {														// 		Funktion mit Verzweigung
			if (document.querySelector('input').value.toLowerCase() == 'xdf-338') {			//Überprüfung der Eingabe
				window.location.href = "kapitel2/solar_scarlett.php";															// Ausgabe bei positivem Ergebnis
				}
			else {
				alert('Der Code ist leider nicht richtig.');															// Ausgabe bei negativem Ergebnis
			}
		}
	
        
    </script>
		
</body>
</html>
