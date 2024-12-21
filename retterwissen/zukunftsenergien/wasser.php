<!DOCTYPE html>
<html lang="de">
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasserkraft</title>  
	
       <!-- Einbinden der Google Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">
	
  <style>
	  	  
	body {
    margin: 0;
    background-color: #e3f2fd;
    color: #333;
 	overflow: auto;
}

    .container {
        background-color: rgba(255, 255, 255, 0.9);
        margin: 50px auto;
        padding: 20px;
        max-width: 800px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-family: 'Bangers', cursive;
        color: #1976d2;
        text-align: center;
    }

  h2 {
    color: #1976d2;
    text-align: center;
}
    p {
        line-height: 1.8;
    }

    .hervorheben {
        color: #1976d2;
        cursor: pointer;
        font-weight: bold;
    }

    .infokasten {
        display: none;
        position: fixed;
        background: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        z-index: 100;
    }

    .infokasten img {
        max-width: 100%; /* Bild passt sich der Breite des Containers an */
        height: auto; /* Höhenanpassung, um die Bildproportionen beizubehalten */
        display: block; /* Stellt das Bild als Block-Element dar, um die Größe des Containers zu füllen */
        margin: 0 auto; /* Zentriert das Bild horizontal im Container */
    }

    .animation-container {
        margin: 30px auto;
        text-align: center;
        position: relative;
        height: 200px;
        background-color: #bbdefb;
        border: 2px solid #1976d2;
        border-radius: 10px;
        overflow: auto;
    }

    .animation-bar {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 0;
        background-color: #64b5f6;
        transition: height 1s ease-in-out;
    }

    .button-container {
        text-align: center;
        margin-top: 30px;
    }

    .button {
        background-color: #1976d2;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px; 
    }

    .interactive-box {
        border: 1px solid #1976d2;
        border-radius: 10px;
        padding: 15px;
        margin: 20px 0;
        background-color: #e3f2fd;
        display: flex;
        flex-direction: column;
    }

    .interactive-box p {
        margin-bottom: 10px; /* Abstand zwischen der Frage und den Antwortoptionen */
    }

    .interactive-box label {
        display: flex;
        align-items: center;
        margin-bottom: 5px; /* zusätzlicher Abstand zwischen den Antwortoptionen */
    }

    .interactive-box input {
        margin-right: 10px;
    }

    .interactive-box .button {
        margin-top: 10px; /* zusätzlicher Abstand zwischen den Antwortoptionen und dem Button */
    }

    #quiz-result {
        margin-top: 10px;
        font-weight: bold;
    }

    #extra-info {
        display: none;
        margin-top: 20px;
    }

    iframe {
        width: 100%;
        max-width: 720px;
        height: 405px;
        border: none;
    }
</style>
</head>
	
<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <div class="container">
        <h1>Wasserkraft</h1>
		
       <p>
   		 Fließendes <span class="hervorheben" data-infokasten="Wasser ist ein wichtiger Teil der Natur und eine Energiequelle.">Wasser</span> hat viel Kraft! Je schneller es fließt, desto stärker wird es. Diese Kraft können wir nutzen, um Strom zu machen. Dazu bauen wir große <span class="hervorheben" data-infokasten="Eine Staumauer hält das Wasser zurück, damit es sich sammeln kann.">Staumauern</span>, die das Wasser aufhalten. 
  		 Das Wasser fließt dann durch große <span class="hervorheben" data-infokasten="Eine Turbine ist wie ein großes Rad, das sich dreht, wenn Wasser hindurchfließt.">Turbinen</span>, die sich drehen. Diese Bewegung wird in <span class="hervorheben" data-infokasten="Strom ist die Energie, die wir für Lampen, Computer und vieles mehr brauchen.">Strom</span> umgewandelt. 
 	     Solche <span class="hervorheben" data-infokasten="Ein Wasserkraftwerk ist eine Anlage, die Strom aus Wasser erzeugt.">Wasserkraftwerke</span> sind wichtig, weil sie saubere Energie liefern, ohne die Umwelt zu verschmutzen.
       </p>
		
<!-- Bild über die Funktionsweise einer Staumauer -->
		
<div class="infokasten">
    <img src="../../images/staumauer.jpg" alt="Bild einer Staumauer">
