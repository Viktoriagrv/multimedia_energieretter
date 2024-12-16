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
    		Ein Stausee kann auch das <span class="hervorheben" data-infokasten="Das Klima beschreibt das Wetter über einen langen Zeitraum, zum Beispiel ob es in einer Region oft regnet oder heiß ist.">Klima</span> beeinflussen, weil die große Wasserfläche die Umgebung kühler machen kann. Gleichzeitig müssen wir sicherstellen, dass <span class="hervorheben" data-infokasten="Tiere wie Fische und Vögel brauchen ihre Lebensräume, um zu überleben.">Tiere</span> wie Fische und Vögel genug Platz und Nahrung finden. Um das zu verbessern, werden oft spezielle Wege für <span class="hervorheben" data-infokasten="Fischtreppen helfen Fischen, über Hindernisse wie Staumauern hinwegzuschwimmen.">Fischtreppen</span> oder neue Lebensräume für Vögel gebaut.
			</p>
		
<h2>Teste dein Wissen über Wasserkraft!</h2>
		
<!-- Quiz Frage 1 -->
<div class="interactive-box">
    <p>Welche Komponente erzeugt den Strom?</p>
    <label><input type="radio" name="quiz1" value="staumauer"> Staumauer</label><br>
    <label><input type="radio" name="quiz1" value="turbine"> Turbine</label><br>
    <label><input type="radio" name="quiz1" value="generator"> Generator</label><br>
    <button class="button" id="check-answer-1">Antwort überprüfen</button>
</div>
<p id="quiz-result-1"></p>

<!-- Quiz Frage 2 -->
<div class="interactive-box">
    <p>Warum sind Fischtreppen wichtig?</p>
    <label><input type="radio" name="quiz2" value="sicherheit"> Zur Sicherheit der Arbeiter</label><br>
    <label><input type="radio" name="quiz2" value="tiere"> Damit Fische Hindernisse überwinden</label><br>
    <label><input type="radio" name="quiz2" value="überwachung"> Zur Überwachung des Wassers</label><br>
    <button class="button" id="check-answer-2">Antwort überprüfen</button>
</div>
<p id="quiz-result-2"></p>

<!-- Quiz Frage 3 -->
<div class="interactive-box">
    <p>Welche Wirkung hat ein Stausee auf das Klima?</p>
    <label><input type="radio" name="quiz3" value="kühlung"> Der Stausee kühlt die Umgebung ab.</label><br>
    <label><input type="radio" name="quiz3" value="erwärmung"> Der Stausee erwärmt die Umgebung.</label><br>
    <label><input type="radio" name="quiz3" value="keine"> Kein Einfluss auf das Klima.</label><br>
    <button class="button" id="check-answer-3">Antwort überprüfen</button>
</div>
<p id="quiz-result-3"></p>

<!-- Quiz Frage 4 -->
<div class="interactive-box">
    <p>Welche Komponente sorgt dafür, dass das Wasser in der Nähe eines Wasserkraftwerks schnell genug fließt, um Energie zu erzeugen?</p>
    <label><input type="radio" name="quiz4" value="schaufeln"> Die Schaufeln eines Wasserrads</label><br>
    <label><input type="radio" name="quiz4" value="düsen"> Die Düsen, durch die das Wasser strömt</label><br>
    <label><input type="radio" name="quiz4" value="flügel"> Die Flügel einer Windturbine</label><br>
    <button class="button" id="check-answer-4">Antwort überprüfen</button>
</div>
<p id="quiz-result-4"></p>

<!-- Quiz Frage 5 -->
<div class="interactive-box">
    <p>Welches Merkmal eines Stausees hilft, das Wasser zu regulieren und zu speichern?</p>
    <label><input type="radio" name="quiz5" value="tiefe"> Die Tiefe des Sees</label><br>
    <label><input type="radio" name="quiz5" value="oberfläche"> Die Größe der Oberfläche des Sees</label><br>
    <label><input type="radio" name="quiz5" value="breite"> Die Breite des Sees</label><br>
    <button class="button" id="check-answer-5">Antwort überprüfen</button>
