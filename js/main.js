
/*---------------------PAGINA PRINCIPAL----------------------------*/
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); 
}

$(document).ready(function(){
   $('.menuLink').click(function(e){
       var linkHref = $(this).attr('href');
       $('html, body').animate({
           scrollTop: $(linkHref).offset().top
       });
       $("#menu").prop("checked", false);
       e.preventDefault();
   })
});

















/*---------------------FORM VALIDATION----------------------------*/