<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Calculadora JavaScript" />
    <meta name="keywords" content="foro, web, css, javascript" />
    <title>Calculadora con JavaScript y CSS animado</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Marvel|Roboto|Work+Sans" rel="stylesheet">
    <link rel="icon" href="faviconmat.ico" type="image/ico" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Etiqueta para indicar al dispositivo movil lo que tiene que hacer -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#frase").fadeOut(1500);
    },3000);
 
});

</script>
</head>

<body>

   <div id="matrix">   
      <div class="rotar d3 f1" style="left:30px;">01010101011101010110</div> 
      <div class="rotar d1 f2 c1" style="left:60px;">01010101011101010110</div> 
      <div class="rotar d2 f1" style="left:80px;">010101010111010101100101</div> 
      <div class="rotar d4 c3 de" style="left:110px;">010101010111010101100101</div> 
      <div class="rotar d2 c1" style="left:140px;">010101010111010101100101</div> 
      <div class="rotar d3 f2 c1" style="left:170px;">010101010111010101100101</div> 
      <div class="rotar d1 c1" style="left:185px;">010101010111010101100101</div> 
      <div class="rotar d3 de" style="left:200px;">010101010111010101100101</div> 
      <div class="rotar d4 f1" style="left:250px;">010101010111010101100101</div> 
      <div class="rotar d2 de" style="left:290px;">010101010111010101100101</div> 
      <div class="rotar d3 f2" style="left:310px;">010101010111010101100101</div> 
      <div class="rotar d1 f1" style="left:350px;">010101010111010101100101</div> 
      <div class="rotar d4 c1" style="left:390px;">010101010111010101100101</div> 
      <div class="rotar d2 de" style="left:410px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:4430px;">01010101011101010110</div>
      <div class="rotar d3 f1" style="left:530px;">01010101011101010110</div> 
      <div class="rotar d1 f2 c1" style="left:560px;">01010101011101010110</div> 
      <div class="rotar d2 f1" style="left:580px;">01010101011101010110</div> 
      <div class="rotar d4 c3 de" style="left:610px;">01010101011101010110</div> 
      <div class="rotar d2 c1" style="left:740px;">01010101011101010110</div> 
      <div class="rotar d3 f2 c1" style="left:770px;">01010101011101010110</div> 
      <div class="rotar d1 c1" style="left:785px;">01010101011101010110</div> 
      <div class="rotar d3 de" style="left:800px;">01010101011101010110</div> 
      <div class="rotar d4 f1" style="left:850px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:890px;">01010101011101010110</div> 
      <div class="rotar d3 f2" style="left:910px;">01010101011101010110</div> 
      <div class="rotar d1 f1" style="left:950px;">01010101011101010110</div> 
      <div class="rotar d4 c1" style="left:990px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:1010px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:1030px;">01010101011101010110</div> 
      <div class="rotar d1 f1" style="left:1050px;">01010101011101010110</div> 
      <div class="rotar d4 c1" style="left:1070px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:1090px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:1110px;">01010101011101010110</div> 
      <div class="rotar d1 f1" style="left:1130px;">01010101011101010110</div> 
      <div class="rotar d4 c1" style="left:1150px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:1170px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:1190px;">01010101011101010110</div> 
      <div class="rotar d4 c1" style="left:1210px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:1230px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:1250px;">01010101011101010110</div> 
      <div class="rotar d2 de" style="left:1270px;">01010101011101010110</div> 
      <div class="rotar d1 c1 de" style="left:1290px;">01010101011101010110</div>
            
            <a title="Frase" id="frase"><img src="frasematrix.png" alt="Frase Matrix" /></a>
            <form action="#"  id="calculadora">
            
                  
                  <p id="res" class="resmatrix"> 0 </p>
                  

                  <br>
                  <div class="fila" id="fila1">
                        <input type="button" value="Retr" onclick="retro()"/>
                        <input type="button" value="CE" onclick="borradoParcial()"/>
                        <input type="button" value="C" onclick="borradoTotal()"/>
                  </div>

                  <br>
                  <div class="fila" id="fila2">
                        <input type="button" value="7" onclick="numero('7')"/>
                        <input type="button" value="8" onclick="numero('8')" />
                        <input type="button" value="9" onclick="numero('9')"/>
                        <input type="button" value="/" onclick="operar('/')"/>
                        <input type="button" value="Raíz" onclick="raizc()"/>
                  </div>

                  <br>
                  <div class="fila" id="fila3">
                        <input type="button" value="4" onclick="numero('4')"/>
                        <input type="button" value="5" onclick="numero('5')"/>
                        <input type="button" value="6" onclick="numero('6')"/>
                        <input type="button" value="*" onclick="operar('*')"/>
                        <input type="button" value="%" onclick="porcent()"/>
                  </div>

                  <br>
                  <div class="fila" id="fila4">
                        <input type="button" value="1" onclick="numero('1')"/>
                        <input type="button" value="2" onclick="numero('2')"/>
                        <input type="button" value="3" onclick="numero('3')"/>
                        <input type="button" value="-" onclick="operar('-')"/>
                        <input type="button" value="1/x" onclick="inve()"/>
                  </div>

                  <br>
                  <div class="fila" id="fila5">
                        <input type="button" value="0" onclick="numero('0')"/>
                        <input type="button" value="+/-" onclick="opuest()"/>
                        <input type="button" value="." onclick="numero('.')"/>
                        <input type="button" value="+" onclick="operar('+')"/>
                        <input type="button" value="=" onclick="igualar()"/>
                  </div>
                  
<script src="myscript.js"></script>
<script src="anime.es.js"></script>
      <script src="anime.js"></script>
      <script src="anime.min.js"></script>

            </div>


      </form>

      </div>
</body>
</html>