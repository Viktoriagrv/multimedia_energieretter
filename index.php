<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.css">
	
	
	<style>	
		
		.STARTBUTTON{
			position: absolute;
			justify-content: center;
			background-color: transparent;
			border: 0;
			font-family:  "bangers";
			font-size: 12rem;
			line-height: 1.2;
			color: #e8a723;
			border: none;
			top: 25%;
			left: 20%;
			text-align: center;				
			width:60%;
			visibility: visible;
			transition-delay: 0s;
			}
		
		.WEG{
			visibility: hidden;
			}
		
		.KLEIN{
			position: absolute;
			top: 10%;
			left:20%;
			font-size: 5rem;
			}	
		
		
		.SCROLL{
			position: relative;
			justify-content: center;
			align-items:center;
			top: 4rem;
			width:800px;
			height:400px;
			background-color:transparent;
			font-family:verdana;
			font-size: 2rem;
			color:#FFFFFF;
			text-align: justify;
			overflow:hidden;
			visibility: hidden;
			opacity: 0;
			}
		
		
		
		.PAUSE{
			 position:absolute;
			bottom: 10%;
			left: 40%;
			height:5%;
			width: 20%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            font-family: 'Bangers', cursive;
			z-index: 5;
			visibility: hidden;
			}
		
		.ZEIGEN{
			transition-property: all;
			transition-delay: 1.5s;
			visibility: visible;
			opacity: 1;
			
			}
				
		.WELT{
			position:absolute;
			top: 20%;
			Left:35%;
			height: 60%;
			width:auto;
			visibility: hidden;
			}
		
		.GROSS{
			transition-delay: 1.5;
			visibility: visible;
			}
			
		</style>


</head>

<body>
       <!-- Hintergrundvideo -->
<video autoplay muted loop id="backgroundVideo">
    <source src="retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
    <source src="retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
</video>


    <!-- Navigation einbinden -->
  <nav class="navbar-custom">

    <!-- Branding -->
    <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
    
    <!-- Hauptmenü -->
    <div class="menu">

       
        <a href="../../index.php" class="menu-link menu-item">Vorspann</a>

        
        <div class="dropdown menu-item">
            <button class="dropbtn menu-link">Mission</button>
            <div class="dropdown-content">
                <a href="../../mission/superhelden.php">Die Superhelden</a>
                <a href="../../mission/missionsstart.php">Missionsstart</a>
                <a href="../../mission/codeeingabe.php">Code-Eingabe</a>
            </div>
        </div>
        
        <!-- Dropdown-Menü -->
        <div class="dropdown menu-item" style="margin-right: 50px;">
            <button class="dropbtn menu-link">Retterwissen</button>
            <div class="dropdown-content">
                <a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
                <a href="../../retterwissen/innovationen.php">Innovationen</a>
                <a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
            </div>
        </div>
    </div>
</nav>

	
		<main>
		
			
				<button id="START" class="STARTBUTTON">Die Welt ist <br> in Gefahr!</button>


				<div class="SCROLL" id="scrolltext"> 
					<p><br><br><br><br><br>
						Wir befinden uns im Jahr 2050. In der Vergangenheit haben die Menschen viel zu wenig Zunkunftsenergien genutzt. Die fossilen Brennstoffe haben unsere Umwelt verschmutzt. Nun breitet sich die Dunkelheit aus. Die Zukunft unserer Erde steht auf dem Spiel!<br><br>
						Aber zum Glück hast du die Chance, etwas zu verändern! Wähle dir einen Verbündeten und reise als Energieretter zurück in die Vergangenheit, um die Welt vor dieser düsteren Zukunft zu bewahren. Hier auf unserer Website kannst du entdecken, welche Energiequellen uns helfen, die Umwelt zu schützen – ob mit der Kraft der Sonne, dem Wind oder dem Wasser.<br><br>
						Bist du bereit für dieses Abenteuer? Begib dich auf eine spannende Reise, lerne die mächtigen Energien unserer Erde kennen, und hilf mit, eine bessere Zukunft zu gestalten. Werde ein wahrer Energieretter und schütze unseren Planeten!
						<br><br><br><br><br><br><br><br><br><br><br><br>
					</p>
					
				</div>
				
				<img class="WELT" src="images/weltkugel.png" alt="Weltkugel">
					
				<button class="PAUSE">Pause</button>
		
	
	</main>
			
	
	<script> 
		
		document.querySelector(".STARTBUTTON").addEventListener("click", TextStarten);
		document.querySelector(".PAUSE").addEventListener("click", TextPause);

			let timer1;
			let timer2;
			let textEnde = false; 															// prüft, ob der Text zu Ende ist

		// Funktion zum Starten des Textes
		function TextStarten(){
			document.querySelector(".STARTBUTTON").classList.add("KLEIN");
			document.querySelector(".SCROLL").classList.add("ZEIGEN");
			document.querySelector(".PAUSE").classList.add("ZEIGEN");
			document.querySelector("#scrolltext").scrollTop -=-1;

			// Startet den Timer, der den Text scrollen lässt
			timer1 = setInterval(scrollText, 60); 												// Text scrollt alle 60ms
			}

		// Funktion, die den Text kontinuierlich scrollt
		function scrollText() {
			let scrollTextElement = document.querySelector("#scrolltext");

			// Wenn das Ende des Textes erreicht ist, stoppt der Timer und ruft AbschlussStarten auf
			if (scrollTextElement.scrollTop + scrollTextElement.clientHeight >= scrollTextElement.scrollHeight) {
				clearInterval(timer1);
				if (!textEnde) {
					textEnde = true;
					AbschlussStarten();
					}
				} 

			else {
				scrollTextElement.scrollTop += 1; 											// Scrollt den Text um 1 Pixel
				}
			}
		

		// Funktion zum Pausieren des Textes
		function TextPause(){
			clearInterval(timer1); 															// Stoppt den Scroll-Timer
			}

		// Funktion, die nach dem Ende des Textes ausgeführt wird
		function AbschlussStarten(){
			document.querySelector(".STARTBUTTON").classList.add("WEG");
			document.querySelector(".SCROLL").classList.remove("ZEIGEN");
			document.querySelector(".PAUSE").classList.remove("ZEIGEN");
			document.querySelector(".WELT").classList.add("GROSS");
			document.querySelector(".BLASE").classList.add("ZEIGEN");
			}
			
	</script>

	
	
	<footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>
</body>
</html>
