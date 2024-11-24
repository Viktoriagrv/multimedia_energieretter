<!-- nav.php -->

<!-- Google Fonts für die Bangers-Schriftart -->
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

<!-- Einbinden der CSS-Datei -->
<link rel="stylesheet" href="../include/css/styles.css">

<nav class="navbar-custom">

    <!-- Branding -->
    <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
    
    <!-- Hauptmenü -->
    <div class="menu">
        <a href="../../index.php" class="menu-link menu-item">Vorspann</a>
        
        <div class="dropdown menu-item">
            <button class="dropbtn menu-link">Mission</button>
            <div class="dropdown-content">
                <a href="../../mission/superhelden.php">Die Superhelden</a>
                <a href="../../mission/missionsstart.php">Missionsstart</a>
                <a href="../../mission/codeeingabe.php">Code-Eingabe</a>
            </div>
        </div>
        
        <!-- Dropdown-Menü -->
        <div class="dropdown menu-item" style="margin-right: 50px;">
            <button class="dropbtn menu-link">Retterwissen</button>
            <div class="dropdown-content">
                <a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
                <a href="../../retterwissen/innovationen.php">Innovationen</a>
                <a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
            </div>
        </div>
    </div>
</nav>

<!-- Styles für die Navigation -->
<style>
/* Allgemeine Navbar-Styling */
.navbar-custom {
    background-color: #285238; /* Dunkles Grün */
    display: flex;
    align-items: center;
    justify-content: space-between; /* Platz zwischen Branding und Menü */
    padding: 10px 20px;
}

/* Branding */
.navbar-brand {
    font-family: 'Bangers', cursive;
    font-size: 24px;
    color: #FFD700; /* Gelb wie bei Die Energieretter */
    text-decoration: none;
    margin-right: 50px;
}

/* Menü Styling */
.menu {
    display: flex;
    gap: 20px; /* Abstand zwischen den Menü-Elementen */
    align-items: center;
}

/* Links und Buttons */
.menu a,
.menu .dropbtn {
    color: white;
    text-decoration: none;
    background: none;
    border: none;
    cursor: pointer;
    font-size: 18px;
    padding: 5px 10px;
    display: inline-block;
}

/* Gelbe Umrandung für alle Hauptmenü-Elemente, passend zu "Die Energieretter" */
.menu-item {
    border: 2px solid #FFCC00; /* Gelb von Die Energieretter (z.B. #FFCC00) */
    border-radius: 5px; /* Abgerundete Ecken */
    padding: 5px 15px; /* Zusätzlicher Innenabstand */
    transition: background-color 0.3s, border-color 0.3s;
}

/* Hintergrundfarbe beim Hover */
.menu-item:hover {
    background-color: #45a049; /* Helleres Grün */
}

/* Dropdown Styling */
.dropdown {
    position: relative; /* Ermöglicht absolute Positionierung der Inhalte */
}

.dropdown-content {
    display: none; /* Unsichtbar standardmäßig */
    position: absolute;
    background-color: #ffffff; /* Weißes Menü */
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Leichter Schatten */
    z-index: 1;
    min-width: 150px; /* Breite des Menüs */
    border-radius: 5px;
    top: 100%; /* Menü erscheint direkt unterhalb des Buttons */
    left: 0; /* An der linken Seite ausgerichtet */
}

.dropdown-content a {
    color: #333; /* Dunkelgrauer Text */
    text-decoration: none;
    display: block;
    padding: 10px;
    font-size: 16px;
}

.dropdown-content a:hover {
    background-color: #f1f1f1; /* Heller Hintergrund beim Hover */
}

/* Dropdown bleibt sichtbar, wenn Maus darüber ist */
.dropdown:hover .dropdown-content {
    display: block; /* Inhalt wird sichtbar */
}

/* Sicherstellen, dass Dropdown-Button nicht verschwindet */
.dropdown .dropbtn {
    position: relative;
}
</style>


