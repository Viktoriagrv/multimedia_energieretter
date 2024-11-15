<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.css">
	
	<style type="text/css" media="screen">
		
		.main {
		  flex: 1;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  background-image: url("images/weltall/galxie_illustration.jpg");
		  background-size: cover;
		  background-position: center;
		 	}
		
		#TITEL{
			align-items: center;
			width: 1000px;
			font-family:  "bangers";
			font-size: 150px;
			color: #e8a723;
			text-align: center;
			line-height: 170px;
			}
		
		.STARTBUTTON{
			align-items: center;
			width: 1000px;
			height: auto;
			font-family:  "bangers";
			font-size: 150px;
			color: #e8a723;
			text-align: center;
			line-height: 170px;
			backround-color: transparent;
			border: 0;	
			}

			
		#START {
			top: center;
			left:center;
			width:600px;
			height:auto;
			position:absolute;
			background-color:transparent;
			font-family:"bangers";
			font-size:100px;
			color:#e8a723;
			opacity:0.96;
			z-index:1;
			line-height: 1.2;
			}


		#scrolltext {
			top:center;
			left:center;
			width:950px;
			height:400px;
			position:relative;
			background-color:transparent;
			font-family:verdana;
			font-size:60px;
			color:#FFFFFF;
			text-align: justify;
			overflow:hidden;
			z-index:0;
			}
		
		
			
		</style>

	<script type="text/javascript">   

		var timer1;
		var Geschwindigkeit = 30; // Millisekunden

		function scrollDiv(EbenenID, Schrittweite) {
			var scroll_container = document.getElementById(EbenenID);
			scroll_container.scrollTop -= Schrittweite;
			timer1 = setTimeout('scrollDiv("'+EbenenID+'", '+Schrittweite+')', Geschwindigkeit);
			}

	</script>

</head>

<body>






	<?php include 'include/partials/nav.php'; ?>
    
	
	<main>
		
			
			<div id='START' class="STARTBUTTON" onmouseover="scrollDiv('scrolltext', -1)" onmouseout="clearTimeout(timer1)"> Die Welt ist <br> in Gefahr! 


			<div id="scrolltext"> 
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
			</div>
	
			</div>
	
	<script type="text/javascript"> 
		
		document.querySelector('#START').addEventListener('click',TextStarten);
		
		function TextStarten(){
			 alert ('Sushi');
				}
		
		
			
	</script>

	</main>
</body>
</html>
