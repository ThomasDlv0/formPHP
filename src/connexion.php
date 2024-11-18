<?php
require "./verif_connexion.php";
?>

<!doctype html>
<html lang="fr">
<head>

<!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- TITLE -->
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<main class="form">
    <center><h1>Se connecter</h1></center>
    <form method="POST" target="_self">
        <div>
            <label for="pseudo">Pseudo</label>
            <input id="pseudo" type="text" name="pseudo" required placeholder="Pseudo">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="email" placeholder="Password" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</main>
</body>
</html>
