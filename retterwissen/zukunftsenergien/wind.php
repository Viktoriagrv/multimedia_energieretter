<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Retterwissen: Windenergie</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

    <style>
        main {
            background-color: #b9e5ef;
            overflow: hidden; /* Verhindert das Scrollen der Seite */
        }

        h1 {
            font-family: verdana;
            color: #285238;
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
        }

        /* Der verzögerungseffekt */
        details[open] summary ~ * {
            animation: sweep .7s ease-in-out;
        }

        @keyframes sweep {
            0% {opacity: 0; margin-left: -20px}
            100% {opacity: 1; margin-left: 0px}
        }

        .HERO {
            position: absolute;
            bottom: 4%;
            left: 2%;
            height: 30%;
        }

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
            font-family: verdana;
            font-size: 1rem;
            color: #285238;
            text-align: left;
            visibility: visible;
        }

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
            font-family: verdana;
            font-size: 1rem;
            color: #285238;
            text-align: left;
            visibility: hidden;
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

        .PFEIL-LI {
            position: absolute;
            bottom: 5%;
            left: 5%;
            height: 15%;
            width: auto;
        }

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
        }

        .WINDRAD {
            position: absolute;
            bottom: -4%;
            left: -10%;
            height: 40%;
            width: auto;
        }

        .AKKORDEON-INHALT {
            padding: 1rem 1rem 1px 1rem;
            color: black;
        }


        .AKKORDEON {
            position: absolute;
            top: 26%;
            right: 15%;
            width: 25%;
            visibility: hidden;
            transform: translateY(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

   .hervorheben {
    color: #e8a723;
    font-weight: bold;
    cursor: pointer;
    position: relative;
  	}
		
.hervorheben:hover::after {
    content: attr(data-infokasten);
    background-color: lightgray;
    color: #285238;
    position: absolute;
    padding: 5px;
    border-radius: 3px;
    white-space: nowrap;
    font-size: 0.9rem;
    transform: translateX(-50%) translateY(-100%); /* Zentriert und nach oben versetzt */
    z-index: 1000;
    left: 50%; /* Zentrieren auf der x-Achse */
    bottom: -5px; /* Abstand nach unten */
}

        .AKKORDEON-SICHTBAR {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

        .ZEIGEN {
            visibility: visible;
        }

        .WEG {
            visibility: hidden;
        }
    </style>
</head>

<body>

<?php include '../../include/nav.php'; ?>

<main>

    <div class="HEADER"> Retterwissen <br>
        Windkraft</div>
    <img class="WINDRAD" src="../../images/Windenergie.png" alt="Landschaft mit Windrädern">


    <img class="HERO" src="../../images/BadGirl.png" alt="Scarlett Shade">

    <div class="SPRECHBLASE">

        <p>Hallo! <br> <br>
            Toll, dass du mehr über Windenergie lernen willst.<br> <br>
            Windenergie ist eine der wichtigsten Sachen in der Energie und versorgt uns durch
            Windstöße und Windkraftanlagen und ist daher für die Zukunft extrem wichtig.</p>

        <img class="PFEIL-RE" src="../../images/pfeil_rechts.png" alt="Roter Pfeil nach rechts">
    </div>

    <div class="SPRECHBLASEWEITER">

        <p>Ich habe dir hier einige interessante Themen reinfliegen lassen. Klick einfach drauf und stöber rum. <br> <br>
            Viel Spaß beim Lernen!.</p>

        <img class="PFEIL-LI" src="../../images/pfeil_links.png" alt="Roter Pfeil nach links">

    </div>

    <div class="AKKORDEON">
        <details>
            <summary>Was ist Windenergie?</summary>
            <div class="AKKORDEON-INHALT">
                <p>
					<span class="hervorheben" data-infokasten="Eine Art von Energie, die aus dem Wind gewonnen wird. Der Wind bewegt die Rotoren eines Windrads, die dann Strom erzeugen.">Windenergie</span>
					ist eine erneuerbare Energiequelle, die aus dem 
					
					<span class="hervorheben" data-infokasten="Luftbewegung, die entsteht, wenn verschiedene Luftmassen sich miteinander vermischen. Sie kann stark oder schwach sein.">Wind</span>
					erzeugt wird. Wenn Wind weht, bewegt er die 
					
					<span class="hervorheben" data-infokasten="Drehscheiben eines Windrads, die sich im Wind drehen. Diese Rotoren sind ähnlich wie große, schraubenförmige Flügel.">Rotoren</span>
					eines Windrads, das wie ein großes Flügelrad aussieht. <br> <br> Diese Bewegung treibt einen 
					
					<span class="hervorheben" data-infokasten="Ein Gerät, das Bewegung in elektrische Energie umwandelt. Im Windrad wird der Generator durch die Bewegung der Rotoren aktiviert.">Generator</span>
					an, der die 
					
					<span class="hervorheben" data-infokasten="Die Energie, die ein bewegter Körper hat. Im Fall der Windenergie ist es die Bewegung der Luft.">kinetische Energie</span>
					des Windes in elektrischen Strom umwandelt. Der erzeugte Strom wird zur Beleuchtung, für elektrische Geräte und zur Heizung verwendet.
                    
                </p>
            </div>
        </details>
		
<details>
    <summary>Was sind Windkraftanlagen?</summary>
    <div class="AKKORDEON-INHALT">
        <p>Windkraftanlagen sind Geräte, die kinetische Energie des Windes in elektrische Energie umwandeln. Sie bestehen in der Regel aus einem <span class="hervorheben" data-infokasten="Mast, der die Rotoren in der Höhe hält, um eine optimale Windgeschwindigkeit zu gewährleisten.">Mast</span>, einem <span class="hervorheben" data-infokasten="Ein rotierendes Gerät, das Energie durch Bewegung erzeugt.">Rotor</span> und einem <span class="hervorheben" data-infokasten="Maschine, die mechanische Energie in elektrische Energie umwandelt.">Generator</span>. Die <span class="hervorheben" data-infokasten="Rotoren, die sich durch den Wind drehen und Strom erzeugen.">Rotoren</span> sind die flügelartigen Strukturen, die sich im Wind drehen und den Generator betreiben. Sie sind in der Regel auf einem hohen <span class="hervorheben" data-infokasten="Ein vertikaler Stützpfeiler, auf dem die Rotoren montiert sind.">Mast</span> montiert, um eine optimale Windgeschwindigkeit zu erreichen. Diese Anlagen werden oft in Gruppen betrieben, um eine größere Menge an Strom zu erzeugen. Die Technik hat sich im Laufe der Jahre weiterentwickelt, um effizienter und umweltfreundlicher zu werden.</p>
    </div>
</details>

<details>
    <summary>Windkraft und Umwelt</summary>
    <div class="AKKORDEON-INHALT">
        <p>Windenergie ist besonders umweltfreundlich, da sie keine <span class="hervorheben" data-infokasten="Luftverschmutzung, die durch Verbrennung fossiler Brennstoffe entsteht.">Luftverschmutzung</span> verursacht und keine <span class="hervorheben" data-infokasten="Gase, die zur globalen Erwärmung beitragen.">Treibhausgase</span> freisetzt. Sie nutzt den <span class="hervorheben" data-infokasten="Luftbewegungen, die durch unterschiedliche Temperaturen und Druckverhältnisse entstehen.">Wind</span> als Energiequelle und hinterlässt keine <span class="hervorheben" data-infokasten="Abfälle oder Stoffe, die in die Umwelt gelangen und ihre Qualität beeinträchtigen.">Abfälle</span> oder <span class="hervorheben" data-infokasten="Stoffe, die die Umwelt negativ beeinflussen.">Verunreinigungen</span>. Durch die Nutzung von Windkraft werden weniger <span class="hervorheben" data-infokasten="Rohstoffe, die für die Energieproduktion benötigt werden.">natürliche Ressourcen</span> wie Kohle und Gas benötigt, was gut für die Umwelt ist. Windkraftanlagen sollten an Orten errichtet werden, an denen sie die <span class="hervorheben" data-infokasten="Die natürliche Umgebung ohne negative Auswirkungen.">Natur</span> möglichst wenig beeinträchtigen, zum Beispiel fernab von empfindlichen Ökosystemen.</p>
    </div>
</details>

<details>
    <summary>Zukunft</summary>
    <div class="AKKORDEON-INHALT">
        <p>Windkraft hat eine wichtige Rolle in der <span class="hervorheben" data-infokasten="Der Übergang zu erneuerbaren Energien, um die Umwelt zu schützen und die fossile Brennstoffnutzung zu reduzieren.">Energiewende</span>. Sie trägt dazu bei, unseren <span class="hervorheben" data-infokasten="Der gesamte elektrische Energieverbrauch eines Gebiets oder Landes.">Strombedarf</span> mit <span class="hervorheben" data-infokasten="Energie, die aus natürlichen Quellen wie Wind gewonnen wird.">sauberer Energie</span> zu decken und die <span class="hervorheben" data-infokasten="Abhängigkeit von fossilen Brennstoffen wie Kohle, Öl und Gas.">Abhängigkeit von fossilen Brennstoffen</span> zu verringern. In Zukunft könnten <span class="hervorheben" data-infokasten="Windkraftanlagen, die noch effizienter und leistungsfähiger sind.">Windkraftanlagen</span> noch leistungsfähiger und effizienter werden, wodurch sie noch mehr <span class="hervorheben" data-infokasten="Elektrische Energie, die durch Wind erzeugt wird.">Strom</span> produzieren könnten. Die Energiewende setzt auf erneuerbare Energiequellen wie Wind, um die Umwelt zu schützen und eine nachhaltige Energieversorgung sicherzustellen.</p>
    </div>
</details>

    </div>

</main>


<script>
    // Funtion to close all accordion sections
    function closeAllAccordions() {
        document.querySelectorAll('.AKKORDEON details[open]').forEach(detail => {
            detail.removeAttribute('open');
        });
    }

    document.querySelector(".PFEIL-RE").addEventListener("click", ZeigeSprechblaseWeiter);

    function ZeigeSprechblaseWeiter() {
        document.querySelector(".SPRECHBLASE").classList.add("WEG");
        document.querySelector(".SPRECHBLASEWEITER").classList.add("ZEIGEN");

        // Akkordeons sichtbar machen
        document.querySelector(".AKKORDEON").classList.add("AKKORDEON-SICHTBAR");
    }

    document.querySelector(".PFEIL-LI").addEventListener("click", ZeigeSprechblase);

    function ZeigeSprechblase() {
        document.querySelector(".SPRECHBLASE").classList.remove("WEG");
        document.querySelector(".SPRECHBLASEWEITER").classList.remove("ZEIGEN");

        // AKKORDEON SCHLIEßen WENN ANDERES AUF CLICK GEÖFFNET WIRD
        closeAllAccordions();
    }

    document.querySelectorAll('.AKKORDEON details summary').forEach(summary => {
        summary.addEventListener('click', closeAllAccordions);
    });

  
</script>

</body>
</html>



