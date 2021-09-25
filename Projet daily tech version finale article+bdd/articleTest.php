<?php

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
?>