</div>

        <h2>Wie funktioniert eine Staumauer?</h2>
        <p>
            Eine <span class="hervorheben" data-infokasten="Eine Staumauer blockiert das Wasser in einem Fluss, um es zu speichern.">Staumauer</span> bildet einen 
            <span class="hervorheben" data-infokasten="Ein Stausee ist ein künstlicher See, der durch eine Staumauer entsteht.">Stausee</span>. Das Wasser wird zu einer 
            <span class="hervorheben" data-infokasten="Die Turbine wandelt Wasserenergie in mechanische Energie um.">Turbine</span> geleitet, die mit einem 
            <span class="hervorheben" data-infokasten="Der Generator erzeugt Strom aus mechanischer Energie.">Generator</span> verbunden ist.
        </p>
        
        <div class="animation-container">
            <div class="animation-bar" id="animation-bar"></div>
        </div>
		
		 <div class="button-container">
            <button class="button" id="fill-sea">Erfahre mehr zu Stauseen! </button>
        </div>
		
       <p id="extra-info">
  		  Ein <span class="hervorheben" data-infokasten="Ein Stausee ist ein künstlich angelegter See, der Wasser speichert.">Stausee</span> ist nicht nur wichtig für die Energiegewinnung, sondern auch für viele andere Dinge. Er kann <span class="hervorheben" data-infokasten="Trinkwasser ist sauberes Wasser, das wir täglich trinken und für das Kochen nutzen.">Trinkwasser</span> speichern und so Menschen in Städten und Dörfern versorgen. Außerdem hilft er dabei, <span class="hervorheben" data-infokasten="Überschwemmungen entstehen, wenn Flüsse zu viel Wasser führen und das Land überfluten.">Überschwemmungen</span> zu verhindern, indem das Wasser kontrolliert abgelassen wird.
  		  <br><br>
  		  Stauseen bieten auch <span class="hervorheben" data-infokasten="Freizeit bedeutet, Dinge zu tun, die Spaß machen, wie Schwimmen oder Picknicks.">Freizeitmöglichkeiten</span> wie Schwimmen, Angeln oder Bootfahren. Viele Menschen kommen dorthin, um die Natur zu genießen. Allerdings gibt es auch <span class="hervorheben" data-infokasten="Umwelteinflüsse sind Veränderungen, die Tiere, Pflanzen oder die Landschaft betreffen.">Umwelteinflüsse</span>. Zum Beispiel müssen manchmal Tiere umziehen, wenn ihr Lebensraum vom Wasser überflutet wird. Pflanzen, die unter Wasser stehen, können nicht weiter wachsen.
  		  <br><br>
    		Ein Stausee kann auch das <span class="hervorheben" data-infokasten="Das Klima beschreibt das Wetter über einen langen Zeitraum, zum Beispiel ob es in einer Region oft regnet oder heiß ist.">Klima</span> beeinflussen, weil die große Wasserfläche die Umgebung kühler machen kann. Gleichzeitig müssen wir sicherstellen, dass <span class="hervorheben" data-infokasten="Tiere wie Fische und Vögel brauchen ihre Lebensräume, um zu überleben.">Lebensräume</span> erhalten bleiben, damit Tiere und Pflanzen dort leben können.
		</p>
		
		<div class="interactive-box">
            <h3>Quiz: Teste dein Wissen über Stauseen!</h3>
            <p>Wofür wird ein Stausee hauptsächlich verwendet?</p>
            <label><input type="radio" name="quiz-answer" value="Trinkwasser speichern"> Trinkwasser speichern</label>
            <label><input type="radio" name="quiz-answer" value="Kühlung von Kraftwerken"> Kühlung von Kraftwerken</label>
            <label><input type="radio" name="quiz-answer" value="Schutz vor Überschwemmungen"> Schutz vor Überschwemmungen</label>
            <button class="button" id="submit-answer">Antwort überprüfen</button>
            <p id="quiz-result"></p>
        </div>
		
        <h2>Mehr zu Wasserkraftwerken</h2>
        <p>
            <span class="hervorheben" data-infokasten="Ein Wasserkraftwerk nutzt die Energie von fließendem Wasser, um Strom zu erzeugen.">Wasserkraftwerke</span> sind Anlagen, in denen 
            <span class="hervorheben" data-infokasten="Die Turbine ist das rotierende Gerät im Wasserkraftwerk.">Turbinen</span> durch die Kraft des 
            <span class="hervorheben" data-infokasten="Das Wasser bewegt sich in Richtung Turbine und Generator.">Wassers</span> in Bewegung gesetzt werden. Die Drehbewegung der Turbinen 
            wird in elektrischen Strom umgewandelt. Diese Form der Energieerzeugung ist besonders <span class="hervorheben" data-infokasten="Saubere Energie kommt ohne CO2-Ausstoß aus, was gut für die Umwelt ist.">umweltfreundlich</span>, da sie keine schädlichen Emissionen erzeugt.
        </p>
        
        <h3>Wie funktioniert ein Wasserkraftwerk?</h3>
        <p>
            Ein <span class="hervorheben" data-infokasten="Ein Wasserkraftwerk besteht aus einer Staumauer, einem Stausee, Turbinen und einem Generator.">Wasserkraftwerk</span> funktioniert ähnlich wie ein 
            <span class="hervorheben" data-infokasten="Ein Windkraftwerk nutzt den Wind, um Turbinen anzutreiben und Strom zu erzeugen.">Windkraftwerk</span>, aber anstelle von Wind nutzen wir hier 
            <span class="hervorheben" data-infokasten="Kraftwerk ist der allgemeine Begriff für eine Einrichtung, die Energie erzeugt.">Wasser</span>. Das Wasser fällt aus einem hohen Punkt auf die 
            <span class="hervorheben" data-infokasten="Turbinen sind rotierende Geräte im Wasserkraftwerk.">Turbinen</span> und bewegt sie. Diese Turbinen treiben dann den 
            <span class="hervorheben" data-infokasten="Ein Generator wandelt mechanische Energie in elektrische Energie um.">Generator</span> an, der Strom erzeugt.
        </p>
		
        <h3>Beispiele für Wasserkraftwerke</h3>
        <p>Ein bekanntes Beispiel für ein Wasserkraftwerk in Deutschland ist das 
            <span class="hervorheben" data-infokasten="Das <i>Kraftwerk in Rappbode</i> liegt im Harz, einem Gebirge in Deutschland.">Kraftwerk in Rappbode</i></span> im Harz. 
            Es nutzt die Energie des Wassers des 
            <span class="hervorheben" data-infokasten="Die Rappbode ist ein Fluss im Harzgebirge.">Rappbode-Flusses</span>, um Strom zu erzeugen.
        </p>
		
		<div class="button-container">
            <a href="../../media/kraftwerk.mp4" class="button" target="_blank">Mehr zur Funktionsweise eines Wasserkraftwerks sehen</a>
        </div>
		
	</div>

  <script>
    // Funtion to close all accordion sections
    function closeAllAccordions() {
        document.querySelectorAll('.AKKORDEON details[open]').forEach(detail => {
            detail.removeAttribute('open');
        });
    }

    document.querySelector(".PFEIL-RE").addEventListener("click", ZeigeSprechblaseWeiter);

    function ZeigeSprechblaseWeiter() {
        document.querySelector(".SPRECHBLASE").classList.add("WEG");
        document.querySelector(".SPRECHBLASEWEITER").classList.add("ZEIGEN");

        // Akkordeons sichtbar machen
        document.querySelector(".AKKORDEON").classList.add("AKKORDEON-SICHTBAR");
    }

    document.querySelector(".PFEIL-LI").addEventListener("click", ZeigeSprechblase);

    function ZeigeSprechblase() {
        document.querySelector(".SPRECHBLASE").classList.remove("WEG");
        document.querySelector(".SPRECHBLASEWEITER").classList.remove("ZEIGEN");

        // AKKORDEON SCHLIEßen WENN ANDERES AUF CLICK GEÖFFNET WIRD
        closeAllAccordions();
    }

    document.querySelectorAll('.AKKORDEON details summary').forEach(summary => {
        summary.addEventListener('click', closeAllAccordions);
    });
    
    document.addEventListener("DOMContentLoaded", function() {
        var accordeonContents = document.querySelectorAll(".AKKORDEON-INHALT p");

        accordeonContents.forEach(function(content) {
            content.addEventListener("mouseover", function(event) {
                var target = event.target;
                if (target.classList.contains("highlight")) {
                    // Setze den Hintergrund auf gelb, um das Wort hervorzuheben
                    target.style.backgroundColor = "yellow";
                }
            });

            content.addEventListener("mouseout", function(event) {
                var target = event.target;
                if (target.classList.contains("highlight")) {
                    // Entferne den gelben Hintergrund, wenn die Maus nicht mehr über dem Wort ist
                    target.style.backgroundColor = "";
                }
            });
        });

        var infokasten = document.querySelectorAll('.hervorheben');
        infokasten.forEach(function(el) {
            el.addEventListener('click', function() {
                var imageSrc = el.getAttribute('data-infokasten');
                var infobox = document.querySelector('.infokasten');
                infobox.querySelector('img').src = '../../images/' + imageSrc + '.jpg';
                infobox.style.display = 'block';
            });
        });
    });
</script>
</body>
	
</html>


