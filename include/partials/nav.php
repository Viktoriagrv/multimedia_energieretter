<!-- nav.php -->

<!-- Bootstrap CSS für Styling und Komponenten einbinden -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Google Fonts für die Bangers-Schriftart -->
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<!-- Einbinden der CSS-Datei -->
    <link rel="stylesheet" href="../include/css/styles.scss">

<!-- Navbar-Container -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <!-- Link für die linke Seite der Navbar mit Markenname -->
  <a class="navbar-brand" href="#">Die Energieretter</a>

  <!-- Toggler-Button für kleinere Bildschirme (öffnet/schließt das Navbar-Menü) -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar-Inhalte, die in den Toggler gekapselt werden -->
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <!-- Einzelner Menüpunkt (Intro) -->
      <li class="nav-item">
        <a class="nav-link" href="../../index.php">Intro</a>
      </li>
      
      <!-- Dropdown-Menü Mission mit zwei Unterpunkten -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="missionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mission
        </a>
        <!-- Dropdown-Menü Elemente -->
        <div class="dropdown-menu" aria-labelledby="missionDropdown">
          <a class="dropdown-item" href="../../mission/missionsstart.php">Missionsstart</a>
          <a class="dropdown-item" href="../../mission/superhelden.php">Die Superhelden</a>
          <a class="dropdown-item" href="../../mission/codeeingabe.php">Code-Eingabe</a>
          <a class="dropdown-item" href="../../mission/weltkarten.php">Weltkarten</a>
        </div>
      </li>
      
      <!-- Dropdown-Menü Retterwissen mit drei Unterpunkten -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="retterwissenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Retterwissen
        </a>
        <!-- Dropdown-Menü Elemente -->
        <div class="dropdown-menu" aria-labelledby="retterwissenDropdown">
          <a class="dropdown-item" href="#">Zukunftsenergien</a>
          <a class="dropdown-item" href="#">Klimaschäden</a>
          <a class="dropdown-item" href="#">Innovationen</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>

