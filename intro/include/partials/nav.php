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

  /* Rahmen um die Navigationselemente */
  .nav-link {
    border: 2px solid white; /* Weißer Rahmen */
    border-radius: 5px; /* Abgerundete Ecken */
    padding: 5px 15px; /* Innenabstand */
    margin-right: 20px; /* Abstand zwischen den Links */
    transition: border-color 0.3s, color 0.3s; /* Sanfter Übergang für die Rahmenfarbe und Textfarbe */
    color: white; /* Setze die Standardfarbe für die Links auf Weiß */
  }

  /* Rahmenfarbe und Textfarbe bei Hover */
  .nav-link:hover {
    border-color: #e8a723; /* Gelbe Rahmenfarbe bei Hover */
    color: white; /* Textfarbe bleibt weiß */
  }

  /* Übersteuere die text-white Klasse */
  .nav-link.text-white {
    color: white !important; /* Sicherstellen, dass die Links weiß sind */
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

