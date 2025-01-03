<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Wasserkraftwerke bauen</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <main>
		
		<div class="INFOBOX">
			
			<img class="BILDINFOBOX" src="../../images/BadGirl.png" alt="Scarlett Shade">
			<div class="TEXT-START">
				Das hast du sehr gut gemacht! Den ersten Test hast du bestanden.<br><br>
				Auf der Karte müssen nun an den richtigen Stellen die Wasserkraftwerke platziert werden, um die Mission fortzuführen. Wenn Du über die gelben Punkte gehst, bekommst Du wieder die kurze Erklärung über den Standort, die dir hilft, die geeigneten Standorte zu finden. Viel Erfolg!
			</div>
								
			<button class="KARTE-ANSEHEN">Wasserkraftwerke platzieren</button>
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
		
		<img class="WASSERKRAFT1 DRAG-ELEMENT" id='DRAGA' draggable='true' src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
		<img class="WASSERKRAFT2 DRAG-ELEMENT" id='DRAGB' draggable='true' src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
		<img class="WASSERKRAFT3 DRAG-ELEMENT" id='DRAGC' draggable='true' src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
		
		
			<img class="SCARLET-KARTE" src="../../images/BadGirl.png" alt="Scarlett Shade">
			<div class="SPRECHBLASE1">
				Ziehe die Wasserkraftwerke unten auf die richtigen Stellen auf der Weltkarte.
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
			<img class="KRAFTWERKNIAGARA" src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
			<img class="KRAFTWERKAMAZONAS" src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
			<img class="KRAFTWERKATLANTIK" src="../../images/wasserkraft.png" alt="Wasserkraftwerk">
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
			
			<img class="BILDINFOBOX-ENDE" src="../../images/BadGirl.png" alt="Scarlet Shade">
			
			<div class="TEXT-ENDE">
				<div>
					Du bist ein wahrer Energieretter!<br>
					Du es es geschafft und die Welt von morgen vor dem Untergang bewahrt.<br><br>
					
					
				</div>
			</div>
								
			<button class="BTNWEITER" onclick="window.location.href='../zertifikate/zertifikat_scarlet.php'">Zu Deinem Zertifikat</button>
		</div>
		
    </main>
	
			
	<script>
		
		document.querySelector(".BILDINFOBOX").addEventListener("mouseover", ScarletWeg);
			document.querySelector(".BILDINFOBOX").addEventListener("mouseout", ScarletDa);

			function ScarletWeg(){
				document.querySelector(".BILDINFOBOX").classList.add("WEG");
			}
			function ScarletDa(){
				document.querySelector(".BILDINFOBOX").classList.remove("WEG");
			}
		
		document.querySelector(".KARTE-ANSEHEN").addEventListener("click",ZeigeWeltkarte);
		
			function ZeigeWeltkarte(){
				document.querySelector(".INFOBOX").classList.add("WEG");
				document.querySelector(".BILDINFOBOX").classList.add("WEG");
				document.querySelector(".SCARLET-KARTE").classList.add("ZEIGEN");
				document.querySelector(".SPRECHBLASE1").classList.add("ZEIGEN");
				document.querySelector(".WASSERKRAFT1").classList.add("ZEIGEN");
				document.querySelector(".WASSERKRAFT2").classList.add("ZEIGEN");
				document.querySelector(".WASSERKRAFT3").classList.add("ZEIGEN");
			}
		
		
		document.querySelector(".SCARLET-KARTE").addEventListener("mouseover",ScarlettUnsichtbar);
		document.querySelector(".SCARLET-KARTE").addEventListener("mouseout",ScarlettSichtbar);
		
		function ScarlettUnsichtbar(){
			document.querySelector(".SCARLET-KARTE").classList.add("WEG");
		}
		
		function ScarlettSichtbar(){
			document.querySelector(".SCARLET-KARTE").classList.remove("WEG");
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
		document.querySelector('#DROPNIAGARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPNIAGARA').addEventListener('drop',ElementAblegenNiagara);
		document.querySelector('#DROPATLANTIK').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPATLANTIK').addEventListener('drop',ElementAblegenAtlantik);
		document.querySelector('#DROPAMAZONAS').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAMAZONAS').addEventListener('drop',ElementAblegenAmazonas);
		document.querySelector('#DROPMEXIKO').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPMEXIKO').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPSAHARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSAHARA').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPEUROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPEUROPA').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPSIBIRIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSIBIRIEN').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPASIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPASIEN').addEventListener('drop',AblegenFalsch);
		
		
		
		
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
		
		function ElementAblegenNiagara() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPNIAGARA').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WasserkraftwerkZeigenNiagara();
			AbgelegteElementeZaehlen();
		}
		
		function WasserkraftwerkZeigenNiagara(){
			document.querySelector(".KRAFTWERKNIAGARA").classList.add("ZEIGEN");
			document.querySelector(".NIAGARABTN").classList.add("WEG");
			document.querySelector(".NIAGARA-GRUEN").classList.add("ZEIGEN");
		}
		
		function ElementAblegenAmazonas() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			
			document.querySelector('#DROPAMAZONAS').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WasserkraftwerkZeigenAmazonas();
			AbgelegteElementeZaehlen();
		}
		
		function WasserkraftwerkZeigenAmazonas(){
			document.querySelector(".KRAFTWERKAMAZONAS").classList.add("ZEIGEN");
			document.querySelector(".AMAZONASBTN").classList.add("WEG");
			document.querySelector(".AMAZONAS-GRUEN").classList.add("ZEIGEN");
		}
		
		function ElementAblegenAtlantik() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPATLANTIK').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WasserkraftwerkZeigenAtlantik();
			AbgelegteElementeZaehlen();
			
		}
		
		function WasserkraftwerkZeigenAtlantik(){
			document.querySelector(".KRAFTWERKATLANTIK").classList.add("ZEIGEN");
			document.querySelector(".ATLANTIKBTN").classList.add("WEG");
			document.querySelector(".ATLANTIK-BLAU").classList.add("ZEIGEN");
		}
		
		function AblegenFalsch(){
			document.querySelector(".FEHLERMELDUNG").classList.add("ZEIGEN");
		}
		
		
		document.querySelector("#SCHLIESSEN").addEventListener("click",AlleAus);
		
		function AlleAus(){
			document.querySelector(".FEHLERMELDUNG").classList.remove("ZEIGEN");
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
		
		document.querySelector(".BILDINFOBOX-ENDE").addEventListener("mouseover", HeroWegEnde);
			document.querySelector(".BILDINFOBOX-ENDE").addEventListener("mouseout", HeroDaEnde);

			function HeroWegEnde(){
				document.querySelector(".BILDINFOBOX-ENDE").classList.remove("ZEIGEN");
			}
			function HeroDaEnde(){
				document.querySelector(".BILDINFOBOX-ENDE").classList.add("ZEIGEN");
			}
		
	</script>
	
</body>
</html>

