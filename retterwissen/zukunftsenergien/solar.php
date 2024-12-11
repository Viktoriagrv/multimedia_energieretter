<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retterwissen - Solarenergie</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff5cc;
            color: #333;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-family: 'Bangers', cursive;
            font-size: 48px;
            color: #f7b500;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .illustration {
            margin: 20px auto;
            max-width: 600px;
        }

        .illustration img {
            width: 100%;
            border-radius: 15px;
        }

        .content {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin: 20px auto;
            max-width: 800px;
        }

        .button {
            display: inline-block;
            background-color: #f7b500;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e6a000;
        }

        .quiz-header {
            font-size: 24px;
            margin-top: 50px;
            color: #333;
        }

        .quiz-item {
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 15px;
            max-width: 600px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .speech-bubble {
            background-color: #fff5cc;
            border: 2px solid #f7b500;
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
            position: relative;
            margin-bottom: 10px;
        }

        .slider-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider-label {
            font-size: 14px;
            margin: 0 10px;
            color: #555;
        }

        .slider {
            width: 150px;
            -webkit-appearance: none;
            background: gray;
            height: 5px;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 15px;
            height: 15px;
            background: #f7b500;
            border-radius: 50%;
            cursor: pointer;
        }

        #confirm-button {
            margin-top: 30px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        #confirm-button:hover {
            background-color: #218838;
        }

        #exclusive-content {
            display: none;
            margin-top: 50px;
        }

        footer {
            background-color: #f7b500;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Retterwissen - Solarenergie</h1>

        <div class="illustration">
            <img src="illustration_solar.jpg" alt="Solarenergie Illustration">
        </div>

        <div class="content">
            <p>Willkommen bei den Retterwissen! Erfahre alles über Solarenergie, die Energiequelle der Zukunft. Sie ist sauber, nachhaltig und kommt direkt von der Sonne. Mit Solarenergie können wir unsere Welt heller und umweltfreundlicher machen!</p>
            <a href="#quiz" class="button">Loslegen</a>
        </div>

        <div class="quiz-header" id="quiz">Du willst noch mehr erfahren? Schalte exklusive Inhalte frei.</div>
        <p>Alles was du dafür tun musst ist das Gelernte hier einzusetzen und zu bestätigen.</p>

        <!-- Schieberegler Fragen -->
        <div class="quiz-item" id="item1">
            <div class="speech-bubble">Solarenergie setzt schädliche Gase frei.</div>
            <div class="slider-container">
                <span class="slider-label" id="label1-false">Falsch</span>
                <input type="range" id="slider1" class="slider" min="0" max="1" step="1">
                <span class="slider-label" id="label1-true">Wahr</span>
            </div>
        </div>

        <button id="confirm-button" onclick="checkAnswers()">Bestätigen</button>

        <div id="exclusive-content">
            <h2>Exklusive Inhalte</h2>
            <p>Keine Sorge, für die Mission kommst du schon mit dem oberen Retterwissen klar. Bei den exklusiven Inhalten kannst du dir aber ein Zertifikat abholen und noch mehr spannende Videos anschauen!</p>
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen style="width: 80%; max-width: 700px; height: 400px; border-radius: 10px;"></iframe>
        </div>
    </div>

    <footer>
        © 2024 Retterwissen. Alle Rechte vorbehalten.
    </footer>

    <script>
        const correctAnswers = { 'slider1': 0 };

        function checkAnswers() {
            const isCorrect = Object.keys(correctAnswers).every(id => 
                parseInt(document.getElementById(id).value) === correctAnswers[id]
            );

            if (isCorrect) {
                document.getElementById('exclusive-content').style.display = 'block';
            } else {
                alert('Nicht alle Antworten sind richtig. Bitte versuche es erneut!');
            }
        }
    </script>
</body>
</html>
