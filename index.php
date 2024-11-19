<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
			width:950px;
			height:auto;
			position:absolute;
			top:150px;
			left: 150px;
			background-color:transparent;
			font-family:"bangers";
			font-size:100px;
			color:#e8a723;
			opacity:0.96;
			z-index:1;
			line-height: 1.2;
			border: none;
			}


		#scrolltext {
			position:absolute;
			width:950px;
			height:400px;
			position:relative;
			background-color:transparent;
			font-family:verdana;
			font-size:30px;
			color:#FFFFFF;
			text-align: justify;
			overflow:hidden;
			}
			
		</style>


</head>

<body>

	<?php include 'include/partials/nav.php'; ?>
    
	
	<main>
		
			<div>
				<div class="STARTBUTTON"> <button id='START' >Die Welt ist <br/> in Gefahr! </button></div>


				<div id="scrolltext"> 
					<p>Die Dunkelheit breitet sich aus und nur die mutigsten Helden können uns retten. Steht auf, ihr Superhelden! Es ist Zeit zu kämpfen! Wir müssen die Hoffnung bewahren und die Energien bündeln. Gemeinsam Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
					</p>
				</div>
	
			</div>
	
	<script> 
		
		document.querySelector('#START').addEventListener('click',TextStarten);
		document.querySelector("#START").addEventListener("click",KlasseErgaenzen);
		
		
		function TextStarten() {
			document.querySelector("#scrolltext").scrollTop -=-1;
			timer1 = setTimeout('TextStarten("'+scrolltext+'", '+-1+')', "30");
			}
		
		function KlasseErgaenzen(){
			document.querySelector(".BOX").classList.add("KLEIN");
		}
			
	</script>

	</main>
	
	<?php include 'include/partials/footer.php'; ?>
</body>
</html>
