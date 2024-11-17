<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>

    
    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">		<!-- Einbinden der Google Fonts -->   
    <link rel="stylesheet" href="../include/css/styles.css"> 											<!-- Einbinden der CSS-Datei -->

    <style>
		
		.Schriftzug{
			
			left: 0px;
			font-family: "bangers";
			font-size: 100px;
			color: #e8a723;
			line-height: 1.1;
			}
		
		
		
		.BADGIRL {
			position: absolute;
			top: 200px;
			left: 400px;
		}
		
		.PRINZ {
			position: absolute;
			top: 200px;
			left: 800px;
		}
		
		.INFOBADGIRL {
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
		.SICHTBAR {
			visibility: visible;
		}
		
	</style>
  
	<!-- Einbinden der Navigationsleiste -->
	<?php include '../include/partials/nav.php'; ?>
	
</head>

<body>
		<main>
		<div class="BADGIRL">
			<img src=../images/BadGirl.png alt="Badgirl">
		</div>
			
		<div class="PRINZ">
			<img src=../images/Prinz.png alt="Prinz">
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
	
	</main>
	
    <script>
		
		document.querySelector('.BADGIRL').addEventListener('click',ZeigeBadGirl);
		document.querySelector('#buttonBG').addEventListener('click',BadGirlAus);
		
		document.querySelector('.PRINZ').addEventListener('click',ZeigePrinz);
		document.querySelector('#buttonPR').addEventListener('click',PrinzAus);
		
		
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
	
	</script>

    
	
 <!-- Einbinden des Footers -->
    <?php include '../include/partials/footer.php'; ?>
	   
   
</body>
</html>
