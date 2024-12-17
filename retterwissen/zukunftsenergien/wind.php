<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

	<style>
		main{
			background-color: #b9e5ef;
			overflow: hidden; /* Verhindert das Scrollen der Seite */
		}	
		
		h1{
			font-family: verdana;
			color:#285238;
			font-size: 2rem;
			padding-top: 0px;
		}
		
		details {
				background: #eee; 
				border: 1px solid #e8a723;
				border-radius: 3px; 
                margin-bottom: 1.5rem;
		}
		
		summary {
			background: #e8a723;
			color: #fff;
			cursor: pointer; 
                padding: 1rem;
		}

		/* Der verzögerungseffekt */
		details[open] summary ~ * {
                animation: sweep .7s ease-in-out;
        }

        @keyframes sweep {
            0%    {opacity: 0; margin-left: -20px}
            100%  {opacity: 1; margin-left: 0px}
        }

		.HERO{
			position:absolute;
			bottom:4%;
			left: 2%;
			height:30%;
			}
		
		.SPRECHBLASE {
			position: absolute;
			padding-top: 5px;
			padding-bottom: 15px;
			padding-left: 15px;
			padding-right: 15px;
			bottom:25%;
			left:12%;
			height:27%;
			width: 12%;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: verdana;
			font-size: 1rem;
			color:#285238;
			text-align: left;
			visibility: visible;
			}
		
		.SPRECHBLASEWEITER {
			position: absolute;
			padding-top: 5px;
			padding-bottom: 15px;
			padding-left: 15px;
			padding-right: 15px;
			bottom:25%;
			left:12%;
			height:18%;
			width: 12%;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: verdana;
			font-size: 1rem;
			color:#285238;
			text-align: left;
			visibility: hidden;
			}
		
		.LOS{
			position: absolute;
			bottom: 5%;
			right: 5%;
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
		
		.PFEIL-LI{
			position: absolute;
			bottom:5%;
			left:5%;
			height:15%;
			width:auto;
		}
		
		.PFEIL-RE{
			position: absolute;
			bottom:5%;
			right:5%;
			height:10%;
			width:auto;
		}
		
		.HEADER{
			position: absolute;
			top: 16%;
			left: 8%;
			font-family: "bangers";
			color: #285238;
			font-size: 5rem;
			}
		
		.WINDRAD{
			position:absolute;
			bottom:-4%;
			left: -10%;
			height:40%;
			width:auto;
			}
		
		.AKKORDEON-INHALT {
			padding: 1rem 1rem 1px 1rem;
            color: black;
        }

        .AKKORDEON-INHALT p:hover {
            color: yellow;
        }
		
		.AKKORDEON {
			position: absolute;
			top: 26%;
			right: 15%;
			width: 25%;
			}
		
		zoom-in-zoom-out{
			animation: zoom-in-zoom-out 2s ease infintiy;
		}
		
		@keyframes zoom-in-zoom-out {
			  0% {
				transform: scale 1;
			  }
			  50% {
				transform: scale 1.5;
			  }
			  100% {
				transform: scale 1;
			  }
			}
		
		.ZEIGEN{
			visibility: visible;
		}
		
		.WEG{
			visibility: hidden;
		}

	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
	
    <main>

		<div class="HEADER"> Retterwissen <br> 
		                     Windkraft</div>
		<img class="WINDRAD" src="../../images/Windenergie.png" alt="Landschaft mit Windrädern">
		
		
		<img class="HERO" src="../../images/BadGirl.png" alt="Scarlett Shade">
	
		<div class="SPRECHBLASE">
			
			<p>Hallo! <br> <br>
				Toll, dass du mehr über Windenergie lernen willst.<br> <br>
				Windenergie ist einer der wichtigsten Sachen in der Enerige und versorgt und durch
				Windstöße und Windkraftanlagen und ist daher für die Zukunft extrem wichtig.</p>
			
			<img class="PFEIL-RE" src="../../images/pfeil_rechts.png" alt="Roter Pfeil nach rechts">
		</div>	
		
		<div class="SPRECHBLASEWEITER">
			
			<p>Ich habe dir hier einige interessante Themen reinfliegen lassen. Klick einfach drauf und stöber rum. <br> <br> 
				Viel Spaß beim Lernen!.</p>
			
			<img class="PFEIL-LI" src="../../images/pfeil_links.png" alt="Roter Pfeil nach links">
			
		</div>
		
		<div class="AKKORDEON">
			<details>
				<summary>Was ist Windenergie?</summary>
				<div class="AKKORDEON-INHALT">
					<p>Was ist Windenergie? Eine grundlegende Einführung.</p>
				</div>
			</details>
			<details>
				<summary>Was sind Windkraftanlagen?</summary>
				<div class="AKKORDEON-INHALT">
					<p>Wie funktionieren Windkraftanlagen?</p>
				</div>
			</details>
			<details>
				<summary>Wasserkraft und Umwelt</summary>
				<div class="AKKORDEON-INHALT">
					<p>Vorteile von Windenergie für die Umwelt.</p>
				</div>
			</details>
			<details>
				<summary>Zukunft</summary>
				<div class="AKKORDEON-INHALT">
					<p>Die Rolle der Windenergie in der Energiewende.</p>
				</div>
			</details>
		</div>
			
    </main>
	
	
	<script>
		document.querySelector(".PFEIL-RE").addEventListener("click", ZeigeSprechblaseWeiter);
		
		function ZeigeSprechblaseWeiter(){
			document.querySelector(".SPRECHBLASE").classList.add("WEG");
			document.querySelector(".SPRECHBLASEWEITER").classList.add("ZEIGEN");
		}
		
		document.querySelector(".PFEIL-LI").addEventListener("click", ZeigeSprechblase);
		
		function ZeigeSprechblase(){
			document.querySelector(".SPRECHBLASE").classList.remove("WEG");
			document.querySelector(".SPRECHBLASEWEITER").classList.remove("ZEIGEN");
		}
	</script>
	
</body>
</html>