</div>
<p id="quiz-result-5"></p>

<h2>Video: Wie funktioniert Wasserkraft?</h2>
<iframe src="https://www.youtube.com/embed/dR8PvGTE9Cw" allowfullscreen></iframe>
</div>

<div class="infokasten" id="infokasten"></div>

	
    <script>
		
        // Interaktive Infoboxen
        const hervorhebungen = document.querySelectorAll('.hervorheben');
        const infokasten = document.getElementById('infokasten');

        hervorhebungen.forEach(hervorheben => {
            hervorheben.addEventListener('mouseover', (event) => {
                infokasten.innerText = event.target.getAttribute('data-infokasten');
                infokasten.style.display = 'block';
                infokasten.style.left = (event.pageX + 10) + 'px';
                infokasten.style.top = (event.pageY + 10) + 'px';
            });
            hervorheben.addEventListener('mouseout', () => {
                infokasten.style.display = 'none';
            });
        });

        // Animation für Stausee
        const fillButton = document.getElementById('fill-sea');
        const animationBar = document.getElementById('animation-bar');
        const extraInfo = document.getElementById('extra-info');

        fillButton.addEventListener('click', () => {
            animationBar.style.height = '100%';
            setTimeout(() => {
                extraInfo.style.display = 'block';
                fillButton.style.display = 'none';
            }, 1000);
        });

     // Quiz-Interaktion für alle Fragen
document.getElementById('check-answer-1').addEventListener('click', () => {
    const selected = document.querySelector('input[name="quiz1"]:checked');
    const quizResult = document.getElementById('quiz-result-1');
    if (selected) {
        if (selected.value === 'generator') {
            quizResult.innerText = 'Richtig! Der Generator ist die Komponente, die den erzeugten mechanischen Strom in elektrische Energie umwandelt. Dies geschieht durch den Einsatz von Magnetfeldern und Spulen, die die kinetische Energie der Turbine nutzen, um Elektrizität zu erzeugen.';
        } else if (selected.value === 'turbine') {
            quizResult.innerText = 'Fast! Die Turbine erzeugt mechanische Energie, indem sie das Wasser in Bewegung setzt, aber sie wandelt diesen Strom nicht direkt in Elektrizität um. Dafür ist der Generator notwendig, der die kinetische Energie der Turbine in elektrische Energie umwandelt.';
        } else if (selected.value === 'staumauer') {
            quizResult.innerText = 'Nicht ganz! Die Staumauer speichert das Wasser und reguliert dessen Fluss, aber sie erzeugt keinen Strom direkt. Erst die Turbine und der Generator kombinieren die mechanische Energie des fließenden Wassers, um Strom zu erzeugen.';
        }
    } else {
        quizResult.innerText = 'Bitte wähle eine Antwort aus!';
    }
});

document.getElementById('check-answer-2').addEventListener('click', () => {
    const selected = document.querySelector('input[name="quiz2"]:checked');
    const quizResult = document.getElementById('quiz-result-2');
    if (selected) {
        if (selected.value === 'tiere') {
            quizResult.innerText = 'Richtig! Fischtreppen sind wichtig, um Fischen den Weg vorbei an Barrieren wie Wasserkraftwerken zu ermöglichen. Diese Strukturen helfen, die natürliche Wanderung der Fische aufrechtzuerhalten und den Einfluss auf die Ökosysteme zu minimieren.';
        } else if (selected.value === 'sicherheit') {
            quizResult.innerText = 'Fast! Während Fischtreppen auch für die Sicherheit der Arbeiter von Bedeutung sind, dienen sie hauptsächlich dem Überleben und der Fortpflanzung von Fischen, indem sie ihnen den Zugang zu verschiedenen Lebensräumen ermöglichen.';
        } else if (selected.value === 'überwachung') {
            quizResult.innerText = 'Nicht ganz! Die Überwachung des Wassers ist wichtig für den Umweltschutz, aber Fischtreppen sind speziell darauf ausgelegt, Fische zu unterstützen, nicht nur zur Überwachung des Wassers.';
        }
    } else {
        quizResult.innerText = 'Bitte wähle eine Antwort aus!';
    }
});

