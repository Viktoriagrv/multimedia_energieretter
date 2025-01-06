<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <style>
      body {
    font-family: Verdana, sans-serif;
    background-color: #f4f4f4;
    color: #000;
    margin: 0;
    padding: 0;
    overflow-y: scroll;
    display: flex;
    justify-content: center; /* Zentriert den Inhalt horizontal */
    align-items: center; /* Zentriert den Inhalt vertikal */
    height: 100vh; /* Setzt die Höhe auf 100% des Viewports */
}

main {
    padding-top: 80px;  /* Abstand oben (wie Höhe der Navbar) */
    padding-bottom: 80px;  /* Sicherstellen, dass der Abstand zum Footer genug ist */
    text-align: center; /* Zentriert den Text */
}

#hintergrundVideo {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;  /* Video hinter dem Inhalt */
}

#scarletShade {
    position: fixed;
    right: 0;
    bottom: 20px;
    width: 300px; /* Größeres Bild */
    z-index: 2;  /* Über dem Inhalt */
}

.inhalt {
    max-width: 800px; /* Maximalbreite */
    margin: 0 auto; /* Zentriert den Inhalt */
    padding: 20px;
    color: #FFC107; /* Gelbe Schriftfarbe */
    letter-spacing: -0.5px; /* Verringerung des Abstandes zwischen den Wörtern */
}

h1 {
    font-family: 'Bangers', cursive;
    color: #FFC107; /* Gelb für den Titel */
    text-align: center; /* Zentriert den Titel */
    margin-left: 0;
    font-size: 3rem; /* Größere Schriftgröße */
    letter-spacing: -1px; /* Verringerung des Abstandes zwischen den Wörtern für den Titel */
}

h2 {
    font-family: 'Bangers', cursive;
    color: #FFC107; /* Energieretter Gelb */
    font-size: 2rem; /* Größere Schriftgröße */
    margin-left: 0;
    letter-spacing: -0.5px; /* Verringerung des Abstandes zwischen den Wörtern für die Sub-Titel */
}

p {
    font-family: 'Open Sans', sans-serif;
    font-size: 1.2rem; /* Größere Schriftgröße */
    line-height: 1.6;
    color: #FFC107;  /* Gelb für den normalen Text */
    letter-spacing: -0.5px; /* Verringerung des Abstandes zwischen den Wörtern */
}

ul {
    list-style-type: none;
    padding-left: 0;
    font-size: 1.2rem;
    color: #FFC107;
    letter-spacing: -0.5px; /* Verringerung des Abstandes zwischen den Wörtern */
}

li {
    margin-bottom: 10px;
}

a {
    color: #FFC107;
    text-decoration: none;
}

.flex-row {
    display: flex;
    justify-content: center;
    gap: 40px;
}
    </style>
</head>

<body>
    <?php include '../include/nav.php'; ?>
    
    <!-- Hintergrundvideo -->
    <video autoplay muted loop id="hintergrundVideo">
        <source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
        <source src="../retterwissen/bilder_retterwissen/background_video.webm" type="video/webm">
    </video>

    <!-- Superheldenbild (Scarlet Shade) am rechten Rand -->
    <img src="../images/BadGirl.png" alt="Scarlet Shade" id="scarletShade">

    <!-- Hauptinhalt -->
    <main>
        <div class="inhalt">
            <h1>Impressum</h1>
            
            <h2>Gestaltung</h2>
            <p>Viktoria Grushev, Sabrina Siebels und Sophie Hecker</p>
            
            <br>
           
                <h2>Kurs:</h2>
                <p>Multimedia</p>
            </div>

    
                <h2>Betreut von:</h2>
                <p>Prof. Götz Greiner und Dipl.-Phys. Thomas Severiens</p>
            </div>
            
            <br>
            <h2>Institution:</h2>
            <p>Jade HS Wilhelmshaven</p>
            
            <h2>Studiengang:</h2>
            <p>Medienwirtschaft und Journalismus</p>
            
            <br>
            <h2>Verwendete Schriften</h2>
            <p>Bangers und Open Sans</p>
            
        </div>
    </main>
</body>
</html>

