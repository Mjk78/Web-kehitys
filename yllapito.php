<?php

session_start();

// Tarkista, onko lomakkeen tiedot lähetetty

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kayttajatunnus = $_POST["kayttajatunnus"];

    $salasana = $_POST["salasana"];

    // Tarkista, ovatko käyttäjätunnus ja salasana oikein (esimerkki)

    if ($kayttajatunnus === "admin" && $salasana === "KISSA") {

        $_SESSION['kirjautunut'] = true;

        header("Location: admin3.php");

        exit();

    } else {

        header("Location: kirjaudu.html");

        exit();

    }

} else {

    // Jos ei ole POST-pyyntöä, siirry takaisin kirjautumissivulle

    header("Location: kirjaudu.html");

    exit();

}

?>
