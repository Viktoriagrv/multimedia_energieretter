<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>

    
   
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">		<!-- Einbinden der Google Fonts -->   
    <link rel="stylesheet" href="../include/css/styles.css"> 											<!-- Einbinden der CSS-Datei -->

    <style>
		
		.Schriftzug{
			position:absolute;
			top: 150px;
			left: 30px;
			font-family: "bangers";
			font-size: 80px;
			color: #e8a723;
			line-height: 1.1;
			}
		
		.BILD{
			height: 200px;
			width: auto;
			}
		
		.BILDINFOBOX{
			height: 200px;
			width: auto;
			}
		
		.BADGIRL {
			position: absolute;
			top: 50px;
			left: 500px;
			}
		
		.PRINZ {
			position: absolute;
			top: 50px;
			left: 750px;
			}
		
		.PRINZESSIN {
			position: absolute;
			top: 50px;
			left: 1000px;
			}
		
		.AQUABOY {
			position: absolute;
			top: 300px;
			left: 500px;
			}
		
		.BIEST {
			position: absolute;
			top: 300px;
			left: 750px;
			}
		
		.BADBOY {
			position: absolute;
			top: 300px;
			left: 1000px;
			}
		
		.INFOBADGIRL {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOPRINZ {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOPRINZESSIN {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOAQUABOY {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOBIEST {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOBADBOY {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
	</style>
  
	<!-- Einbinden der Navigationsleiste -->
	<?php include '../include/partials/nav.php'; ?>
	
</head>

<body>	
	
	<main>
			
		<div class="Schriftzug">
		WÄHLE DEINEN <br/> SUPERHELDEN
		</div>
		
		<div>
			<div class="BADGIRL">
				<img class="BILD" src=../images/BadGirl.png alt="Badgirl">
			</div>

			<div class="PRINZ">
				<img class="BILD" src=../images/Prinz.png alt="Prinz">
			</div>

			<div class="PRINZESSIN">
				<img class="BILD" src=../images/Prinzessin.png alt="Prinzessin">
			</div>
		</div>	
		
		<div>
			<div class="AQUABOY">
				<img class="BILD" src=../images/AquaBoy.png alt="Blauer Superheld">
			</div>

			<div class="BIEST">
				<img class="BILD" src=../images/Biest.png alt="Biest">
			</div>

			<div class="BADBOY">
				<img class="BILD" src=../images/BadBoy.png alt="BadBoy">
			</div>
		</div>
	
		<div class="INFOBADGIRL">
			<img class="BILDINFOBOX" src=../images/BadGirl.png alt="Badgirl">
			<button id="buttonBG">&times;</button>
			BadGirl ist ein böses Mädchen
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>

   		<div class="INFOPRINZ">
			<img class="BILDINFOBOX" src=../images/Prinz.png alt="Prinz">
			<button id="buttonPR">&times;</button>
			Der Prinz ist ein Traum!
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOPRINZESSIN">
			<img class="BILDINFOBOX" src=../images/Prinzessin.png alt="Prinzessin">
			<button id="buttonPRS">&times;</button>
			Die Prinzessin ist ein Traum!
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOAQUABOY">
			<img class="BILDINFOBOX" src=../images/AquaBoy.png alt="Blauer Superheld">
			<button id="buttonAB">&times;</button>
			Der AquaBoy ist cool!
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOBIEST">
			<img class="BILDINFOBOX" src=../images/Biest.png alt="Biest">
			<button id="buttonB">&times;</button>
			Biest ist feurig!
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOBADBOY">
			<img class="BILDINFOBOX" src=../images/BadBoy.png alt="BadBoy">
			<button id="buttonBB">&times;</button>
			BadBoy ist ein böser Junge!
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
	
	</main>
	
    <script>
		
		document.querySelector('.BADGIRL').addEventListener('click',ZeigeBadGirl);
		document.querySelector('#buttonBG').addEventListener('click',BadGirlAus);
		
		document.querySelector('.PRINZ').addEventListener('click',ZeigePrinz);
		document.querySelector('#buttonPR').addEventListener('click',PrinzAus);
		
		document.querySelector('.PRINZESSIN').addEventListener('click',ZeigePrinzessin);
		document.querySelector('#buttonPRS').addEventListener('click',PrinzessinAus);
		
		document.querySelector('.AQUABOY').addEventListener('click',ZeigeAquaBoy);
		document.querySelector('#buttonAB').addEventListener('click',AquaBoyAus);
		
		document.querySelector('.BIEST').addEventListener('click',ZeigeBiest);
		document.querySelector('#buttonB').addEventListener('click',BiestAus);
		
		document.querySelector('.BADBOY').addEventListener('click',ZeigeBadBoy);
		document.querySelector('#buttonBB').addEventListener('click',BadBoyAus);
		
		
		function ZeigeBadGirl() {
			document.querySelector(".INFOBADGIRL").classList.add("SICHTBAR");
			}
		
		function BadGirlAus() {
			document.querySelector(".INFOBADGIRL").classList.remove("SICHTBAR");
			}
		
		
		function ZeigePrinz() {
			document.querySelector(".INFOPRINZ").classList.add("SICHTBAR");
			}
		
		function PrinzAus() {
			document.querySelector(".INFOPRINZ").classList.remove("SICHTBAR");
			}
		
		function ZeigePrinzessin() {
			document.querySelector(".INFOPRINZESSIN").classList.add("SICHTBAR");
			}
		
		function PrinzessinAus() {
			document.querySelector(".INFOPRINZESSIN").classList.remove("SICHTBAR");
			}
		
	
		function ZeigeAquaBoy() {
			document.querySelector(".INFOAQUABOY").classList.add("SICHTBAR");
			}
		
		function AquaBoyAus() {
			document.querySelector(".INFOAQUABOY").classList.remove("SICHTBAR");
			}
		
		function ZeigeBiest() {
			document.querySelector(".INFOBIEST").classList.add("SICHTBAR");
			}
		
		function BiestAus() {
			document.querySelector(".INFOBIEST").classList.remove("SICHTBAR");
			}
		
		
		function ZeigeBadBoy() {
			document.querySelector(".INFOBADBOY").classList.add("SICHTBAR");
			}
		
		function BadBoyAus() {
			document.querySelector(".INFOBADBOY").classList.remove("SICHTBAR");
			}
		
		
	</script>

    
	
 <!-- Einbinden des Footers -->
    <?php include '../include/partials/footer.php'; ?>
	   
   
</body>
</html>
