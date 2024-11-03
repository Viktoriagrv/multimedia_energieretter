<!-- nav.php -->

<!-- Bootstrap CSS für Styling und Komponenten einbinden -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Google Fonts für die Bangers-Schriftart -->
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<!-- Benutzerdefiniertes CSS für die Navbar und Schriftarten -->
<style>
  /* Navbar-Hintergrundfarbe Grün */
  .navbar-custom {
    background-color: #285238;
  }

  /* Link-Styling für die linke Seite der Navbar */
  .navbar-brand {
    font-family: 'Bangers', sans-serif; /* Schriftart für die Marke */
    color: #E8A723 !important;          /* Farbe für die Marke */
  }

  /* Hintergrundfarbe für Dropdown-Menüs */
  .dropdown-menu {
    background-color: #285238;
  }

  /* Dropdown-Menü-Links Styling */
  .dropdown-item {
    color: #E8A723;
  }

  /* Hover-Effekt für Dropdown-Links */
  .dropdown-item:hover {
    background-color: #E8A723;
    color: #285238;
  }
</style>

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
        <a class="nav-link text-white" href="#">Intro</a>
      </li>
      
      <!-- Dropdown-Menü Mission mit zwei Unterpunkten -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="missionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mission
        </a>
        <!-- Dropdown-Menü Elemente -->
        <div class="dropdown-menu" aria-labelledby="missionDropdown">
          <a class="dropdown-item" href="#">Superhelden auswählen</a>
          <a class="dropdown-item" href="#">Code-Eingabe</a>
        </div>
      </li>
      
      <!-- Dropdown-Menü Retterwissen mit fünf Unterpunkten -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="retterwissenDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Retterwissen
        </a>
        <!-- Dropdown-Menü Elemente -->
        <div class="dropdown-menu" aria-labelledby="retterwissenDropdown">
          <a class="dropdown-item" href="#">Thema 1</a>
          <a class="dropdown-item" href="#">Thema 2</a>
          <a class="dropdown-item" href="#">Thema 3</a>
          <a class="dropdown-item" href="#">Thema 4</a>
          <a class="dropdown-item" href="#">Thema 5</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

