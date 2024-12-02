<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../include/css/styles.css">

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
    <footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>
   
    
    
</body>
</html>

