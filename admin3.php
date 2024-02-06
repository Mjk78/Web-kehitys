<?php

// Tarkista, onko käyttäjä kirjautunut sisään

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

    // Jos ei ole kirjautunut sisään, ohjaa takaisin kirjautumissivulle

    header("Location: kirjaudu.html");

    exit;

}

 

// Tarkistaa, onko käyttäjä painanut kirjaudu ulos -painiketta

if (isset($_GET['logout'])) {

    // Poista istunnon tiedot

    session_unset();

    // Tuhoa istunto

    session_destroy();

    // Ohjaa käyttäjä takaisin etusivulle

    header("Location: index.html");

    exit;

}

 

// Tässä voit koodata toiminnallisuuden, joka käsittelee vieraskirjan tietoja

 

// Esimerkki: tulosta vieraskirjan tiedot

if (isset($_SESSION['guestbook_data'])) {

    echo "Vieraskirjan tiedot:<br>";

    foreach ($_SESSION['guestbook_data'] as $entry) {

        echo "Nimi: " . $entry['nimi'] . ", Viesti: " . $entry['viesti'] . "<br>";

    }

} else {

    echo "Vieraskirjassa ei ole vielä tietoja.";

}

?>

 

<!-- Lisää kirjaudu ulos -painike -->

<a href="admin.php?logout=true">Kirjaudu ulos</a>