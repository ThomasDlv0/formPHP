<?php
//when installed via composer
require_once '../vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

//for ($i = 0; $i < 6; $i++){
//    $faker->sentence() ;
//    $faker->paragraph(15, true);
//}

try {
    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", "root","");
} catch (PDOException $error) {
    echo "Erreur de connexion a la base de donner" . $error->getMessage();
}

$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stm = $connexion -> prepare("INSERT INTO article (title,content) VALUES (:title, :content)");

for ($i = 0; $i < 2; $i++) {

    $title = $faker->sentence();
    $content = $faker->paragraph(15, true);

    $stm ->bindParam(':title', $title);
    $stm ->bindParam(':content', $content);

    if ($stm->execute()){
        header("Location: index.php");
    } else {
        echo "error";
    }
}

$connexion = null;

