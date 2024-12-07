<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Windräder bauen</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		.WELTKARTE{
			position:absolute;
			top:20%;
			left:5%;
			height:70%;
			width:auto;
			z-index: 1;
			}
		
		.WINDRAD{
			position:relative;
			right: 15%;
			height:20%;
			width:auto;
			z-index: 4;
			
		}
		
		.DROP-ELEMENT {
			margin: 20px 0;
			height: 200px;
			width: 200px;
			background-color: white;
			z-index: 3;
		}
		.DRAG-ELEMENT {
			float: left;
			height: 100px;
			width: 100px;
			background-color: purple;
			border-radius: 100%;
			cursor: pointer;
			z-index: 4;
		}

	</style>
</head>

<body>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>
	
	
<!-- Navigation einbinden -->
		  <nav class="navbar-custom">

				<!-- Branding -->
				<a class="navbar-brand" href="../missionsstart.php">Die Energieretter</a>

				<!-- Hauptmenü -->
				<div class="menu">


					<a href="../../index.php" class="menu-link menu-item">Vorspann</a>


					<div class="dropdown menu-item">
						<button class="dropbtn menu-link">Mission</button>
						<div class="dropdown-content">
							<a href="../superhelden.php">Die Superhelden</a>
							<a href="../missionsstart.php">Missionsstart</a>
							<a href="../codeeingabe.php">Spiel fortsetzen</a>
						</div>
					</div>

					<!-- Dropdown-Menü -->
					<div class="dropdown menu-item" style="margin-right: 50px;">
						<button class="dropbtn menu-link">Retterwissen</button>
						<div class="dropdown-content">
							<a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
							<a href="../retterwissen/innovationen.php">Innovationen</a>
							<a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
						</div>
					</div>
				</div>
			</nav>

		
    <main>
		
		
		<img class="WELTKARTE" src="../../images/Weltkarte_rot.png" alt="Weltkarte in alarm-rot">
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGA' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGB' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGC' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		
		<div class='DROP-ELEMENT' id='DROPA'></div>
		<div class='DROP-ELEMENT' id='DROPB'></div>
		<div class='DROP-ELEMENT' id='DROPC'></div>
		
		
			
    </main>
	
			
	<script>
		document.querySelector('#DRAGA').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGB').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGC').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPA').addEventListener('drop',ElementAblegen);
		document.querySelector('#DROPB').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPB').addEventListener('drop',ElementAblegen);
		document.querySelector('#DROPC').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPC').addEventListener('drop',ElementAblegen);
		document.querySelector('button').addEventListener('click',AblagePruefen);
		
		function ElementAufheben() {
			event.dataTransfer.setData('text/plain',event.target.id);										// setzt das Drag-Element (Datentyp und Datenwert)
		}
		function AblegenErlauben() {
			if (event.target.classList.contains('DROP-ELEMENT') &&											// wenn das Ziel ein Drop-Element ist und
				! event.target.classList.contains('DRAG-ELEMENT')) {										// wenn das Ziel kein Drag-Element ist
				event.preventDefault();																		// dann ist Ablegen erlaubt, durch Verhindern der Default-Aktion des Events ("Öffnen als Link")
			}
		}
		function ElementAblegen() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			alert('Kreis abgelegt');																		// Platzhalter für weitere Anweisungen
		}
		function AblagePruefen() {
			alert(document.querySelectorAll('.DROP-ELEMENT > .DRAG-ELEMENT').length);						// zählt alle abgelegte Elemente
		}
		
		// mögliche Events für das Drag-Element: dragstart, drag, dragend
		// mögliche Events für das Drop-Element: dragenter, dragover, dragleave, drop
		// erforderliche Events: dragstart, dragover, drop
		// alle Events sind für Touch-Geräte nicht geeignet
		
	</script>
		
	

    <!-- Einbinden des Footers -->
    <footer class="footer-custom">
    <div class="footer-links">
        <a href="../impressum/impressum.php">Impressum</a>
    </div>
</footer>
   
    
    
</body>
</html>

