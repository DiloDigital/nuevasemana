
<script>
    // convertimos en minusculas la cadena devuelta por navigator.userAgent
    var nav = navigator.userAgent.toLowerCase();

    //buscamos dentro de la cadena mediante indexOf() el identificador del navegador
    if(nav.indexOf("msie") != -1){
        alert("Estas visitandome desde IE");
    } else if(nav.indexOf("firefox") != -1){
        alert("Estas visitandome desde Firefox");
    } else if(nav.indexOf("opera") != -1){
        alert("Estas visitandome desde Opera");
    } else if(nav.indexOf("chrome") != -1){
        alert("Estas visitandome desde Chrome");
    } else {
        alert("Desconosco el navegador del que me visitas");
    }
</script>


$('a[href^="#"]').on('click',function (e) {
      e.preventDefault();
      var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });

$('#menu').click(function(){
	$('#target').slideToggle();
})