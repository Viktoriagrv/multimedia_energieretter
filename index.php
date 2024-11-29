<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.css">
	
	
	<style>	
		
		.STARTBUTTON{
			position: sticky;
			justify-content: center;
			background-color: transparent;
			font-family:  "bangers";
			font-size: 12rem;
			line-height: 1.2;
			color: #e8a723;
			border: none;
			top: 5rem;
			align-items: center;
			text-align: center;
			background-color: transparent;
			border: 0;
			transition: all 1s;
			width:800px;
			}
		
		.KLEIN{
			position: relative;
			top: 2rem;
			font-size: 5rem;
			
			}	
		

		#scrolltext {
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
			}
		
		
		.scroll{
			visibility: hidden;
			}
		
		.WELT{
			position:absolute; 
			left:25%;
			width: 50%;
			height: auto;
			}
		
		.PAUSE{
			 position:absolute;
			bottom: 8%;
			left: 40%;
			height:5%;
			width: 20%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            font-family: 'Bangers', cursive;
			z-index: 5;
			visibility: hidden;
			}
		
		.ZEIGEN{
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
		
			<div>
				<button id="START" class="STARTBUTTON">Die Welt ist <br> in Gefahr!</button>


				<div class="scroll" id="scrolltext"> 
					<p><br><br>
						Wir befinden uns im Jahr 2050. In der Vergangenheit haben die Menschen viel zu wenig Zunkunftsenergien genutzt. Die fossilen Brennstoffe haben unsere Umwelt verschmutzt. Nun breitet sich die Dunkelheit aus. Die Zukunft unserer Erde steht auf dem Spiel!<br><br>
						Aber zum Glück hast du die Chance, etwas zu verändern! Wähle dir einen Verbündeten und reise als Energieretter zurück in die Vergangenheit, um die Welt vor dieser düsteren Zukunft zu bewahren. Hier auf unserer Website kannst du entdecken, welche Energiequellen uns helfen, die Umwelt zu schützen – ob mit der Kraft der Sonne, dem Wind oder dem Wasser.<br><br>
						Bist du bereit für dieses Abenteuer? Begib dich auf eine spannende Reise, lerne die mächtigen Energien unserer Erde kennen, und hilf mit, eine bessere Zukunft zu gestalten. Werde ein wahrer Energieretter und schütze unseren Planeten!				 
					</p>
					 <img class="WELT" src="images/weltkugel.png" alt="Weltkugel">
				</div>
	
			</div>
		</main>
	
			<button class="PAUSE">Pause</button>
	
	
	<script> 
		
		document.querySelector("#START").addEventListener("click",TextStarten);
		document.querySelector(".PAUSE").addEventListener("click",TextPause);

				
		function TextStarten(){
			document.querySelector(".STARTBUTTON").classList.add("KLEIN");
			document.querySelector(".scroll").classList.add("ZEIGEN");
			document.querySelector(".PAUSE").classList.add("ZEIGEN");
			document.querySelector("#scrolltext").scrollTop -=-1;
			timer1 = setTimeout('TextStarten("'+scrolltext+'", '+-1+')', "60");
			}
		
		function TextPause(){
			clearTimeout(timer1);
					
			}
			
	</script>

	
	
	<footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>
</body>
</html>
