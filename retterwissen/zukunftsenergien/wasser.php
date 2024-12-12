<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wasserkraft</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <style>
        /* HAUPTBEREICH FÜR DIE GESAMTE SEITE */
        body {
            font-family: Verdana, sans-serif; /* VERDANA FÜR LEICHTE LESBARKEIT */
            margin: 0;
            background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND, WASSER-THEMA */
            color: #333;
        }
        
        /* HINTERGRUND-BOX MIT INHALT */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* HELLER HINTERGRUND MIT LEICHTER TRANSPARENZ */
            margin: 50px auto;
            padding: 20px;
            max-width: 800px;
            border-radius: 10px; /* ABGERUNDETE ECKEN */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* SCHATTEN FÜR TIEFENWIRKUNG */
        }

        /* ÜBERSCHRIFTEN-STIL */
        h1 {
            font-family: 'Bangers', cursive; /* BANGERS FÜR EINEN AUFFÄLLIGEN LOOK */
            color: #1976d2; /* BLAUE ÜBERSCHRIFT */
            text-align: center; /* ZENTRIERUNG DER ÜBERSCHRIFT */
        }

        /* TEXTABSÄTZE */
        p {
            line-height: 1.8; /* MEHR ZEILENABSTAND FÜR LESEFREUNDLICHKEIT */
        }

        /* HERVORGEHOBENE WÖRTER (INTERAKTIV) */
        .hervorheben {
            color: #1976d2; /* BLAUE HERVORHEBUNG */
            cursor: pointer; /* MAUSZEIGER ALS HAND FÜR KLICKBARE ELEMENTE */
            font-weight: bold; /* FETTGEDRUCKT */
        }

        /* INFOKASTEN FÜR HERVORGEHOBENE BEGRIFFE */
        .infokasten {
            display: none; /* STANDARDMÄSSIG VERSTECKT */
            position: absolute;
            background: #fff; /* WEISSER HINTERGRUND */
            border: 1px solid #ddd; /* HELLGRAUER RAND */
            padding: 10px;
            border-radius: 5px; /* ABGERUNDETE ECKEN */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* SCHATTEN */
            z-index: 100; /* ÜBER ANDEREN ELEMENTEN */
        }

        /* VIDEO-EINBETTUNG */
        .video-container {
            margin-top: 20px; /* ABSTAND NACH OBEN */
            text-align: center; /* ZENTRIERUNG DES VIDEOS */
        }
        iframe {
            width: 100%; /* VOLLE BREITE DES RAHMENS */
            max-width: 720px; /* BEGRENZUNG AUF MAXIMALE BREITE */
            height: 405px; /* STANDARD-HÖHE FÜR 16:9-VIDEOS */
            border: none; /* KEIN RAHMEN */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Wasserkraft</h1>
        <p>
            Fließendes <span class="hervorheben" data-infokasten="Wasser ist lebenswichtig und eine erneuerbare Ressource.">Wasser</span> hat eine große Kraft. Je schneller es fließt, desto größer ist diese Kraft und desto mehr Energie kann man gewinnen.
            <span class="hervorheben" data-infokasten="Wasserkraftanlagen sind technische Systeme, die Energie aus Wasser gewinnen.">Wasserkraftanlagen</span> befinden sich meist an größeren Flüssen. 
            Eine <span class="hervorheben" data-infokasten="Eine Staumauer hält das Wasser auf und bildet einen Stausee.">Staumauer</span> hält das Wasser auf. 
            So staut das Wasser eines Flusses oder Baches zu einem <span class="hervorheben" data-infokasten="Ein Stausee ist ein künstlich angelegter See, der Wasser speichert.">Stausee</span> auf. 
        </p>
        <p>
            Bei allen Wasserkraftanlagen fließt oder fällt das aufgestaute Wasser über eine <span class="hervorheben" data-infokasten="Rohre leiten das Wasser gezielt zu einer Turbine.">Rohrleitung</span> auf eine 
            <span class="hervorheben" data-infokasten="Turbinen wandeln die Energie des fließenden Wassers in mechanische Energie um.">Turbine</span>, die mit einem 
            <span class="hervorheben" data-infokasten="Generatoren wandeln mechanische Energie in elektrischen Strom um.">Generator</span> verbunden ist, der dann Strom erzeugt.
        </p>
       
    </div>

    <div class="infokasten" id="infokasten"></div>

    <script>
        // INTERAKTIVE INFOKÄSTCHEN FÜR BEGRIFFE
        const hervorhebungen = document.querySelectorAll('.hervorheben'); // ALLE MARKIERTEN BEGRIFFE
        const infokasten = document.getElementById('infokasten'); // DAS INFOKÄSTCHEN SELBST

        // BEIM ÜBERFAHREN MIT DER MAUS
        hervorhebungen.forEach(hervorheben => {
            hervorheben.addEventListener('mouseover', (event) => {
                infokasten.innerText = event.target.getAttribute('data-infokasten'); // TEXT HOLEN
                infokasten.style.display = 'block'; // INFOKÄSTCHEN ANZEIGEN
                infokasten.style.left = event.pageX + 10 + 'px'; // POSITION X
                infokasten.style.top = event.pageY + 10 + 'px'; // POSITION Y
            });

            // BEIM VERLASSEN
            hervorheben.addEventListener('mouseout', () => {
                infokasten.style.display = 'none'; // INFOKÄSTCHEN VERSTECKEN
            });
        });
    </script>
</body>
</html>
