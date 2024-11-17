<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">		<!-- Einbinden der Google Fonts -->   
    <link rel="stylesheet" href="../include/css/styles.css"> 											<!-- Einbinden der CSS-Datei -->

    <style>
		
		.Schriftzug{
			
			left: 10px;
			font-family: "bangers";
			font-size: 100px;
			color: #e8a723;
			line-height: 1.1;
			top: 50px;
			}
		
		
		
		.BADGIRL {
			position: absolute;
			top: 10px;
			left: 200px;
			height: 30px;
		}
		
		.PRINZ {
			position: absolute;
			top: 10px;
			left: 500px;
		}
		
		.PRINZESSIN {
			position: absolute;
			top: 10px;
			left: 800px;
		}
		
		.AQUABOY {
			position: absolute;
			top: 40px;
			left: 200px;
		}
		
		.BIEST {
			position: absolute;
			top: 40px;
			left: 500px;
		}
		
		.BADBOY {
			position: absolute;
			top: 40px;
			left: 800px;
		}
		
		.INFOBADGIRL {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 400px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
		}
		
		.INFOPRINZ {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 100px;
			border-radius: 30px 30px 0 30px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
		}
		
		.INFOPRINZESSIN {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 100px;
			border-radius: 30px 30px 0 30px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
		}
		
		.INFOAQUABOY {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 100px;
			border-radius: 30px 30px 0 30px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
		}
		
		.INFOBIEST {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 100px;
			border-radius: 30px 30px 0 30px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
		}
		
		.INFOBADBOY {
			position: absolute;
			padding: 30px;
			top: 100px;
			left: 100px;
			border-radius: 30px 30px 0 30px;
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
			
		<div class= Schriftzug>
		WÄHLE DEINEN <br/> SUPERHELDEN
		</div>
		
		<div>
			<div class="BADGIRL">
				<img src=../images/BadGirl.png alt="Badgirl">
			</div>

			<div class="PRINZ">
				<img src=../images/Prinz.png alt="Prinz">
			</div>

			<div class="PRINZESSIN">
				<img src=../images/Prinzessin.png alt="Prinzessin">
			</div>
		</div>	
		
		<div>
			<div class="AQUABOY">
				<img src=../images/AquaBoy.png alt="Blauer Superheld">
			</div>

			<div class="BIEST">
				<img src=../images/Biest.png alt="Biest">
			</div>

			<div class="BADBOY">
				<img src=../images/BadBoy.png alt="BadBoy">
			</div>
		</div>
	
		<div class="INFOBADGIRL">
			BadGirl ist ein böses Mädchen
			<br><br>
			<button id="buttonBG">&times;</button>
		</div>

   		<div class="INFOPRINZ">
			Der Prinz ist ein Traum!
			<br><br>
			<button id="buttonPR">&times;</button>
		</div>
			
		<div class="INFOPRINZESSIN">
			Die Prinzessin ist ein Traum!
			<br><br>
			<button id="buttonPRS">&times;</button>
		</div>
			
		<div class="INFOAQUABOY">
			Die AquaBoy ist cool!
			<br><br>
			<button id="buttonAB">&times;</button>
		</div>
			
		<div class="INFOBIEST">
			Biest ist feurig!
			<br><br>
			<button id="buttonB">&times;</button>
		</div>
			
		<div class="INFOBADBOY">
			BadBoy ist ein böser Junge!
			<br><br>
			<button id="buttonBB">&times;</button>
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
