<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonnenenergie</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">
	
    <style>
        body {
            margin: 0;
            background-color: #fff8e1;
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
            color: #f9a825;
            text-align: center;
        }

        h2 {
            color: #f9a825;
            text-align: center;
        }

        p {
            line-height: 1.8;
        }

        .hervorheben {
            color: #f9a825;
            cursor: pointer;
            font-weight: bold;
            transition: color 0.3s;
        }

        .hervorheben:hover {
            color: #ffd700; /* Gelb Akzent für Hover-Effekt */
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
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .button-container {
            text-align: center;
            margin-top: 30px;
        }

        .button {
            background-color: #f9a825;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .interactive-box {
            border: 1px solid #f9a825;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            background-color: #fff8e1;
            display: flex;
            flex-direction: column;
        }

        .interactive-box p {
            margin-bottom: 10px;
        }

        .interactive-box label {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .interactive-box input {
            margin-right: 10px;
        }

        .interactive-box .button {
            margin-top: 10px;
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
        <h1>Sonnenenergie</h1>
		
        <p>
            Die <span class="hervorheben" data-infokasten="Sonnenenergie ist die Energie, die von der Sonne ausgestrahlt wird.">Sonnenenergie</span> ist eine der saubersten und umweltfreundlichsten Energiequellen. Sie wird durch Photovoltaikzellen in elektrischen Strom umgewandelt, der dann für den Betrieb von Geräten und zur Beleuchtung genutzt werden kann. Diese Technologie nutzt direkt die Energie der Sonne, um unseren Energiebedarf zu decken.
        </p>
		
        <!-- Bild über die Funktionsweise von Photovoltaikzellen -->
        <div class="infokasten">
            <img src="../../images/photovoltaikzellen.jpg" alt="Bild einer Photovoltaikanlage">
        </div>

        <h2>Wie funktioniert eine Photovoltaikanlage?</h2>
        <p>
            Eine <span class="hervorheben" data-infokasten="Photovoltaikanlagen bestehen aus Solarmodulen, die Sonnenlicht direkt in Strom umwandeln.">Photovoltaikanlage</span> funktioniert, indem sie Sonnenlicht aufnimmt und es in elektrische Energie umwandelt. Die Module bestehen aus vielen kleinen Zellen, die Lichtenergie absorbieren und in elektrischen Strom umwandeln. Der erzeugte Strom kann direkt genutzt oder in einem Speichersystem für später aufbewahrt werden.
        </p>
        
        <div class="button-container">
            <button class="button" id="fill-sea">Erfahre mehr zu Speichersystemen!</button>
        </div>
		
        <p id="extra-info">
            <span class="hervorheben" data-infokasten="Speichersysteme helfen, überschüssigen Solarstrom für die Nacht oder bewölkte Tage aufzuheben.">Speichersysteme</span> sind wichtig, um die Stromversorgung auch dann sicherzustellen, wenn die Sonne nicht scheint. Diese Speichertechnologien nutzen Akkus, um den erzeugten Strom für später zu speichern und bei Bedarf abzugeben. Dies ermöglicht eine kontinuierliche Stromversorgung auch außerhalb der Tageslichtstunden.
        </p>
		
        <div class="interactive-box">
            <h3>Quiz: Teste dein Wissen über Photovoltaikanlagen!</h3>
            <p>Wofür wird eine Photovoltaikanlage hauptsächlich verwendet?</p>
            <label><input type="radio" name="quiz-answer" value="Stromerzeugung aus Sonnenenergie"> Stromerzeugung aus Sonnenenergie</label>
            <label><input type="radio" name="quiz-answer" value="Wasseraufbereitung"> Wasseraufbereitung</label>
            <label><input type="radio" name="quiz-answer" value="Luftreinigung"> Luftreinigung</label>
            <button class="button" id="submit-answer">Antwort überprüfen</button>
            <p id="quiz-result"></p>
        </div>
		
        <h2>Mehr zu Sonnenenergie</h2>
        <p>
            <span class="hervorheben" data-infokasten="Sonnenenergie ist eine nachhaltige Energiequelle, die keine schädlichen Emissionen erzeugt.">Sonnenenergie</span> ist eine nachhaltige und unbegrenzte Energiequelle. Sie trägt dazu bei, die CO2-Emissionen zu reduzieren und die Umwelt zu schützen. Photovoltaikanlagen sind eine wichtige Technologie, um diese saubere Energie zu nutzen.
        </p>
        
        <h3>Wie funktioniert ein Solarkraftwerk?</h3>
        <p>
            Ein <span class="hervorheben" data-infokasten="Ein Solarkraftwerk nutzt die Sonnenstrahlen, um Strom zu erzeugen.">Solarkraftwerk</span> funktioniert ähnlich wie eine Photovoltaikanlage, aber auf einer größeren Skala. Es nutzt große Solarmodule, die auf Sonnenstrahlen ausgerichtet sind, um den erzeugten Strom in ein Netz zu speisen. Der erzeugte Strom kann in einem Speichersystem oder direkt genutzt werden.
        </p>
		
        <h3>Beispiele für Solarkraftwerke</h3>
        <p>Ein bekanntes Beispiel für ein Solarkraftwerk in Deutschland ist das 
            <span class="hervorheben" data-infokasten="Das Solarkraftwerk in Helmstedt ist ein großes Kraftwerk zur Sonnenstromproduktion.">Solarkraftwerk in Helmstedt</span>. 
            Es nutzt die Sonnenstrahlen, um sauberen Strom zu erzeugen und zur Verfügung zu stellen.
        </p>
		
        <div class="button-container">
            <a href="../../media/solarkraftwerk.mp4" class="button" target="_blank">Mehr zur Funktionsweise eines Solarkraftwerks sehen</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var infokasten = document.querySelectorAll('.hervorheben');
            infokasten.forEach(function(el) {
                el.addEventListener('click', function() {
                    var imageSrc = el.getAttribute('data-infokasten');
                    var infobox = document.querySelector('.infokasten');
                    infobox.querySelector('img').src = imageSrc;
                    infobox.style.display = 'block';
                    setTimeout(function() {
                        infobox.style.display = 'none';
                    }, 3000);
                });
            });

            var quizButton = document.getElementById('submit-answer');
            quizButton.addEventListener('click', function() {
                var selectedAnswer = document.querySelector('input[name="quiz-answer"]:checked');
                var result = document.getElementById('quiz-result');
                if (selectedAnswer) {
                    if (selectedAnswer.value === 'Stromerzeugung aus Sonnenenergie') {
                        result.textContent = 'Richtig!';
                    } else {
                        result.textContent = 'Leider falsch. Die richtige Antwort ist „Stromerzeugung aus Sonnenenergie“.';
                    }
                } else {
                    result.textContent = 'Bitte wähle eine Antwort.';
                }
            });
        });
    </script>
</body>
</html>
