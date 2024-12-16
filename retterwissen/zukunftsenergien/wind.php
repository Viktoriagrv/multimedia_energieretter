<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windenergie</title>  
    
    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
    
    <style>
        body {
            margin: 0;
            background-color: #f0f0f0; /* Graue Hintergrundfarbe */
            color: #333;
            overflow-y: auto; /* Scrollbar ist erlaubt, auch wenn das Scrollen nicht unbedingt nötig ist */
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
        }

        p {
            line-height: 1.8;
        }

        .hervorheben {
            color: #1976d2;
            cursor: pointer;
            font-weight: bold;
            transition: color 0.3s ease; /* Effekt beim Hover */
        }

        .hervorheben:hover {
            color: #64b5f6; /* Neues Hover-Farbe */
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
            background-color: #e0e0e0; /* Grauer Hintergrund */
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
            transition: background-color 0.3s ease; /* Effekt beim Hover */
        }

        .button:hover {
            background-color: #64b5f6; /* Neues Hover-Farbe */
        }

        .interactive-box {
            border: 1px solid #1976d2;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            background-color: #e0e0e0; /* Grauer Hintergrund */
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
	

	
    <div class="container">
        <h1>Windenergie</h1>
		
        <p>
            Der Wind ist eine erneuerbare Energiequelle mit viel Potenzial! Windräder nutzen den Wind, um Strom zu erzeugen. Die Rotoren drehen sich, wenn der Wind darauf trifft, und dieser mechanische Strom wird dann durch einen Generator in Elektrizität umgewandelt. <span class="hervorheben" data-infokasten="Windräder nutzen die kinetische Energie des Windes, um mechanische Energie zu erzeugen.">Windräder</span> sind wichtig, weil sie saubere Energie ohne negative Umweltauswirkungen erzeugen.
        </p>
		
        <!-- Bild über die Funktionsweise eines Windrads -->
        <div class="infokasten">
            <img src="../../images/windrad.jpg" alt="Bild eines Windrads">
        </div>

        <h2>Wie funktioniert ein Windrad?</h2>
        <p>
            Ein <span class="hervorheben" data-infokasten="Ein Windrad nutzt den Wind, um sich zu drehen und Energie zu erzeugen.">Windrad</span> besteht aus einem Rotor, der sich um eine vertikale oder horizontale Achse dreht. Der Rotor ist mit einem Generator verbunden, der die kinetische Energie des rotierenden Rotors in elektrische Energie umwandelt.
        </p>
        
        <div class="animation-container">
            <div class="animation-bar" id="animation-bar-wind"></div>
        </div>
		
        <div class="button-container">
            <button class="button" id="generate-wind">Erfahre mehr zu Windrädern! </button>
        </div>
		
        <p id="extra-info">
            Windräder sind nicht nur für die Energiegewinnung wichtig, sondern können auch zur Verbesserung der Luftqualität beitragen, indem sie den Wind nutzen, um smoghaltige Luftmassen zu verdrängen. Darüber hinaus bieten sie Arbeitsplatzmöglichkeiten und tragen zur Energieunabhängigkeit bei. Allerdings gibt es auch Umwelteinflüsse wie Lärmbelästigung und Vogelschlag, die berücksichtigt werden müssen.
        </p>
		
        <h2>Teste dein Wissen über Windenergie!</h2>
		
        <!-- Quiz Frage 1 -->
        <div class="interactive-box">
            <p>Welches Bauteil eines Windrads wandelt die kinetische Energie des Windes um?</p>
            <label><input type="radio" name="quiz1-wind" value="rotor"> Der Rotor</label><br>
            <label><input type="radio" name="quiz1-wind" value="generator"> Der Generator</label><br>
            <label><input type="radio" name="quiz1-wind" value="turbine"> Die Turbine</label><br>
            <button class="button" id="check-answer-1-wind">Antwort überprüfen</button>
        </div>
        <p id="quiz-result-1-wind"></p>

        <!-- Quiz Frage 2 -->
        <div class="interactive-box">
            <p>Was beeinflusst die Effizienz eines Windrads am stärksten?</p>
            <label><input type="radio" name="quiz2-wind" value="windgeschwindigkeit"> Die Windgeschwindigkeit</label><br>
            <label><input type="radio" name="quiz2-wind" value="drehzahl"> Die Drehzahl des Generators</label><br>
            <label><input type="radio" name="quiz2-wind" value="anzahl der Rotorblätter"> Die Anzahl der Rotorblätter</label><br>
            <button class="button" id="check-answer-2-wind">Antwort überprüfen</button>
        </div>
        <p id="quiz-result-2-wind"></p>
		
        <script>
            document.getElementById('generate-wind').addEventListener('click', () => {
                const extraInfo = document.getElementById('extra-info');
                extraInfo.style.display = extraInfo.style.display === 'none' ? 'block' : 'none';
            });

            // Event-Handler für die Überprüfung der Quizantworten
            document.getElementById('check-answer-1-wind').addEventListener('click', () => {
                const answer = document.querySelector('input[name="quiz1-wind"]:checked');
                const result = document.getElementById('quiz-result-1-wind');
                if (answer) {
                    result.textContent = answer.value === 'generator' ? 'Richtig!' : 'Falsch!';
                } else {
                    result.textContent = 'Bitte eine Antwort auswählen.';
                }
            });

            document.getElementById('check-answer-2-wind').addEventListener('click', () => {
                const answer = document.querySelector('input[name="quiz2-wind"]:checked');
                const result = document.getElementById('quiz-result-2-wind');
                if (answer) {
                    result.textContent = answer.value === 'windgeschwindigkeit' ? 'Richtig!' : 'Falsch!';
                } else {
                    result.textContent = 'Bitte eine Antwort auswählen.';
                }
            });
        </script>
    </div>
	
 
	
</body>
</html>

