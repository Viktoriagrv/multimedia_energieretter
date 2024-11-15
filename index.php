<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.css">
	
	<style>
		main {
		  flex: 1;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  background-image: url("images/weltall/galxie_illustration.jpg");
		  background-size: cover;
		  background-position: center;
		  background-repeat: no-repeat;
		 	}
		
		#LAUFTEXT { 
			top:150px; 
			align-items: center;
			width:1000px; 
			height:auto; 
			background-color: rgb(25 25 25/.5);			 
			font-family:verdana;   
			font-size:60px; 
			color:#FFFFFF; 
			overflow:hidden; 
			z-index:0; 
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
		
		#Kasten1 #Kasten2 #scrolltext { margin:0px; padding:0px; border:0px; }

		#Kasten1 { top:  0px; left:0px; width:499px; height:200px; position:absolute; background-color:#FF0000; font-family:monospace; font-size:36px; color:#FFFFFF; opacity:0.96; z-index:1; }
		#Kasten2 { top:400px; left:0px; width:499px; height:200px; position:absolute; background-color:#00FF00; font-family:monospace; font-size:36px; color:#000000; opacity:0.96; z-index:1; }

		#KastenA { top:  0px; left:501px; width:500px; height:200px; position:absolute; background-color:#FF0000; font-family:monospace; font-size:36px; color:#FFFFFF; opacity:0.96; z-index:1; }
		#KastenB { top:400px; left:501px; width:500px; height:200px; position:absolute; background-color:#00FF00; font-family:monospace; font-size:36px; color:#000000; opacity:0.96; z-index:1; }

		#scrolltext { top:150px; left:0px; width:1000px; height:400px; position:fixed; background-color:#FFFFFF; font-family:verdana;   font-size:60px; color:#000000; overflow:hidden; z-index:0; }
	</style>
</head>

<body>
	
	<?php include 'include/partials/nav.php'; ?>
    <?php include 'include/partials/footer.php'; ?>
	

    
	<div id="Kasten1" onmouseover="scrollDiv('scrolltext', -1)" onmouseout="clearTimeout(timer1)"> Rauf </div>


<div id="scrolltext"> <p>Eine Aufzugsanlage, kurz Aufzug, Fahrstuhl oder Lift genannt, ist eine Anlage, mit der Personen oder Lasten in einer beweglichen Kabine, einem Fahrkorb oder auf einer Plattform in vertikaler oder schräger Richtung zwischen zwei oder mehreren Ebenen transportiert werden können. Gesamthaft betrachtet verbrauchen Lifte mehr Energie fürs Stillstehen und Warten als fürs Auf- und Abfahren: Nahezu 60% des Stroms geht unbenutzt verloren, da die Maschinerie und die Aussentableaus kontinuierlich unter Spannung stehen (Stand-by-Modus) - und auch, da viele Liftkabinen nicht mit einem Personensensor ausgerüstet sind und deshalb beleuchtet bleiben, auch wenn sich niemand darin aufhält. Je nach Einsatzzweck und dem Stand der Technik entsprechend eingesetzt gibt es zurzeit vier Systemarten der Kraftübertragung um Antrieb in Förderhöhe umzusetzen. </p>
</div>
	<script type="text/javascript">   
		
			function lauftext(){
			 document.getElementsByName("newsticker")[0].value = "" +
			 text.substring(begin,end) + " " + text.substring(0,begin);
			 begin ++;
			 if(begin >= end)
			 { 
			  begin = 0; 
			 }
			 window.setTimeout("lauftext()", 3000);
			}

	var timer1;
	var Geschwindigkeit = 30; // Millisekunden

		function scrollDiv(EbenenID, Schrittweite) {
			var scroll_container = document.getElementById(EbenenID);
			scroll_container.scrollTop -= Schrittweite;
			timer1 = setTimeout('scrollDiv("'+EbenenID+'", '+Schrittweite+')', Geschwindigkeit);
		}

</script>

		
</body>
</html>
