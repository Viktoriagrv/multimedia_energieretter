<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../css/styles.css">

	<style>
		
		.WELT{
			position:absolute;
			bottom:12%;
			right:2%;
			height:70%;
			width:auto;
			}
		
		.HERO{
			position:absolute;
			bottom:15%;
			left: 3%;
			height:30%;
			}
		
		.SPRECHBLASE {
			position: absolute;
			padding: 30px;
			bottom:37%;
			left:15%;
			height:25%;
			width: 15%;
			border-radius: 70px 70px 70px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: verdana;
			font-size: 1rem;
			color:#285238;
			text-align: left;
			visibility: visible;
			}
		
		.LOS{
			position: relative;
			display: inline-block;
            padding: 10px 15px;
            font-family: 'Bangers';
            font-size: 1.5rem;
			text-decoration: none;
            color: white;
            background-color: #285238;
			border: 2px;
			border-color: white;
            border-radius: 8px;	
			cursor: pointer;
			
		}
		
		.WALDBRANDEUR{
			position:absolute;
			top: 35%;
			left:60%;
			height:4%;
			width:auto;
		}
		
		.INFOWALDBRANDEUR{
			position: absolute;
			top: 35%;
			left:63%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.WALDBRANDAUST{
			position:absolute;
			bottom: 25%;
			right: 10%;
			height:4%;
			width:auto;
		}
		
		.INFOWALDBRANDAUST{
			position: absolute;
			top: 35%;
			left:63%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.WALDBRANDSAM{
			position:absolute;
			bottom: 33%;
			left:46%;
			height:4%;
			width:auto;
		}
		
		.INFOWALDBRANDSAM{
			position: absolute;
			bottom: 33%;
			left:49%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.FLUTEUR{
			position:absolute;
			top: 30%;
			left:57%;
			height:4%;
			width:auto;
		}
		
		.INFOFLUTEUR{
			position: absolute;
			top: 30%;
			left:60%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.FLUTNAM{
			position:absolute;
			top: 38%;
			left:38%;
			height:4%;
			width:auto;
		}
		
		.INFOFLUTNAM{
			position: absolute;
			top: 38%;
			left:42%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ZEIGEN{
			visibility: visible;
		}


	</style>
</head>

<body>
	
	<?php include '../include/nav.php'; ?>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>
	
	
    <main>
		
		
		<img class="WELT" src="../images/Weltkarte_rot.png" alt="Weltkarte in alarm-rot">
			
		<img class="HERO" src="../images/BadGirl.png">
	
		<div class="SPRECHBLASE">
			
			<p>Hallo! Ich freue mich, dass du mit mir auf diese Mission gehen möchtest. ...</p>
			
			<button class="LOS" onclick="window.location.href='kapitel1/wind_scarlett.php'"> Auf geht's! </button>
		</div>	

		<img class="WALDBRANDEUR" src="../images/Waldbrand.png" alt="Brennender Wald">
		<img class="WALDBRANDAUST" src="../images/Waldbrand.png" alt="Brennender Wald">
		<img class="WALDBRANDSAM" src="../images/Waldbrand.png" alt="Brennender Wald">
		<img class="FLUTEUR" src="../images/Überflutung.png" alt="Landschaft mit Flutwelle">
		<img class="FLUTNAM" src="../images/Überflutung.png" alt="Landschaft mit Flutwelle">
		
		<div class="INFOWALDBRANDEUR">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOFLUTEUR">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOFLUTNAM">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOWALDBRANDSAM">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
			
    </main>
	
	
	<script>
  		//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
		document.querySelector('.WALDBRANDEUR').addEventListener('mouseover',ZeigeEuropaBrand);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
			document.querySelector('.WALDBRANDEUR').addEventListener('mouseout',EuropaBrandAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				
			function ZeigeEuropaBrand() {
				document.querySelector(".INFOWALDBRANDEUR").classList.add("ZEIGEN");
			}
			function EuropaBrandAus() {
				document.querySelector(".INFOWALDBRANDEUR").classList.remove("ZEIGEN");
			} 
		
		
		document.querySelector('.FLUTEUR').addEventListener('mouseover',ZeigeEuropaFlut);   	
			document.querySelector('.FLUTEUR').addEventListener('mouseout',EuropaFlutAus);		
				
			function ZeigeEuropaFlut() {
				document.querySelector(".INFOFLUTEUR").classList.add("ZEIGEN");
			}
			function EuropaFlutAus() {
				document.querySelector(".INFOFLUTEUR").classList.remove("ZEIGEN");
			} 
    
		
		document.querySelector('.FLUTNAM').addEventListener('mouseover',ZeigeNAmerikaFlut);   	
			document.querySelector('.FLUTNAM').addEventListener('mouseout',NAmerikaFlutAus);		
				
			function ZeigeNAmerikaFlut() {
				document.querySelector(".INFOFLUTNAM").classList.add("ZEIGEN");
			}
			function NAmerikaFlutAus() {
				document.querySelector(".INFOFLUTNAM").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.WALDBRANDSAM').addEventListener('mouseover',ZeigeSAmerikaBrand);   	
			document.querySelector('.WALDBRANDSAM').addEventListener('mouseout',SAmerikaBrandAus);		
				
			function ZeigeSAmerikaBrand() {
				document.querySelector(".INFOWALDBRANDSAM").classList.add("ZEIGEN");
			}
			function SAmerikaBrandAus() {
				document.querySelector(".INFOWALDBRANDSAM").classList.remove("ZEIGEN");
			} 
		
    </script>
	
	<?php include '../include/footer.php'; ?>
	
</body>
</html>

