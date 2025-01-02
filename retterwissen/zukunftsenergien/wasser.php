<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Retterwissen: Wasserenergie</title>

  <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

    <style>
        main {
            background-color: #b9e5ef;
            overflow: hidden; /* Verhindert das Scrollen der Seite */
        }

   		h1{
			font-family: "open sans";
			color:#e8a723;
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
            0% {opacity: 0; margin-left: -20px}
            100% {opacity: 1; margin-left: 0px}
        }

		
        .HERO {
            position: absolute;
            bottom: 4%;
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
			bottom:25%;
			left:12%;
			height:27%;
			width: 12%;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: "open sans";
			font-size: 1rem;
			color:#285238;
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
        .WINDRAD {
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
			height: 100px; /* Passe die Größe nach Bedarf an */
			width: auto;
			cursor: pointer;
			transition: transform 0.2s ease;
		}

		.BUTTON:hover {
			transform: scale(1.1); /* Leichter Vergrößerungseffekt beim Hover */
		}
		
		/* ÜBERGEORDNETES AKKORDEON */
        .AKKORDEON {
            position: absolute;
            top: 26%;
            right: 15%;
            width: 25%;
            visibility: hidden;
            transform: translateY(-20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
		
		/* AKKORDEON INHALT */
        .AKKORDEON-INHALT {
            padding: 0.5rem 1rem 1px 1rem;
            color: black;
			cursor: default;
        }

		  .AKKORDEON-SICHTBAR {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }

		
  		 .HERVORHEBEN {
			color: #e8a723;
			font-weight: bold;
			cursor: pointer;
			position: relative;
		}
		
		/* INFOBOX BEIM HOVERN */
		.HERVORHEBEN:hover::after {
			content: attr(data-infokasten);
			background-color: #285238;
			color: #FFFFFF;
			position: absolute;
			padding: 10px; /* Etwas mehr Padding für mehr Abstand */
			border-radius: 10px; 
			font-size: 0.9rem;
			font-family: 'Open Sans', sans-serif; /* Schriftart Open Sans */
			z-index: 1000;
			white-space: normal; /* Textumbrüche erlauben */
			width: 250px; /* Feste Breite */
			pointer-events: none; /* Verhindert, dass der Infokasten das Hover-Verhalten blockiert */
			left: calc(100% + 10px); /* Abstand zum Cursor auf der X-Achse */
			top: calc(100% + 10px); /* Abstand zum Cursor auf der Y-Achse */
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
                         Wasserkraft
	</div>
	
    <img class="WINDRAD" src="../../images/wasserkraftwerk.png" alt="Wasserkraftwerk">


    <img class="HERO" src="../../images/AquaBoy.png" alt="Aqua Boy">

    <div class="SPRECHBLASE">

        <p>Hallo! <br> <br>
            Es freut mich, dass du mehr über Wasserkraft lernen willst.<br> <br>
            Wasserkraft nutzt die Kraft von fließendem Wasser, um Strom zu machen, und ist super wichtig für unsere Zukunft!</p>

        <img class="PFEIL-RE" src="../../images/pfeil_gelb_rechts.png" alt="Gelber Pfeil nach rechts">
    </div>

    <div class="SPRECHBLASEWEITER">

        <p>Hier sind einige Informationen zu Wasserkraft! <br> <br>
			Viel Spaß beim Rumstöbern.</p>

        <img class="PFEIL-LI" src="../../images/pfeil_gelb_links.png" alt="Gelber Pfeil nach links">

    </div>
	


  <div class="AKKORDEON">
    <details>
        <summary>Was ist Wasserkraft?</summary>
        <div class="AKKORDEON-INHALT">
            <p>
                <span class="HERVORHEBEN" data-infokasten="Eine Art von Energie, die aus Wasser gewonnen wird. Fließendes Wasser wird genutzt, um Strom zu erzeugen.">Wasserkraft</span>
                ist eine erneuerbare Energiequelle, die durch die 
                
                <span class="HERVORHEBEN" data-infokasten="Die Bewegung von Wasser, z. B. in Flüssen oder bei fallendem Wasser in Staudämmen.">Bewegung von Wasser</span>
                erzeugt wird. Wenn Wasser fließt oder fällt, treibt es die 
                
                <span class="HERVORHEBEN" data-infokasten="Drehscheiben oder Turbinen, die durch die Kraft des Wassers bewegt werden. Diese wandeln die Energie des Wassers in mechanische Energie um.">Turbinen</span>
                an, die in Wasserkraftwerken installiert sind. <br><br> Diese Bewegung treibt einen 
                
                <span class="HERVORHEBEN" data-infokasten="Ein Gerät, das Bewegung in elektrische Energie umwandelt. In einem Wasserkraftwerk wird der Generator durch die Bewegung der Turbinen aktiviert.">Generator</span>
                an, der die 
                
                <span class="HERVORHEBEN" data-infokasten="Die Energie, die ein bewegter Körper hat. Im Fall der Wasserkraft ist es die Bewegung des Wassers.">kinetische Energie</span>
                des Wassers in elektrischen Strom umwandelt. Der erzeugte Strom wird zur Beleuchtung, für elektrische Geräte und zur Heizung verwendet.</p>
        </div>
    </details>
    
    <details>
        <summary>Was sind Wasserkraftwerke?</summary>
        <div class="AKKORDEON-INHALT">
            <p>Wasserkraftwerke sind Anlagen, die kinetische Energie von Wasser in elektrische Energie umwandeln. Sie bestehen in der Regel aus einem 
                <span class="HERVORHEBEN" data-infokasten="Ein Staudamm oder eine Struktur, die Wasser leitet, um es zur Stromerzeugung zu nutzen.">Staudamm</span>, 
                einer 
                
                <span class="HERVORHEBEN" data-infokasten="Ein rotierendes Gerät, das Energie durch die Bewegung von Wasser erzeugt.">Turbine</span> 
                und einem 
                
                <span class="HERVORHEBEN" data-infokasten="Maschine, die mechanische Energie in elektrische Energie umwandelt.">Generator</span>. 
                <br><br> Die 
                
                <span class="HERVORHEBEN" data-infokasten="Turbinen, die durch die Bewegung des Wassers angetrieben werden, um Strom zu erzeugen.">Turbinen</span> 
                sind die rotierenden Teile, die durch die Kraft des Wassers in Bewegung gesetzt werden und den Generator antreiben. Diese Anlagen werden oft in Flüssen oder an Wasserfällen betrieben, um eine größere Menge an Strom zu erzeugen. <br><br> Die Technik hat sich im Laufe der Jahre weiterentwickelt, um effizienter und umweltfreundlicher zu werden.</p>
        </div>
    </details>
    
    <details>
        <summary>Wasserkraft und Umwelt</summary>
        <div class="AKKORDEON-INHALT">
            <p>Wasserkraft ist besonders umweltfreundlich, da sie keine 
                <span class="HERVORHEBEN" data-infokasten="Luftverschmutzung, die durch Verbrennung fossiler Brennstoffe entsteht.">Luftverschmutzung</span> verursacht und keine 
                
                <span class="HERVORHEBEN" data-infokasten="Gase, die zur globalen Erwärmung beitragen.">Treibhausgase</span> 
                freisetzt. Sie nutzt die 
                
                <span class="HERVORHEBEN" data-infokasten="Die Bewegung von Wasser, z. B. in Flüssen oder durch fallendes Wasser.">Kraft des Wassers</span>
                als Energiequelle und hinterlässt keine 
                
                <span class="HERVORHEBEN" data-infokasten="Abfälle oder Stoffe, die in die Umwelt gelangen und ihre Qualität beeinträchtigen.">Abfälle</span> 
                oder 
                
                <span class="HERVORHEBEN" data-infokasten="Stoffe, die die Umwelt negativ beeinflussen.">Verunreinigungen</span>.
                <br><br> Durch die Nutzung von Wasserkraft werden weniger 
                
                <span class="HERVORHEBEN" data-infokasten="Rohstoffe, die für die Energieproduktion benötigt werden.">natürliche Ressourcen</span> 
                wie Kohle und Gas benötigt, was gut für die Umwelt ist. <br><br> Wasserkraftwerke sollten so gebaut werden, dass sie die 
                
                <span class="HERVORHEBEN" data-infokasten="Die natürliche Umgebung ohne negative Auswirkungen.">Natur</span>
                möglichst wenig beeinträchtigen, zum Beispiel durch den Schutz von Fischwanderungen und lokalen Ökosystemen.</p>
        </div>
    </details>

    <details>
        <summary>Zukunft</summary>
        <div class="AKKORDEON-INHALT">
            <p>Wasserkraft hat eine wichtige Rolle in der 
                <span class="HERVORHEBEN" data-infokasten="Der Übergang zu erneuerbaren Energien, um die Umwelt zu schützen und die fossile Brennstoffnutzung zu reduzieren.">Energiewende</span>. 
                Sie trägt dazu bei, unseren 
                
                <span class="HERVORHEBEN" data-infokasten="Der gesamte elektrische Energieverbrauch eines Gebiets oder Landes.">Strombedarf</span> 
                mit 
                
                <span class="HERVORHEBEN" data-infokasten="Energie, die aus natürlichen Quellen wie Wasser gewonnen wird.">sauberer Energie</span> 
                zu decken und die 
                
                <span class="HERVORHEBEN" data-infokasten="Abhängigkeit von fossilen Brennstoffen wie Kohle, Öl und Gas.">Abhängigkeit von fossilen Brennstoffen</span> 
                zu verringern. <br><br> In Zukunft könnten 
                
                <span class="HERVORHEBEN" data-infokasten="Wasserkraftwerke, die noch effizienter und leistungsfähiger sind.">Wasserkraftwerke</span> 
                noch leistungsfähiger und effizienter werden, wodurch sie noch mehr 
                
                <span class="HERVORHEBEN" data-infokasten="Elektrische Energie, die durch Wasserkraft erzeugt wird.">Strom</span> 
                produzieren könnten. <br><br> Die Energiewende setzt auf erneuerbare Energiequellen wie Wasser, um die Umwelt zu schützen und eine nachhaltige Energieversorgung sicherzustellen.</p>
        </div>
    </details>
</div>


    </div>

</main>


<script>

	
	
    // ALLE OFFENEN AKKORDEONS SCHLIEßEN SOBALD EINS GEÖFFNET
    function closeAllAccordions() {
        document.querySelectorAll('.AKKORDEON details[open]').forEach(detail => {
            detail.removeAttribute('open');
        });
    }

    document.querySelector(".PFEIL-RE").addEventListener("click", ZeigeSprechblaseWeiter);

    function ZeigeSprechblaseWeiter() {
        document.querySelector(".SPRECHBLASE").classList.add("WEG");
        document.querySelector(".SPRECHBLASEWEITER").classList.add("ZEIGEN");

        // AKKORDEONS SICHTBAR MACHEN
        document.querySelector(".AKKORDEON").classList.add("AKKORDEON-SICHTBAR");
    }

	   //SPRECHBLASE
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