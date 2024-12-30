<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Retterwissen: Innovationen</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

    <style>
        main {
            background-color: #b9e5ef;
            overflow: hidden; /* Verhindert das Scrollen der Seite */
        }

        h1 {
            font-family: "open sans";
            color: #e8a723;
            font-size: 2rem;
            padding-top: 0px;
        }

        p {
            text-align: left;
        }

        details {
            background: #eee;
            border: 1px solid #e8a723;
            border-radius: 3px;
            margin-bottom: 1.5rem;
        }

        summary {
            background: #e8a723;
            color: #fff;
            cursor: pointer;
            padding: 1rem;
            text-align: left;
            font-weight: bold;
        }

        /* Verzögerungseffekt */
        details[open] summary ~ * {
            animation: sweep .7s ease-in-out;
        }

        @keyframes sweep {
            0% {
                opacity: 0;
                margin-left: -20px
            }

            100% {
                opacity: 1;
                margin-left: 0px
            }
        }

        .HERO {
            position: absolute;
            bottom: -3%;
            left: 2%;
            height: 30%;
        }

        /* SPRECHBLASE SUPERHELD */
        .SPRECHBLASE {
            position: absolute;
            padding-top: 5px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            bottom: 25%;
            left: 12%;
            height: 27%;
            width: 12%;
            border-radius: 20px 20px 20px 0px;
            background-color: white;
            box-shadow: 5px 5px 10px 0px gray;
            font-family: "open sans";
            font-size: 1rem;
            color: #285238;
            text-align: left;
            visibility: visible;
            cursor: default;
        }

        /* SPRECHBLASE SUPERHELD NUMMER ZWEI */
        .SPRECHBLASEWEITER {
            position: absolute;
            padding-top: 5px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
            bottom: 25%;
            left: 12%;
            height: 18%;
            width: 12%;
            border-radius: 20px 20px 20px 0px;
            background-color: white;
            box-shadow: 5px 5px 10px 0px gray;
            font-family: "open sans";
            font-size: 1rem;
            color: #285238;
            text-align: left;
            visibility: hidden;
            cursor: default;
        }

        .LOS {
            position: absolute;
            bottom: 5%;
            right: 5%;
            display: inline-block;
            padding: 10px 15px;
            font-family: 'Bangers';
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border: 2px;
            border-color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        /* PFEIL LINKS */
        .PFEIL-LI {
            position: absolute;
            bottom: 5%;
            left: 5%;
            height: 15%;
            width: auto;
        }

        /* PFEIL RECHTS */
        .PFEIL-RE {
            position: absolute;
            bottom: 5%;
            right: 5%;
            height: 10%;
            width: auto;
        }

        .HEADER {
            position: absolute;
            top: 16%;
            left: 8%;
            font-family: "bangers";
            color: #285238;
            font-size: 5rem;
            cursor: default;
        }

        /* BILD VOM WINDRAD */
        .BLUMEN {
            position: absolute;
            bottom: -4%;
            left: -10%;
            height: 40%;
            width: auto;
        }

        .BUTTONBILDER {
            position: absolute;
            top: 20%;
            right: 15%;
            display: flex;
            gap: 1rem;
            justify-content: center;
            align-items: center;
        }

        .BUTTON {
            height: 100px;
            /* Passe die Größe nach Bedarf an */
            width: auto;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .BUTTON:hover {
            transform: scale(1.1);
            /* Leichter Vergrößerungseffekt beim Hover */
        }

		.KARUSELL {
			position: absolute;
			top: 26%;
			right: 10%; 
			width: 25%; /* Nimmt nur 25% der Breite ein */
			visibility: hidden; /* Standardmäßig unsichtbar */
			opacity: 0;
			transform: translateY(-20px);
			transition: opacity 0.5s ease, transform 0.5s ease, visibility 0s ease 0.5s; /* Verzögerung beim Anzeigen */
		}

		.KARUSELL-SICHTBAR {
			visibility: visible; /* Karussell sichtbar machen */
			opacity: 1;
			transform: translateY(0); /* Sanfte Animation */
			transition: opacity 0.5s ease, transform 0.5s ease;
		}


        /* Text Slider CSS */
        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        .carousel-inner {
            min-height: 300px;
            border: 1px solid #fff;
            border-radius: 30px;
            background-color: #bbbbbb;
        }

    </style>
</head>

<body>

<?php include '../include/nav.php'; ?>

<main>

    <div class="HEADER"> Retterwissen <br>
                         Innovationen
    </div>

    <img class="BLUMEN" src="../images/blumenwiese.png" alt="Blumenwiese">

    <img class="HERO" src="../images/Prinzessin.png" alt="Prinzessin">

    <div class="SPRECHBLASE">
        <p>Oh...Hallo! <br> <br>
            Dich interessieren neue Technologien?<br> <br>
            Das ist toll! Ich zeig dir gerne einige spannende Invnovationen!</p>
        <img class="PFEIL-RE" src="../../images/pfeil_gelb_rechts.png" alt="Gelber Pfeil nach rechts">
    </div>

    <div class="SPRECHBLASEWEITER">
        <p>Das ist total spannend, oder? <br> <br>
            Viel Spaß beim Lesen!</p>
        <img class="PFEIL-LI" src="../../images/pfeil_gelb_links.png" alt="Gelber Pfeil nach links">
    </div>

<div class="KARUSELL">
    <!-- Dein Karussell-Inhalt -->
    <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="6000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item text-center p-4 active">
                <p>Inhalt 1<br>Hier kann beliebiger Text eingefügt werden</p>
            </div>
            <div class="carousel-item text-center p-4">
                <p>Inhalt 2<br>Es kann jede Art von HTML verwendet werden,<br> wie z.B. dieser <a href="#top">Link nach oben</a></p>
            </div>
            <div class="carousel-item text-center p-4">
                <p>Inhalt 3<br><b>Hier kann beliebiger Text eingefügt werden</b></p>
            </div>
            <div class="carousel-item text-center p-4">
                <p>Inhalt 4<br><i>Hier kann auch ein Bild eingefügt werden</i></p>
                <p><a href="http://www.mobirise-tutorials.com/" target="_blank"><img src="http://www.mobirise-tutorials.com/LawyerM4-Tutorials/assets/images/logo-mobirise-122x122.png" alt="Logo" title="Mobirise-Tutorials.com"></a></p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</main>

<script>
// Eventlistener für den Pfeil nach rechts (weiter)
document.querySelector(".PFEIL-RE").addEventListener("click", function() {
    // Blase 1 ausblenden
    document.querySelector(".SPRECHBLASE").classList.add("WEG");

    // Blase 2 einblenden
    document.querySelector(".SPRECHBLASEWEITER").classList.add("ZEIGEN");

    // Karussell sichtbar machen
    document.querySelector(".KARUSELL").classList.add("KARUSELL-SICHTBAR");
});

// Eventlistener für den Pfeil nach links (zurück)
document.querySelector(".PFEIL-LI").addEventListener("click", function() {
    // Blase 1 wieder einblenden
    document.querySelector(".SPRECHBLASE").classList.remove("WEG");

    // Blase 2 ausblenden
    document.querySelector(".SPRECHBLASEWEITER").classList.remove("ZEIGEN");

    // Karussell unsichtbar machen
    document.querySelector(".KARUSELL").classList.remove("KARUSELL-SICHTBAR");
});


</script>

</body>
</html>
