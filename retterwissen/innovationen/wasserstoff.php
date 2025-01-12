<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    <!-- Bootstrap CSS für Styling und Komponenten einbinden -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Einbinden der CSS-Datei -->
    <link rel="stylesheet" href="include/css/styles.css"> <!-- Pfad zu deiner CSS-Datei -->

    <!-- Einbinden der Navigationsleiste -->
    <?php include 'include/partials/nav.htm'; ?>
</head>

<body>
    <main>
        <div class="text-container">
            <div class="scrollable-text" id="scrollable-text">
                Die Welt ist in Gefahr! 
                <br>Die Dunkelheit breitet sich aus und nur die mutigsten Helden können uns retten! 
                <br>Steht auf, Superhelden! 
                <br>Es ist Zeit zu kämpfen!
                <br><br>Wir müssen die Hoffnung bewahren und die Energien bündeln. 
                <br>Gemeinsam können wir die Herausforderungen meistern und die Erde schützen. 
                <br>Lasst uns unsere Kräfte vereinen und gegen die Dunkelheit antreten! 
                <br>Wir sind die Energieretter und unser Kampf beginnt jetzt!
                <br><br>Schließt euch uns an und lasst die Helden in euch erwecken!
                <br>Die Dunkelheit breitet sich aus und nur die mutigsten Helden können uns retten! 
                <br>Steht auf, Superhelden! 
                <br>Es ist Zeit zu kämpfen!
            </div>
            <button id="action-button" class="btn btn-warning" style="display: none;">Jetzt handeln!</button>
        </div>
    </main>

    <!-- Einbinden des Footers -->
    <?php include 'include/partials/footer.htm'; ?>

    <!-- Bootstrap JS und Abhängigkeiten für Dropdown und Toggler -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Einbinden der externen JavaScript-Datei -->
    <script src="include/js/intro.js"></script>
</body>
</html>