document.getElementById('check-answer-3').addEventListener('click', () => {
    const selected = document.querySelector('input[name="quiz3"]:checked');
    const quizResult = document.getElementById('quiz-result-3');
    if (selected) {
        if (selected.value === 'kühlung') {
            quizResult.innerText = 'Richtig! Stauseen können eine kühlende Wirkung auf die Umgebung haben, indem sie Wärme speichern und langsam wieder an die Atmosphäre abgeben. Dies kann lokale Mikroklimata beeinflussen, indem die Temperaturen reguliert und extremes Wetter wie Hitzeperioden gemildert werden.';
        } else if (selected.value === 'erwärmung') {
            quizResult.innerText = 'Nicht ganz! Stauseen erwärmen die Umgebung nicht, sondern tragen in der Regel zu einer kühlenden Wirkung bei, da sie große Mengen an Wasser speichern, das bei Bedarf langsam wieder verdunstet und so die Umgebung abkühlt.';
        } else if (selected.value === 'keine') {
            quizResult.innerText = 'Nein, Stauseen haben Auswirkungen auf das Klima. Sie beeinflussen sowohl die lokale als auch die globale Umgebung, indem sie den Wasserkreislauf und die Wärmeregulierung verändern.';
        }
    } else {
        quizResult.innerText = 'Bitte wähle eine Antwort aus!';
    }
});

document.getElementById('check-answer-4').addEventListener('click', () => {
    const selected = document.querySelector('input[name="quiz4"]:checked');
    const quizResult = document.getElementById('quiz-result-4');
    if (selected) {
        if (selected.value === 'schaufeln') {
            quizResult.innerText = 'Richtig! Die Schaufeln eines Wasserrads sorgen dafür, dass das Wasser schnell genug fließt, um Energie zu erzeugen.';
        } else if (selected.value === 'düsen') {
            quizResult.innerText = 'Nicht ganz! Die Düsen helfen, das Wasser in Bewegung zu bringen, aber die Schaufeln eines Wasserrads sind entscheidend für die Bewegung und Energieerzeugung des Wassers.';
        } else if (selected.value === 'flügel') {
            quizResult.innerText = 'Nein, die Flügel sind für Windturbinen geeignet, aber nicht für Wasserkraftwerke. Die Schaufeln eines Wasserrads sind die richtige Wahl, um das Wasser zu bewegen und Energie zu erzeugen.';
        }
    } else {
        quizResult.innerText = 'Bitte wähle eine Antwort aus!';
    }
});
document.getElementById('check-answer-5').addEventListener('click', () => {
    const selected = document.querySelector('input[name="quiz5"]:checked');
    const quizResult = document.getElementById('quiz-result-5');
    if (selected) {
        if (selected.value === 'tiefe') {
            quizResult.innerText = 'Richtig! Die Tiefe eines Stausees hilft, das Wasser zu regulieren und zu speichern.';
        } else if (selected.value === 'oberfläche') {
            quizResult.innerText = 'Nicht ganz! Die Größe der Oberfläche eines Stausees ist wichtig, aber die Tiefe hilft noch besser, das Wasser zu regulieren und zu speichern.';
        } else if (selected.value === 'breite') {
            quizResult.innerText = 'Nicht ganz! Die Breite eines Stausees beeinflusst die Wassermenge, aber die Tiefe ist noch wichtiger für das Regulieren und Speichern des Wassers.';
        }
    } else {
        quizResult.innerText = 'Bitte wähle eine Antwort aus!';
    }
});


    </script>
</body>
</html>


