<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Retterwissen: Solarenergie</title>

  <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

    <style>
       
		
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
            left: 10%;
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
			left:22%;
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
            left: 22%;
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

		 /* BILD VOM SOLARPANEL */
        .SOLAR {
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
                         Solarenergie
	</div>
	
    <img class="SOLAR" src="../../images/Solarenergie.png" alt="Solarenergie">


    <img class="HERO" src="../../images/Prinz.png" alt="Prinz">

    <div class="SPRECHBLASE">

        <p>Hey du! <br> <br>
            Du bist hier, weil du mehr über Solarenergiewissen willst? Cool!<br> <br>
            Sonnenenergie fängt das Licht der Sonne ein und macht daraus Strom – eine richtig wichtige Energiequelle für unsere Zukunft!</p>

        <img class="PFEIL-RE" src="../../images/pfeil_gelb_rechts.png" alt="Gelber Pfeil nach rechts">
    </div>

    <div class="SPRECHBLASEWEITER">

        <p>Lass uns zusammen entdecken, warum Solarenergie so wichtig ist!</p>

        <img class="PFEIL-LI" src="../../images/pfeil_gelb_links.png" alt="Gelber Pfeil nach links">

    </div>
	

<div class="AKKORDEON">
    <details>
        <summary>Was ist Sonnenenergie?</summary>
        <div class="AKKORDEON-INHALT">
            <p>
                <span class="HERVORHEBEN" data-infokasten="Eine Art von Energie, die von der Sonne kommt. Sie wird genutzt, um Strom zu erzeugen.">Sonnenenergie</span>
                ist eine erneuerbare Energiequelle, die durch das 
                
                <span class="HERVORHEBEN" data-infokasten="Licht und Wärme, die von der Sonne abgestrahlt werden.">Licht und die Wärme der Sonne</span>
                erzeugt wird. Sonnenstrahlen treffen auf 
                
                <span class="HERVORHEBEN" data-infokasten="Geräte, die das Sonnenlicht in Strom umwandeln.">Solarmodule</span>,
                die in Solaranlagen eingebaut sind. <br><br> Diese Strahlen bringen 
                
                <span class="HERVORHEBEN" data-infokasten="Ein Gerät, das Licht in elektrische Energie umwandelt.">Photovoltaikzellen</span>
                zum Laufen, die die Energie der Sonne in Strom umwandeln. Der erzeugte Strom wird für Licht, elektrische Geräte und zum Heizen verwendet.</p>
        </div>
    </details>
    
    <details>
        <summary>Was sind Solaranlagen?</summary>
        <div class="AKKORDEON-INHALT">
            <p>Solaranlagen sind Geräte, die Sonnenenergie in elektrische Energie umwandeln. Sie bestehen in der Regel aus einem 
                <span class="HERVORHEBEN" data-infokasten="Platten, die das Sonnenlicht auffangen und in Strom umwandeln.">Solarmodul</span>, 
                einer 
                
                <span class="HERVORHEBEN" data-infokasten="Die Geräte, die das Sonnenlicht in Strom umwandeln.">Photovoltaikzelle</span> 
                und einem 
                
                <span class="HERVORHEBEN" data-infokasten="Maschine, die Strom speichert, um ihn später zu verwenden.">Speicher</span>. 
                <br><br> Die 
                
                <span class="HERVORHEBEN" data-infokasten="Platten, die das Sonnenlicht einfangen und in Strom umwandeln.">Solarmodule</span> 
                sind die Teile der Anlage, die das Licht der Sonne auffangen. Sie sind meistens auf Dächern oder Feldern montiert. <br><br> Diese Anlagen werden oft in großen Feldern oder auf Häuserdächern betrieben, um so viel Sonnenenergie wie möglich zu nutzen. Die Technik hat sich im Laufe der Jahre verbessert, um effizienter und umweltfreundlicher zu werden.</p>
        </div>
    </details>
    
    <details>
        <summary>Sonnenenergie und Umwelt</summary>
        <div class="AKKORDEON-INHALT">
            <p>Sonnenenergie ist besonders umweltfreundlich, weil sie keine 
                <span class="HERVORHEBEN" data-infokasten="Luftverschmutzung, die durch Verbrennen von Kohle, Öl oder Gas entsteht.">Luftverschmutzung</span> verursacht und keine 
                
                <span class="HERVORHEBEN" data-infokasten="Gase, die die Erde immer wärmer machen.">Treibhausgase</span> 
                freisetzt. Sie nutzt das 
                
                <span class="HERVORHEBEN" data-infokasten="Das Licht und die Wärme, die von der Sonne kommen.">Licht und die Wärme der Sonne</span>
                als Energiequelle und hinterlässt keine 
                
                <span class="HERVORHEBEN" data-infokasten="Schadstoffe, die die Erde oder die Luft verschmutzen.">Verschmutzungen</span>.
                <br><br> Durch die Nutzung von Sonnenenergie brauchen wir weniger 
                
                <span class="HERVORHEBEN" data-infokasten="Energiequellen wie Öl, Gas oder Kohle.">fossile Brennstoffe</span> 
                wie Kohle oder Gas, was gut für die Natur ist. <br><br> Solaranlagen sollten so gebaut werden, dass sie die 
                
                <span class="HERVORHEBEN" data-infokasten="Die Welt und die Natur, in der wir leben.">Natur</span>
                nicht negativ beeinflussen, zum Beispiel durch den Schutz von Tieren und Pflanzen.</p>
        </div>
    </details>

    <details>
        <summary>Zukunft</summary>
        <div class="AKKORDEON-INHALT">
            <p>Sonnenenergie hat eine wichtige Rolle in der 
                <span class="HERVORHEBEN" data-infokasten="Der Prozess, bei dem wir auf erneuerbare Energiequellen umsteigen, um die Umwelt zu schützen.">Energiewende</span>. 
                Sie hilft dabei, unseren 
                
                <span class="HERVORHEBEN" data-infokasten="Der gesamte Stromverbrauch in einem Land oder einer Region.">Strombedarf</span> 
                mit 
                
                <span class="HERVORHEBEN" data-infokasten="Energie, die aus der Sonne kommt.">sauberer Energie</span> 
                zu decken und die 
                
                <span class="HERVORHEBEN" data-infokasten="Die Abhängigkeit von nicht erneuerbaren Energiequellen wie Kohle oder Öl.">Abhängigkeit von fossilen Brennstoffen</span> 
                zu reduzieren. <br><br> In Zukunft könnten 
                
                <span class="HERVORHEBEN" data-infokasten="Solaranlagen, die noch besser und leistungsfähiger sind.">Solaranlagen</span> 
                noch effizienter werden, sodass wir noch mehr Strom aus der Sonne gewinnen können. <br><br> Die Energiewende setzt auf saubere Energiequellen wie die Sonne, um die Umwelt zu schonen und die Energie für die Zukunft sicherzustellen.</p>
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
