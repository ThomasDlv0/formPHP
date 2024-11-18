<?php
// load Faker autoloader


$connexion = new PDO("mysql:host=localhost;dbname=blog_db", "root","");

$result = $connexion->query("SELECT * FROM article ORDER BY id DESC");

$articles = [];

while ($row = $result-> fetch(PDO::FETCH_ASSOC)){
    $articles[] = $row;
};

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
    <script src="https://unpkg.com/htmx.org@2.0.3" defer></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="style.css">
<!-- TITLE -->
    <title>Document</title>

<!-- LINK -->
</head>
<body>
<main>
    <header>
            <a href="add_form.php"
               hx-get="add_form.php"
               hx-target="#form_ajout_article"
                hx-swap="outerHTML">ajouter un article</a>
        <a href="add_fake_data.php">Ajouter fake data</a>
    </header>
    <section id="form_ajout_article">

    </section>
    <section id="add-data">

    </section>
    <?php
        foreach ($articles as $article){
    ?>
        <section>
            <h2><?=$article["title"]; ?>
                <span class="delete"
                      hx-delete="del_article.php?id=<?= $article["id"]?>"
                      hx-swap="outerHTML">X</span>
            </h2>
            <p><?=$article["content"]; ?></p>
        </section>
    <?php
        }
    ?>
</main>
</body>
</html>