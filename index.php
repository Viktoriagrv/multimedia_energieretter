<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.css">
	
	
	<style>	
		button {
			background-color: transparent;
			font-family:  "bangers";								
			line-height: 1.2;
			color: #e8a723;
			border: none;
			z-index:3;
			}
		
		.STARTBUTTON{
			
			top:400px;
			left: 150px;
			font-size: 150px;
			align-items: center;
			opacity:0.96;
			text-align: center;
			line-height: 170px;
			backround-color: transparent;
			border: 0;
			transition: all 1s;
			
			}
		
		.KLEIN{
			top:50px;
			left: 150px;
			font-size: 50px;
			}	
		

		#scrolltext {
			top: 350px;
			left: 150px;
			width:950px;
			height:400px;
			background-color:transparent;
			font-family:verdana;
			font-size:30px;
			color:#FFFFFF;
			text-align: justify;
			overflow:hidden;
			z-index: 2;
			}
		
		.scrolltext{
			visibility: hidden;
		}
		
		.ZEIGEN{
			visibility: visible;
		}
			
		</style>


</head>

<body>

	<?php include 'include/partials/nav.php'; ?>
    
	
	<main>
		
			<div>
				<div class="STARTBUTTON"> <button id="START">Die Welt ist <br> in Gefahr! </button></div>


				<div id="scrolltext"> 
					<p class="scrolltext">Die Dunkelheit breitet sich aus und nur die mutigsten Helden können uns retten. Steht auf, ihr Superhelden! Es ist Zeit zu kämpfen! Wir müssen die Hoffnung bewahren und die Energien bündeln. Gemeinsam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
					</p>
				</div>
	
			</div>
	
	<script> 
		
		document.querySelector("#START").addEventListener("click",TextStarten);
		document.querySelector("#START").addEventListener("click",TitelKlein);
		document.querySelector("#START").addEventListener("click",TextZeigen);
		
		
		function TitelKlein(){
			document.querySelector(".STARTBUTTON").classList.add("KLEIN");
			}
		
		function TextZeigen(){
			document.querySelector(".scrolltext").classList.add("ZEIGEN");
			}
		
		function TextStarten() {
			document.querySelector("#scrolltext").scrollTop -=-1;
			timer1 = setTimeout('TextStarten("'+scrolltext+'", '+-1+')', "45", 8000);
			}
			
	</script>

	</main>
	
	<?php include 'include/partials/footer.php'; ?>
</body>
</html>
