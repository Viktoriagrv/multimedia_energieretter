<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Code-Eingabe</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Einbinden der CSS-Datei -->
    <!--<link rel="stylesheet" href="../include/css/styles.css"> <!-- Pfad zu deiner CSS-Datei -->

    <!-- Einbinden der Navigationsleiste -->
    <?php include '../include/partials/nav.php'; ?>
	
	<style>
		/*.NEXT{flex-direction: row;
			}
		
		.HERO{
			justify-content: center;
			flex-grow: 1;
			position: sticky;
			top: 15rem;
			margin: 5rem;
			}
		
		.WELTBLAU{
			justify-content: flex-start;
			top: 15rem;
			flex-grow: 2;
			
			}*/
		
		.SPRECHBLASE {
			justify-content: flex-end;
			flex-grow: 1;
			position: sticky;
			padding: 30px;
			top: 15rem;
			height:400px;
			width: 650px;
			border-radius: 70px 70px 70px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: visible;
			}		

	</style>
</head>

<body>
    <main>
		
		<div class="NEXT">
			<div class="WELTBLAU">
				<img src="../images/Weltkarte_blau.png" alt="Weltkarte in hellblau">
			</div>
			<div class="HERO">
				<img src="../images/AquaBoy.png"
			</div>

			<div class="SPRECHBLASE">
				Hallo!
			</div>	
		</div>
			
    </main>

    <!-- Einbinden des Footers -->
    <?php include '../include/partials/footer.php'; ?>

   
    
    
</body>
</html>
