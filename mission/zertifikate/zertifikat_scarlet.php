<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Zertifikat</title>
	
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		.ZERTIFIKAT{
			position: absolute;
			top:5%;
			left: 19%;
			height:auto;
			width:70%;
		}
		
		.BTNNEUSTART{
			position:absolute;
			bottom: 3%;
			right: 20%;
			padding: 8px;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
			z-index:4;
			}
		
		.BTNNEUSTART:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
		
		.BTNDOWNLOAD{
			position:absolute;
			bottom: 3%;
			left: 27%;
			padding: 8px;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
			z-index:4;
			}
		
		.BTNDOWNLOAD:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
			
	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
	<main>
		
		<img class="WELTKARTE" src="../../images/Weltkarte.png" alt="Weltkarte">
	
		<div class="INFOBOX-KLIMA">
			
			<img  class="ZERTIFIKAT" src="../../images/urkunde_scarlet.png" alt="Urkunde als Energieretter">
			<br>
			<a href="../../images/urkunde_scarlet.pdf" download><button class="BTNDOWNLOAD">Download Urkunde</button></a>
			<button class="BTNNEUSTART" onclick="window.location.href='../superhelden.php'">Spiel neu starten</button>
			
		</div>
		
	</main>	
	
</body>
</html>

