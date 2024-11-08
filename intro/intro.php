<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="include/css/styles.scss">
</head>

<body>
    <?php include 'include/partials/nav.php'; ?>

    <main>
        <div class="container">
            <!-- Text über dem Brief -->
            <div class="text-warning" id="text-above-brief">
                Huch, du hast einen Brief aus der Zukunft bekommen.
            </div>

            <!-- Dein animierter Brief -->
            <div class="letter-image">
                <div class="animated-mail">
                    <div class="back-fold"></div>
                    <div class="letter">
                        <div class="letter-border"></div>
                        <div class="letter-title"></div>
                        <div class="letter-context"></div>
                        <div class="letter-stamp">
                            <div class="letter-stamp-inner"></div>
                        </div>
                    </div>
                    <div class="top-fold"></div>
                    <div class="body"></div>
                    <div class="left-fold"></div>
                </div>
                <div class="shadow"></div>
            </div>

            <!-- Der Button unter dem Brief (versteckt zu Beginn) -->
            <div id="button-container" style="display: none;">
                <button type="button" class="btn btn-warning" id="read-button">Willst du ihn lesen?</button>
            </div>
        </div><!-- /container -->
    </main>

    <?php include 'include/partials/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="include/js/intro.js"></script>

    <script>
        // Verzögert den Button, der unter dem Brief erscheint
        setTimeout(function() {
            document.getElementById("button-container").style.display = "block";
        }, 4000);  // Button erscheint nach 4 Sekunden

        // Event-Listener für den Button
        document.getElementById("read-button").addEventListener("click", function() {
            alert("Du hast den Brief geöffnet!");
            // Weitere Aktionen, z.B. den Brief "öffnen" oder anzeigen
        });
    </script>
</body>
</html>
