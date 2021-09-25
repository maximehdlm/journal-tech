<?php

include "./connexion.php";

$testRead = "SELECT `num_article`, `titre`, `image`, `description`, `date`, `auteur`, categorie.nom_categorie FROM `artcile` LEFT JOIN categorie ON artcile.id_categorie = categorie.num_categorie WHERE 1 ";
$resultat = $db->query($testRead);

foreach($resultat as $article){
    $nom = $article[1];
    $img = $article[2];
    $contenu = $article[3];
    $date = $article[4];
    $auteur = $article[5];
    $categ = $article[6];

    $myArticle = new Article("container");   //1er article
$myArticle->setdiv("row");
$myArticle->setdiv2("col-md-2 offset-1");
$myArticle->setimg("img", "$img", "publishing-options");
$myArticle->setdiv3("col-md-8");
$myArticle->setdiv4("card-body");
$myArticle->setdiv5("bloc_text ");
$myArticle->seth3Card("card-title fw-bold", "$categ", "$categ");
$myArticle->seth3("small", "$nom");
$myArticle->settext("card-text", "$contenu");
$myArticle->seth6("small", "$auteur");
$myArticle->seth6_2("small", "$date");
$myArticle->getArticle();

}



?>