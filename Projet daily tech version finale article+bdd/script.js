//fonction pour descendre à la page css aux clic sur le bouton

$('#css').click(function(){  //on appelle l'id du bouton css 
	$('html,body').animate({scrollTop: $('#CSS').offset().top //on apelle la destination  , la ou devra s'arreter le scrolling, en l'occurence l'article css
},500 );  // vitesse du scroll definie en millisecondes
});


//fonction pour descendre à la page js aux clic sur le bouton 

$('#js').click(function(){
	$('html,body').animate({scrollTop: $('#JS').offset().top
},500 );});


//fonction pour descendre à la page php aux clic sur le bouton 

$('#php').click(function(){
	$('html,body').animate({scrollTop: $('#PHP').offset().top
},500);
});
