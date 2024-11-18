<?php

$title = htmlspecialchars($_POST['title'], ENT_QUOTES, "UTF-8");
$content = htmlspecialchars( $_POST['content'], ENT_QUOTES, "UTF-8");

try {
    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", "root","");
} catch (PDOException $error) {
    echo "Erreur de connexion a la base de donner" . $error->getMessage();
}

$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stm = $connexion -> prepare("INSERT INTO article (title,content) VALUES (:title, :content)");

$stm ->bindParam(':title', $title);
$stm ->bindParam(':content', $content);

if ($stm->execute()){
    header("Location: index.php");
} else {
    echo "error";
}

$connexion = null;

?>

<!doctype html>
<html lang="fr">
<head>

<!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">


    <!-- TITLE -->
    <title>Document</title>

<!-- LINK -->
<link href="" rel="stylesheet">

</head>
<body>

</body>
</html>
