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
		
		.PUNKT{
			height: 25px;
			width: 25px;
			border-radius: 40%;
			background-color: lightgrey;
			z-index: 3;
		}
		
		.NORDEUROPA{
			position:absolute;
			top: 22%;
			left:63%;
		}
		
		.INFONORDEUROPA{
			position: absolute;
			top: 22%;
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
		
		.SIBIRIEN{
			position:absolute;
			top: 28%;
			left:73%;
		}
		
		.INFOSIBIRIEN{
			position: absolute;
			top: 28%;
			left:73%;
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
		
		.CHINA{
			position:absolute;
			top: 30%;
			left:79%;
		}
		
		.INFOCHINA{
			position: absolute;
			top: 30%;
			left:79%;
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
		
		.SUEDOSTASIEN{
			position:absolute;
			top: 60%;
			left:85%;
		}
		
		.INFOSUEDOSTASIEN{
			position: absolute;
			top: 60%;
			left:85%;
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
		
		.ANTARKTISOST{
			position:absolute;
			bottom:10%;
			right:25%;
		}
		
		.INFOANTARKTISOST{
			position: absolute;
			bottom:10%;
			right:25%;
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
		
		.ANTARKTISMITTE{
			position:absolute;
			bottom:10%;
			right:35%;
		}
		
		.INFOANTARKTISMITTE{
			position: absolute;
			bottom:10%;
			right:35%;
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
		
		.ANTARKTISWEST{
			position:absolute;
			bottom:10%;
			left:53%;
		}
		
		.INFOANTARKTISWEST{
			position: absolute;
			bottom:10%;
			left:53%;
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
		
		.CHILE{
			position:absolute;
			top: 70%;
			left:45%;
		}
		
		.INFOCHILE{
			position: absolute;
			top: 70%;
			left:45%;
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
		
		.AMAZONAS{
			position:absolute;
			top: 61%;
			left:47%;
		}
		
		.INFOAMAZONAS{
			position: absolute;
			top: 61%;
			left:47%;
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
		
		.ATLANTIK{
			position:absolute;
			top: 42%;
			left:48%;
		}
		
		.INFOATLANTIK{
			position: absolute;
			top: 42%;
			left:48%;
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
		
		.KANADAOST{
			position:absolute;
			top: 30%;
			left:38%;
		}
		
		.INFOKANADAOST{
			position: absolute;
			top: 30%;
			left:38%;
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
		
		.KANADAWEST{
			position:absolute;
			top: 30%;
			left:42%;
		}
		
		.INFOKANADAWEST{
			position: absolute;
			top: 30%;
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
		
		.LABRADOR{
			position:absolute;
			top: 25%;
			left:48%;
		}
		
		.INFOLABRADOR{
			position: absolute;
			top: 25%;
			left:48%;
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
		
		.GROENLAND{
			position:absolute;
			top: 22%;
			left:53%;
		}
		
		.INFOGROENLAND{
			position: absolute;
			top: 22%;
			left:53%;
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
		
		.ARKTIS{
			position:absolute;
			top: 16%;
			left:59%;
		}
		
		.INFOARKTIS{
			position: absolute;
			top: 16%;
			left:59%;
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
				
		.AFRIKA{
			position:absolute;
			top: 51%;
			left:62%;
		}
		
		.INFOAFRIKA{
			position: absolute;
			top: 51%;
			left:62%;
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

		
		<div class="PUNKT NORDEUROPA"></div>
		<div class="PUNKT SIBIRIEN"></div>
		<div class="PUNKT CHINA"></div>
		<div class="PUNKT SUEDOSTASIEN"></div>
		<div class="PUNKT ANTARKTISOST"></div>
		<div class="PUNKT ANTARKTISMITTE"></div>
		<div class="PUNKT ANTARKTISWEST"></div>
		<div class="PUNKT CHILE"></div>
		<div class="PUNKT AMAZONAS"></div>
		<div class="PUNKT ATLANTIK"></div>
		<div class="PUNKT KANADAWEST"></div>
		<div class="PUNKT KANADAOST"></div>
		<div class="PUNKT LABRADOR"></div>
		<div class="PUNKT GROENLAND"></div>
		<div class="PUNKT ARKTIS"></div>
		<div class="PUNKT AFRIKA"></div>
		
		
		<div class="INFONORDEUROPA">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOSIBIRIEN">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOCHINA">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOSUEDOSTASIEN">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOANTARKTISOST">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOANTARKTISMITTE">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOANTARKTISWEST">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOCHILE">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOAMAZONAS">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOATLANTIK">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOKANADAWEST">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOKANADAOST">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOLABRADOR">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOGROENLAND">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOARKTIS">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
		<div class="INFOAFRIKA">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
		</div>
		
			
    </main>
	
	
	<script>
  		//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
		document.querySelector('.NORDEUROPA').addEventListener('mouseover',ZeigeNordeuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
			document.querySelector('.NORDEUROPA').addEventListener('mouseout',NordeuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				
			function ZeigeNordeuropa() {
				document.querySelector(".INFONORDEUROPA").classList.add("ZEIGEN");
			}
			function NordeuropaAus() {
				document.querySelector(".INFONORDEUROPA").classList.remove("ZEIGEN");
			} 
		
		
		document.querySelector('.SIBIRIEN').addEventListener('mouseover',ZeigeSibirien);   	
			document.querySelector('.SIBIRIEN').addEventListener('mouseout',SibirienAus);		
				
			function ZeigeSibirien() {
				document.querySelector(".INFOSIBIRIEN").classList.add("ZEIGEN");
			}
			function SibirienAus() {
				document.querySelector(".INFOSIBIRIEN").classList.remove("ZEIGEN");
			} 
    
		
		document.querySelector('.CHINA').addEventListener('mouseover',ZeigeChina);   	
			document.querySelector('.CHINA').addEventListener('mouseout',ChinaAus);		
				
			function ZeigeChina() {
				document.querySelector(".INFOCHINA").classList.add("ZEIGEN");
			}
			function ChinaAus() {
				document.querySelector(".INFOCHINA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.SUEDOSTASIEN').addEventListener('mouseover',ZeigeSuedostasien);   	
			document.querySelector('.SUEDOSTASIEN').addEventListener('mouseout',SuedostasienAus);		
				
			function ZeigeSuedostasien() {
				document.querySelector(".INFOSUEDOSTASIEN").classList.add("ZEIGEN");
			}
			function SuedostasienAus() {
				document.querySelector(".INFOSUEDOSTASIEN").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISOST').addEventListener('mouseover',ZeigeAntarktisOst);   	
			document.querySelector('.ANTARKTISOST').addEventListener('mouseout',AntarktisOstAus);		
				
			function ZeigeAntarktisOst() {
				document.querySelector(".INFOANTARKTISOST").classList.add("ZEIGEN");
			}
			function AntarktisOstAus() {
				document.querySelector(".INFOANTARKTISOST").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISMITTE').addEventListener('mouseover',ZeigeAntarktisMitte);   	
			document.querySelector('.ANTARKTISMITTE').addEventListener('mouseout',AntarktisMitteAus);		
				
			function ZeigeAntarktisMitte() {
				document.querySelector(".INFOANTARKTISMITTE").classList.add("ZEIGEN");
			}
			function AntarktisMitteAus() {
				document.querySelector(".INFOANTARKTISMITTE").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISWEST').addEventListener('mouseover',ZeigeAntarktisWest);   	
			document.querySelector('.ANTARKTISWEST').addEventListener('mouseout',AntarktisWestAus);		
				
			function ZeigeAntarktisWest() {
				document.querySelector(".INFOANTARKTISWEST").classList.add("ZEIGEN");
			}
			function AntarktisWestAus() {
				document.querySelector(".INFOANTARKTISWEST").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.CHILE').addEventListener('mouseover',ZeigeChile);   	
			document.querySelector('.CHILE').addEventListener('mouseout',ChileAus);		
				
			function ZeigeChile() {
				document.querySelector(".INFOCHILE").classList.add("ZEIGEN");
			}
			function ChileAus() {
				document.querySelector(".INFOCHILE").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   	
			document.querySelector('.AMAZONAS').addEventListener('mouseout',AmazonasAus);		
				
			function ZeigeAmazonas() {
				document.querySelector(".INFOAMAZONAS").classList.add("ZEIGEN");
			}
			function AmazonasAus() {
				document.querySelector(".INFOAMAZONAS").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   	
			document.querySelector('.AMAZONAS').addEventListener('mouseout',AmazonasAus);		
				
			function ZeigeAmazonas() {
				document.querySelector(".INFOAMAZONAS").classList.add("ZEIGEN");
			}
			function AmazonasAus() {
				document.querySelector(".INFOAMAZONAS").classList.remove("ZEIGEN");
			}
		
    </script>
	
	<?php include '../include/footer.php'; ?>
	
</body>
</html>

