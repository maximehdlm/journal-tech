<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Daily tech Edition</title>
</head>

<?php

//création de la classe form ,et de ses attributs
class form{
public $HTML;
public $element;      //form
public $texte;        //titre
public $texteCateg;   //categorie
public $texteAuteur;  //auteur
public $date;         //date
public $textArea;     //textarea
public $image;        //image
public $check;        //checkbox
public $submit;       //bouton submit


//construct pour faire le formulaire
 public function __construct($action, $titre, $method = "post"){
    
     $this->element = "<main>";
     $this->element .= "<form action=\"$action\"  method=\"$method\" class=\" row g-3 needs-validation\" novalidate>";
     $this->element .= "<legend class=\"text-center\">$titre</legend>";

 }
        //fonction pour faire un label et un input text destiné au titre de l'article
 public function setText ($name, $method = "post"){

     $this->texte .= "<div class=\"col-md-4 offset-2  text-center\"><label class=\"form-label\" for=\"validationCustom01\">Choisir un titre</label><input type=\"text\" class=\"form-control\" style=\"width: 400px\" name=\"$name\" id=\"validationCustom01\" placeholder=\"Titre\" pattern=\"[a-zA-Z]{1-10}\" required><div class=\"invalid-feedback\">Titre invalide</div></div><br>";

 }

         //fonction pour faire un label et un input text destiné à l'image de l'article
public function setImage ($name, $method = "post"){

        $this->image .= "<div class=\"col-md-4  text-center\"><label class=\"form-label\" for=\"validationCustom02\">Entrer image ici</label><input type=\"url\" class=\"form-control\" style=\"width: 400px\" name=\"$name\" id=\"validationCustom02\" placeholder=\"url\" required><div class=\"invalid-feedback\">url invalide</div></div><br>";
        
    }





        //fonction pour faire un label et un input text destiné au nom de l'auteur de l'article
public function setTextCateg ($name, $method = "post"){

        $this->texteCateg .= "<div class=\"col-md-4 offset-2   text-center\"><label class=\"form-label\" for=\"validationCustom04\">Catégorie de l'article</label><input type=\"text\" class=\"form-control\" style=\"width: 400px\" name=\"$name\" id=\"validationCustom05\" placeholder=\"La catégorie doit être du CSS, JS ou PHP\" pattern=\"CSS|JS|PHP|css|js|php\" required><div class=\"invalid-feedback\">Catégories accéptées : CSS, JS, PHP</div></div><br>";
        
    }



        //fonction pour faire un label et un input text destiné au nom de l'auteur de l'article
 public function setTextAuteur ($name, $method = "post"){

    $this->texteAuteur .= "<div class=\"col-md-4 text-center\">Auteur de l'article<input type=\"text\" class=\"form-control\" name=\"$name\" id=\"validationCustom04\" style=\"width: 400px\" placeholder=\"Votre nom d'auteur\" pattern=\"[a-zA-ZÀ-ÿ]{0-20}\" required><div class=\"invalid-feedback\">Nom d'auteur invalide</div></div><br>";

}


        //fonction pour faire un timeDate
public function setDate ($name, $method = "post"){

    $this->date .= "<div class=\"col-md-4 offset-4  text-center\"><label for=\"validationCustom04\">Date de création</label><input type=\"date\" class=\"form-control\" style=\"width: 400px\" name=\"$name\" id=\"validationCustom04\" required><div class=\"invalid-feedback\">sélectionner une date</div><br>";

}

        //fonction pour faire un label et un textarea ,ou sera ecrit le contenu de l'article
    public function setTextArea ($name, $method = "post"){

        $this->textArea .= "<div class=\"form-floating col-12  text-center\"><h6>Contenu de l'article</h6><label for=\"floatingTextarea2\"></label><textarea class=\"form-control\" name=\"$name\" placeholder=\"Contenu de l'article\" id=\"validationCustom03\" style=\"height: 100px;width: 400px\" pattern=\"[a-zA-ZÀ-ÿ]{0-380}\" required></textarea><div class=\"invalid-feedback\" Contenu invalide</div></div><br>";
            
}



public function setCheckbox ($name, $method = "post"){

    $this->check .= "<div class=\"form-check col-12 text-center\" name=\"$name\"><label class=\"form-check-label\" for=\"invalidCheck\">En cochant la case, vous accepter nos conditions d'utilisation</label><input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required><label class=\"form-check-label\" for=\"invalidCheck\"><div class=\"invalid-feedback\">merci de chocher la case...</div></div></div><br>";
}


        //fonction pour faire un bouton submit, et envoyer l'article
 public function setSubmit($nom = "Envoi"){

     $this->submit .= "<button class=\"btn btn-primary\" type=\"submit\" name=\"$nom\">envoyer</button>";
 }


 public function getForm(){

     $this->HTML = "";
     $this->HTML .= $this->element;
     $this->HTML .= $this->texte;
     $this->HTML .= $this->image;     
     $this->HTML .= $this->texteCateg;
     $this->HTML .= $this->texteAuteur;
     $this->HTML .= $this->date;
     $this->HTML .= $this->textArea;
     $this->HTML .= $this->check;
     $this->HTML .= $this->submit;
     $this->HTML .= "</form></main>";
     echo $this->HTML;
 }
}


$myForm = new form("exercice4.php", "EDITION");
$myForm->setText("titre");
$myForm->setImage("image");
$myForm->setTextAuteur("nauteur");
$myForm->setTextCateg("categ");
$myForm->setDate("date");
$myForm->setTextArea("taxtarea");
$myForm->setCheckbox("checkbox");
$myForm->setSubmit("button");
$myForm->getForm();


?>




<!-- Script de validation Bootstrap -->
<script>
// désactiver les soumissions de formulaires s'il y a des champs non valides
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Récupérez tous les formulaires auxquels nous voulons appliquer des styles de validation Bootstrap personnalisés
    var forms = document.getElementsByClassName('needs-validation');
    // Boucle sur eux et empêche la soumission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


</html>