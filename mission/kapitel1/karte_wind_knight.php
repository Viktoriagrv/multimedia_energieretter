<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Windräder bauen</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		.WEG{
			visibility: hidden;
		}
	
	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <main>
		
		<div class="INFOBOX">
			
			<img class="BILDINFOBOX-KNIGHT" src="../../images/Prinz.png" alt="Golden Knight">
			<div class="TEXT-START">
				Das hast du sehr gut gemacht! Den ersten Test hast du bestanden.<br><br>
				Auf der Karte müssen nun an den richtigen Stellen die Windräder platziert werden, um die Mission fortzuführen. Wenn Du über die gelben Punkte gehst, bekommst Du eine kurze Erklärung über den Standort, die dir hilft, die geeigneten Standort zu finden. Viel Erfolg!
			</div>
								
			<button class="KARTE-ANSEHEN">Windräder platzieren</button>
		</div>
		
		<img class="WELTKARTE" src="../../images/Weltkarte.png" alt="Weltkarte">
		
		<div class="PLATZIERUNG">
			<div class="DROP-ELEMENT EUROPABTN" id='DROPEUROPA'></div>
			<div class="DROP-ELEMENT AUSTRALIENBTN" id='DROPAUSTRALIEN'></div>
			<div class="DROP-ELEMENT ASIENBTN" id='DROPASIEN'></div>
			<div class="DROP-ELEMENT SAHARABTN" id="DROPSAHARA"></div>
			<div class="DROP-ELEMENT NIAGARABTN" id="DROPNIAGARA"></div>
			<div class="DROP-ELEMENT AMAZONASBTN" id="DROPAMAZONAS"></div>
			<div class="DROP-ELEMENT ATLANTIKBTN" id="DROPATLANTIK"></div>
			<div class="DROP-ELEMENT SIBIRIENBTN" id="DROPSIBIRIEN"></div>
			<div class="DROP-ELEMENT MEXIKOBTN" id="DROPMEXIKO"></div>
			
			<div class="EUROPA-GRUEN"></div>
			<div class="AUSTRALIEN-GRUEN"></div>
			<div class="ASIEN-GRUEN"></div>
			<div class="SAHARA-GRUEN"></div>
			<div class="NIAGARA-GRUEN"></div>
			<div class="AMAZONAS-GRUEN"></div>
			<div class="ATLANTIK-BLAU"></div>
			<div class="SIBIRIEN-GRUEN"></div>
			<div class="MEXIKO-GRUEN"></div>
		</div>
		
		<img class="WINDRAD1 DRAG-ELEMENT" id='DRAGA' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD2 DRAG-ELEMENT" id='DRAGB' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD3 DRAG-ELEMENT" id='DRAGC' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		
		
			<img class="KNIGHT-KARTE" src="../../images/Prinz.png" alt="Golden Knight">
			<div class="SPRECHBLASE1">
				Ziehe die Windräder unten auf die richtigen Stellen auf der Weltkarte.
			</div>
		
			<div class="SPRECHBLASE2">
				Super! Das erste Windrad hast du richtig platziert.
			</div>
		
			<div class="SPRECHBLASE3">
				Sehr gut! Auch das zweite Windrad ist richtig abgelegt.
			</div>
	
		
		<div class="EUROPA">
			Die windigen Küstenregionen Europas.
		</div>
		
		
		<div class="AUSTRALIEN">
			Die trockenen Weiten Australiens.
		</div>
		
		
		<div class="ASIEN">
			Die hohen Berge Asiens.
		</div>
		
		
		<div class="SAHARA">
			Das heiße Wüstenmeer Afrikas.
		</div>
		
		
		<div class="NIAGARA">
			Die gewaltigen Wasserfälle Nordamerikas.
		</div>
		
		
		<div class="AMAZONAS">
			Der mächtige Strom im Herzen des Regenwaldes.
		</div>
		
		
		<div class="ATLANTIK">
			Die starken Strömungen des Atlantischen Ozeans.
		</div>
		
		
		<div class="SIBIRIEN">
			Die weiten Steppen im Norden Russlands.
		</div>
		
		
		<div class="MEXIKO">
			Die sonnigen Gebiete Mittelamerikas.
		</div>
		
		
		<div>
			<img class="WINDRADEUROPA" src="../../images/windraeder.png" alt="Zwei Windräder">
			<img class="WINDRADASIEN" src="../../images/windraeder.png" alt="Zwei Windräder">
			<img class="WINDRADSIBIRIEN" src="../../images/windraeder.png" alt="Zwei Windräder">
		</div>
		
		<div class="FEHLERMELDUNG">
			<button id="SCHLIESSEN">&times;</button>
			<div>Das war leider nicht richtig.</div>
		</div>
		
		
			<div>
				<img class="FEUERWERK-LINKS" src="../../images/feuerwerk.gif" alt="Feuerwerk">
			</div>
			<div>
				<img class="FEUERWERK-RECHTS" src="../../images/feuerwerk.gif" alt="Feuerwerk">
			</div>
		
		
		<div class="INFOBOX-WEITER">
			
			<img class="BILDINFOBOX-KNIGHT" src="../../images/Prinz.png" alt="Golden Knight">
			
			<div class="TEXT-ENDE">
				<div>
					Fantastische Arbeit! Das hast du toll gemacht!<br>
					Als Belohnung bekommst du von mir einen geheimen Code.<br><br>
					<div class="CODE">fts-909</div><br>
					Schreibe ihn dir auf und bewahre ihn gut! Wenn du später weitermachen möchtest, kannst Du ihn unter "Spiel fortsetzen" im Menü eingeben, um zum nächsten Kapitel zu kommen.
				</div>
			</div>
								
			<button class="BTNWEITER" onclick="window.location.href='../kapitel2/solar_scarlett.php'">Auf zum nächsten Kapitel!</button>
		</div>
		
    </main>
	
			
	<script>
		
		document.querySelector(".BILDINFOBOX-KNIGHT").addEventListener("click", KnightFliegt);

			function KnightFliegt(){
				document.querySelector(".BILDINFOBOX-KNIGHT").style.animationPlayState = "running";
				
				const knight = document.querySelector(".BILDINFOBOX-KNIGHT");

				// Entferne die Animation, indem du den `animation-name` auf "none" setzt
				knight.style.animation = "none";

				// Erzwungene Neuberechnung des Styles, um den Browser die Änderung registrieren zu lassen
				void knight.offsetWidth;

				// Füge die Animation wieder hinzu
				knight.style.animation = "FLIEGEN 4s linear 1 forwards";
						}

		
		document.querySelector(".KARTE-ANSEHEN").addEventListener("click",ZeigeWeltkarte);
		
			function ZeigeWeltkarte(){
				document.querySelector(".INFOBOX").classList.add("WEG");
				document.querySelector(".BILDINFOBOX-KNIGHT").classList.add("WEG");
				document.querySelector(".KNIGHT-KARTE").classList.add("ZEIGEN");
				document.querySelector(".SPRECHBLASE1").classList.add("ZEIGEN");
				document.querySelector(".WINDRAD1").classList.add("ZEIGEN");
				document.querySelector(".WINDRAD2").classList.add("ZEIGEN");
				document.querySelector(".WINDRAD3").classList.add("ZEIGEN");
			}
		
		document.querySelector(".KNIGHT-KARTE").addEventListener("click", KnightFliegtWieder);
		
		function KnightFliegtWieder(){
				document.querySelector(".KNIGHT-KARTE").style.animationPlayState = "running";
			
				const knightgross = document.querySelector(".KNIGHT-KARTE");								// Die nächsten drei Schritte sind mit ChatGPT programmiert: Entferne die Animation, indem du den `animation-name` auf "none" setzt
    			knightgross.style.animation = "none";												// Erzwungene Neuberechnung des Styles, um den Browser die Änderung registrieren zu lassen
    			void knightgross.offsetWidth;														// Füge die Animation wieder hinzu
    			knightgross.style.animation = "FLIEGEN 4s linear 1 forwards";
			}
		
				
			//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
				document.querySelector('#DROPEUROPA').addEventListener('mouseover',ZeigeEuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
				document.querySelector('#DROPEUROPA').addEventListener('mouseout',EuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
		
		
				function ZeigeEuropa() {
					document.querySelector(".EUROPA").classList.add("ZEIGEN");
				}
				function EuropaAus() {
					document.querySelector(".EUROPA").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPAUSTRALIEN').addEventListener('mouseover',ZeigeAustralien);   
				document.querySelector('#DROPAUSTRALIEN').addEventListener('mouseout',AustralienAus);
				
				function ZeigeAustralien() {
					document.querySelector(".AUSTRALIEN").classList.add("ZEIGEN");
				}
				function AustralienAus() {
					document.querySelector(".AUSTRALIEN").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPASIEN').addEventListener('mouseover',ZeigeAsien);   
				document.querySelector('#DROPASIEN').addEventListener('mouseout',AsienAus);
		
				
		
				function ZeigeAsien() {
					document.querySelector(".ASIEN").classList.add("ZEIGEN");
				}
				function AsienAus() {
					document.querySelector(".ASIEN").classList.remove("ZEIGEN");
				}
				
		
				document.querySelector('#DROPSAHARA').addEventListener('mouseover',ZeigeSahara);   
				document.querySelector('#DROPSAHARA').addEventListener('mouseout',SaharaAus);
				
				function ZeigeSahara() {
					document.querySelector(".SAHARA").classList.add("ZEIGEN");
				}
				function SaharaAus() {
					document.querySelector(".SAHARA").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPNIAGARA').addEventListener('mouseover',ZeigeNiagara);   
				document.querySelector('#DROPNIAGARA').addEventListener('mouseout',NiagaraAus);
				
				function ZeigeNiagara() {
					document.querySelector(".NIAGARA").classList.add("ZEIGEN");
				}
				function NiagaraAus() {
					document.querySelector(".NIAGARA").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPAMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   
				document.querySelector('#DROPAMAZONAS').addEventListener('mouseout',AmazonasAus);
				
				function ZeigeAmazonas() {
					document.querySelector(".AMAZONAS").classList.add("ZEIGEN");
				}
				function AmazonasAus() {
					document.querySelector(".AMAZONAS").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPATLANTIK').addEventListener('mouseover',ZeigeAtlantik);   
				document.querySelector('#DROPATLANTIK').addEventListener('mouseout',AtlantikAus);
				
				function ZeigeAtlantik() {
					document.querySelector(".ATLANTIK").classList.add("ZEIGEN");
				}
				function AtlantikAus() {
					document.querySelector(".ATLANTIK").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPSIBIRIEN').addEventListener('mouseover',ZeigeSibirien);   
				document.querySelector('#DROPSIBIRIEN').addEventListener('mouseout',SibirienAus);
				
	
				function ZeigeSibirien() {
					document.querySelector(".SIBIRIEN").classList.add("ZEIGEN");
				}
				function SibirienAus() {
					document.querySelector(".SIBIRIEN").classList.remove("ZEIGEN");
				}
		
				
				document.querySelector('#DROPMEXIKO').addEventListener('mouseover',ZeigeMexiko);   
				document.querySelector('#DROPMEXIKO').addEventListener('mouseout',MexikoAus);
				
				function ZeigeMexiko() {
					document.querySelector(".MEXIKO").classList.add("ZEIGEN");
				}
				function MexikoAus() {
					document.querySelector(".MEXIKO").classList.remove("ZEIGEN");
				}
		
		document.querySelector('#DRAGA').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGB').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGC').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DROPEUROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPEUROPA').addEventListener('drop',ElementAblegenEuropa);
		document.querySelector('#DROPSIBIRIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSIBIRIEN').addEventListener('drop',ElementAblegenSibirien);
		document.querySelector('#DROPASIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPASIEN').addEventListener('drop',ElementAblegenAsien);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPNIAGARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPNIAGARA').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPATLANTIK').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPATLANTIK').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPMEXIKO').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPMEXIKO').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPAMAZONAS').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAMAZONAS').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPSAHARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSAHARA').addEventListener('drop',AblegenFalsch);
		
		
		let abgelegteElemente = 0;
		
		
		function ElementAufheben() {
			event.dataTransfer.setData('text/plain',event.target.id);										// setzt das Drag-Element (Datentyp und Datenwert)
			AlleAus();
		}
		
		function AblegenErlauben() {
			if (event.target.classList.contains('DROP-ELEMENT') &&											// wenn das Ziel ein Drop-Element ist und
				! event.target.classList.contains('DRAG-ELEMENT')) {										// wenn das Ziel kein Drag-Element ist
				event.preventDefault();																		// dann ist Ablegen erlaubt, durch Verhindern der Default-Aktion des Events ("Öffnen als Link")
			}
		}
		
		function ElementAblegenEuropa() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPEUROPA').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenEuropa();
			AbgelegteElementeZaehlen();
		}
		
		function WindradZeigenEuropa(){
			document.querySelector(".WINDRADEUROPA").classList.add("ZEIGEN");
			document.querySelector(".EUROPABTN").classList.add("WEG");
			document.querySelector(".EUROPA-GRUEN").classList.add("ZEIGEN");
		}
		
		function ElementAblegenAsien() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			
			document.querySelector('#DROPASIEN').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenAsien();
			AbgelegteElementeZaehlen();
		}
		
		function WindradZeigenAsien(){
			document.querySelector(".WINDRADASIEN").classList.add("ZEIGEN");
			document.querySelector(".ASIENBTN").classList.add("WEG");
			document.querySelector(".ASIEN-GRUEN").classList.add("ZEIGEN");
		}
		
		function ElementAblegenSibirien() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPSIBIRIEN').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenSibirien();
			AbgelegteElementeZaehlen();
			
		}
		
		function WindradZeigenSibirien(){
			document.querySelector(".WINDRADSIBIRIEN").classList.add("ZEIGEN");
			document.querySelector(".SIBIRIENBTN").classList.add("WEG");
			document.querySelector(".SIBIRIEN-GRUEN").classList.add("ZEIGEN");
		}
		
		function AblegenFalsch(){
			document.querySelector(".FEHLERMELDUNG-KARTE").classList.add("ZEIGEN");
		}
		
		
		document.querySelector("#SCHLIESSEN").addEventListener("click",AlleAus);
		
		function AlleAus(){
			document.querySelector(".FEHLERMELDUNG-KARTE").classList.remove("ZEIGEN");
		}
		
			// zählt alle abgelegte Elemente und startet die Funktion die jeweils angebene Funktion
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 1){
				EinsAbgelegt();
				}																							
			}
		
		function EinsAbgelegt(){
			document.querySelector(".SPRECHBLASE1").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE2").classList.add("ZEIGEN");
		}
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 2){
				ZweiAbgelegt();
				}																							
			}
		
		function ZweiAbgelegt(){
			document.querySelector(".SPRECHBLASE2").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE3").classList.add("ZEIGEN");
		}
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 3){
				AlleAbgelegt();
				}																							
			}
		
		function AlleAbgelegt(){
			document.querySelector(".SCARLET-KARTE").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE1").classList.remove("ZEIGEN");
			document.querySelector(".INFOBOX-WEITER").classList.add("ZEIGEN");
			document.querySelector(".BILDINFOBOX-ENDE").classList.add("ZEIGEN");
			document.querySelector(".FEUERWERK-LINKS").classList.add("ZEIGEN");
			document.querySelector(".FEUERWERK-RECHTS").classList.add("ZEIGEN");
		}
	
		
	</script>
	
</body>
</html>

