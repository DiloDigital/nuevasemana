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
