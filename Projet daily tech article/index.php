
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Daily Tech</title>
</head>
</html>

<?php
include 'header.html';

//creation de la classe article , qui sera appellée à chaque fois qu'il faudra creer un nouvel article
class Article{

    //je definie les propriétes/attributs de cette classe
    public $HTML;
    public $element;
    public $div;
    public $div2;
    public $div3;
    public $div4;
    public $div5;
    public $img;
    public $h3;
    public $h3Card;
    public $h6;
    public $h6_2;
    public $text;

//j'utilise un construct pour créer une balise html article , dans lequel toutes mes balises seront crées
    public function __construct($class){

        $this->element = "<article>";
        $this->element .= "<section class=\"$class\">";
    }


    public function setdiv($nom){     //création d'un attribut div

        $this->div = "<div class=\"$nom\">";
 
    }

    public function setdiv2($nom){

        $this->div2 = "<div class=\"$nom\">";
 
    }

    public function setdiv3($nom){

        $this->div3 = "<div class=\"$nom\">";
 
    }

    public function setdiv4($nom){

        $this->div4 = "<div class=\"$nom\">";
 
    }

    public function setdiv5($nom){

        $this->div5 = "<div class=\"$nom\">";
 
    }

    public function setimg($nom, $src, $alt){       //création d'un attribut img

        $this->img = "<img class=\"$nom\" src=\"$src\" alt=\"$alt\">";
 
    }




    public function seth3Card($nom,$id, $contenu){       //création d'un attribut h3

        $this->h3Card = "<h3 class=\"$nom\" id=\"$id\">$contenu</h3 class=\"card-title fw-bold\">";
 
    }

    public function seth3($nom, $contenu){

        $this->h3 = "<h3 class=\"$nom\">$contenu</h3>";
 
    }
 
    public function settext($nom, $contenu){           //création d'un attribut p

        $this->text = "<p class=\"$nom\">$contenu</p>";
 
    }

    public function seth6($nom, $contenu){            //création d'un attribut h6

        $this->h6 = "<h6 class=\"$nom\">$contenu</h6>";
 
    }

    public function seth6_2($nom, $contenu){

        $this->h6_2 = "<h6 class=\"$nom\">$contenu</h6>";
 
    }


    
//lors de l'appel de cette fonction, tous les attributs à l'interieur seront crées
    public function getArticle(){

        $this->HTML = "";
        $this->HTML .= $this->element;
        $this->HTML .= $this->div;
        $this->HTML .= $this->div2;
        $this->HTML .= $this->img;
        $this->HTML .= "</div>";
        $this->HTML .= $this->div3;
        $this->HTML .= $this->div4;
        $this->HTML .= $this->div5;
        $this->HTML .= $this->h3Card;
        $this->HTML .= $this->h3;
        $this->HTML .= $this->text;
        $this->HTML .= $this->h6;
        $this->HTML .= $this->h6_2; 
        $this->HTML .= "</div></div></div></div></section></article>";       
        echo $this->HTML;
    }
}

//definit le contenu des balises crées (class, text, src...)

$myArticle = new Article("container");   //1er article
$myArticle->setdiv("row");
$myArticle->setdiv2("col-md-2 offset-1");
$myArticle->setimg("img", "Image/CSS3_logo.png", "publishing-options");
$myArticle->setdiv3("col-md-8");
$myArticle->setdiv4("card-body");
$myArticle->setdiv5("bloc_text");
$myArticle->seth3Card("card-title fw-bold", "CSS", "CSS");
$myArticle->seth3("small", "Initiation CSS");
$myArticle->settext("card-text", "CSS est l'un des langages principaux du Web ouvert et a été standardisé par le W3C. Ce standard évolue sous forme de niveaux (levels), CSS1 est désormais considéré comme obsolète, CSS2.1 correspond à la recommandation et CSS3, qui est découpé en modules plus petits, est en voie de standardisation.");
$myArticle->seth6("small", "Juan");
$myArticle->seth6_2("small", "12 décembre 2021");
$myArticle->getArticle();


$myArticle2 = new Article("container");  //2eme article
$myArticle2->setdiv("row");
$myArticle2->setdiv2("col-md-2 offset-1");
$myArticle2->setimg("img", "Image/kisspng-javascript-logo.jpg", "publishing-options");
$myArticle2->setdiv3("col-md-8");
$myArticle2->setdiv4("card-body");
$myArticle2->setdiv5("bloc_text");
$myArticle2->seth3Card("card-title fw-bold", "JS", "JS");
$myArticle2->seth3("small", "Initiation JS");
$myArticle2->settext("card-text", "JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les technologies HTML et CSS, JavaScript est parfois considéré comme l'une des technologies cœur du World Wide Web2. La majorité des navigateurs web disposent d'un moteur JavaScript4 dédié pour l'interpréter.");
$myArticle2->seth6("small", "Roger");
$myArticle2->seth6_2("small", "10 aôut 2021");
$myArticle2->getArticle();


$myArticle3 = new Article("container");   //3eme article
$myArticle3->setdiv("row");
$myArticle3->setdiv2("col-md-2 offset-1");
$myArticle3->setimg("img", "Image/kisspng-php.jpg", "publishing-options");
$myArticle3->setdiv3("col-md-8");
$myArticle3->setdiv4("card-body");
$myArticle3->setdiv5("bloc_text");
$myArticle3->seth3Card("card-title fw-bold", "PHP", "PHP");
$myArticle3->seth3("small", "Initiation PHP");
$myArticle3->settext("card-text", "PHP: Hypertext Preprocessor19, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre20, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP19, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.");
$myArticle3->seth6("small", "Maurice");
$myArticle3->seth6_2("small", "7 juillet 2021");
$myArticle3->getArticle();

$myArticle3 = new Article("container");   //3eme article
$myArticle3->setdiv("row");
$myArticle3->setdiv2("col-md-2 offset-1");
$myArticle3->setimg("img", "Image/kisspng-php.jpg", "publishing-options");
$myArticle3->setdiv3("col-md-8");
$myArticle3->setdiv4("card-body");
$myArticle3->setdiv5("bloc_text");
$myArticle3->seth3Card("card-title fw-bold", "PHP", "PHP");
$myArticle3->seth3("small", "Initiation PHP");
$myArticle3->settext("card-text", "PHP: Hypertext Preprocessor19, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre20, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP19, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.");
$myArticle3->seth6("small", "Maurice");
$myArticle3->seth6_2("small", "7 juillet 2021");
$myArticle3->getArticle();

$myArticle3 = new Article("container");   //3eme article
$myArticle3->setdiv("row");
$myArticle3->setdiv2("col-md-2 offset-1");
$myArticle3->setimg("img", "Image/kisspng-php.jpg", "publishing-options");
$myArticle3->setdiv3("col-md-8");
$myArticle3->setdiv4("card-body");
$myArticle3->setdiv5("bloc_text");
$myArticle3->seth3Card("card-title fw-bold", "PHP", "PHP");
$myArticle3->seth3("small", "Initiation PHP");
$myArticle3->settext("card-text", "PHP: Hypertext Preprocessor19, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre20, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP19, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.");
$myArticle3->seth6("small", "Maurice");
$myArticle3->seth6_2("small", "7 juillet 2021");
$myArticle3->getArticle();





include 'footer.html';

?>