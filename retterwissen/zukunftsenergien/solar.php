<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarenergie</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Navigation einbinden -->
    <?php include '../include/partials/nav.php'; ?>

    <style>
        /* Body und allgemeine Layout-Einstellungen */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('"../bilder_retterwissen/galaxie_retterwissen.jpeg"') no-repeat center center fixed;
            background-size: cover;
        }

        /* Hauptcontainer */
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 100px); /* Platz für Navigation und Footer berücksichtigen */
        }

        /* Schwebe-Icons */
        .icon-container {
            display: flex;
            justify-content: space-around;
            gap: 150px; /* Großer Abstand zwischen den Icons */
            position: relative;
            margin-bottom: 60px;
        }

        .icon-container img {
            width: 130px; /* Noch größere Icons */
            height: 130px;
            animation: float 5s ease-in-out infinite;
        }

        /* Keyframe für Schweben */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-30px); /* Größere Bewegung */
            }
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 100px; /* Noch größerer Abstand zwischen den Buttons */
        }

        .button-container a {
            display: inline-block;
            padding: 20px 30px; /* Noch größere Buttons */
            font-size: 22px; /* Noch größere Schrift */
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px; /* Abgerundete Ecken */
            transition: background-color 0.3s ease;
            font-family: 'Bangers', cursive;
        }

        .button-container a:hover {
            background-color: #45a049;
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #285238;
            color: white;
            font-size: 14px;
            position: relative;
        }
    </style>
</head>

<body>
    <main>
        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src="bilder_retterwissen/sonne.png" alt="Sonne">
            <img src="bilder_retterwissen/wasser.png" alt="Wasser">
            <img src="bilder_retterwissen/wind.png" alt="Wind">
        </div>

        <!-- Buttons -->
        <div class="button-container">
            <a href="zukunftsenergien/solar.php">Sonnenenergie</a>
            <a href="zukunftsenergien/wasser.php">Wasserenergie</a>
            <a href="zukunftsenergien/wind.php">Windenergie</a>
        </div>
    </main>

    <!-- Footer -->
    <?php include '../include/partials/footer.php'; ?>
</body>
</html>