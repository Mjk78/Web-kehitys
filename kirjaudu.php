<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ylläpito Kirjautuminen</title>
</head>

<body>
    <h1>Kirjaudu ylläpitosivulle</h1>

    <form action="yllapito.php" method="post">

        <label for="kayttajatunnus">Käyttäjätunnus:</label>

        <input type="text" name="kayttajatunnus" required><br>

        <label for="salasana">Salasana:</label>

        <input type="password" name="salasana" required><br>

        <input type="submit" value="Kirjaudu">

    </form>

</body>

</html>
