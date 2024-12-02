<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../include/css/styles.css">

	<style>
		
		.WELTBLAU{
			position:absolute;
			top:25%;
			left:0%;
			height:50%;
			width:auto;
			}
		
		.HERO{
			position:absolute;
			top: 50%;
			left: 53%;
			height:40%;
			}
		
		.SPRECHBLASE {
			position: absolute;
			padding: 30px;
			top: 25%;
			left:70%;
			height:30%;
			width: 20%;
			border-radius: 70px 70px 70px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: verdana;
			font-size: 1rem;
			color:#285238;
			text-align: left;
			visibility: visible;
			}		

	</style>
</head>

<body>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
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
		
		
			<img class="WELTBLAU" src="../images/Weltkarte_blau.png" alt="Weltkarte in hellblau">
			
			<img class="HERO" src="../images/Biest.png">
			

			<div class="SPRECHBLASE">
				Hallo!
			</div>	
		
			
    </main>

    <!-- Einbinden des Footers -->
    <footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>
   
    
    
</body>
</html>

