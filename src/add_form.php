<!doctype html>
<html lang="fr">
<head>

<!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- TITLE -->
    <title>Document</title>

<!-- LINK -->
<link href="" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">


</head>
<body>
<main>
    <h1>Ajouter un article</h1>
    <form action="./add_article.php" method="post">
        <div>
            <label for="title">Titre de l'article</label>
            <input id="title" type="text" name="title" placeholder="Entrer un titre">
        </div>
        <div>
            <label for="content">Contenue de l'article</label>
            <textarea id="content" name="content" placeholder="Entrer le contenu de l'article"></textarea>
        </div>
        <div>
            <label for="submit">
                <input id="submit" type="submit" name="Envoyer">
            </label>
        </div>
    </form>
</main>
</body>
</html>