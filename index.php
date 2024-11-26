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


	<?php include 'include/partials/nav.php'; ?>
    
	
	<main>
		
			<div>
				<button id="START" class="STARTBUTTON">Die Welt ist <br> in Gefahr!</button>


				<div class="scroll" id="scrolltext"> 
					<p><br><br>Wir befinden uns im Jahr 2050. In der Vergangenheit haben die Menschen viel zu wenig Zunkunftsenergien genutzt. Die fossilen Brennstoffe haben unsere Umwelt verschmutzt. Nun breitet sich die Dunkelheit aus und nur die mutigsten Helden können uns retten. Steht auf, ihr Superhelden da draußen! Es ist Zeit zu kämpfen! Wähle dir einen Verbündeten und reise mit ihm zusammen in die Vergangenheit, um unsere Zukunft zu retten. Wir müssen die Hoffnung bewahren und die Energien bündeln. Gemeinsam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
					</p>
					<img src="images/weltkugel.png" alt="Weltkugel">
				</div>
	
			</div>
	</main>
	
	
	<script> 
		
		document.querySelector("#START").addEventListener("click",TextStarten);

				
		function TextStarten() {
			document.querySelector(".STARTBUTTON").classList.add("KLEIN");
			document.querySelector(".scroll").classList.add("ZEIGEN");
			document.querySelector("#scrolltext").scrollTop -=-1;
			timer1 = setTimeout('TextStarten("'+scrolltext+'", '+-1+')', "60");
			}
			
	</script>

	
	
	<?php include 'include/partials/footer.php'; ?>
</body>
</html>
