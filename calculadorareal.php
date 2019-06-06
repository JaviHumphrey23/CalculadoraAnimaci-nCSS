<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Calculadora JavaScript" />
    <meta name="keywords" content="foro, web, css, javascript" />
    <title>Calculadora aburrida</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="faviconre.ico" type="image/ico">
    <link href="https://fonts.googleapis.com/css?family=Marvel|Roboto|Work+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Etiqueta para indicar al dispositivo movil lo que tiene que hacer -->

</head>

<body style="background-color: white">

   <div id="contenedor">   
            <div>"No hay nada mas peligroso que una persona aburrida."</div>
            <form action="#"  id="calculadorareal">

                  
                  <p class="resreal" id="res">0 </p>
                  

                  <br>
                  <div class="filareal" id="filareal1">
                        <input type="button" value="Retr" onclick="retro()"/>
                        <input type="button" value="CE" onclick="borradoParcial()"/>
                        <input type="button" value="C" onclick="borradoTotal()"/>
                  </div>

                  <br>
                  <div class="filareal" id="filareal2">
                        <input type="button" value="7" onclick="numero('7')"/>
                        <input type="button" value="8" onclick="numero('8')" />
                        <input type="button" value="9" onclick="numero('9')"/>
                        <input type="button" value="/" onclick="operar('/')"/>
                        <input type="button" value="Raíz" onclick="raizc()"/>
                  </div>

                  <br>
                  <div class="filareal" id="filareal3">
                        <input type="button" value="4" onclick="numero('4')"/>
                        <input type="button" value="5" onclick="numero('5')"/>
                        <input type="button" value="6" onclick="numero('6')"/>
                        <input type="button" value="*" onclick="operar('*')"/>
                        <input type="button" value="%" onclick="porcent()"/>
                  </div>

                  <br>
                  <div class="filareal" id="filareal4">
                        <input type="button" value="1" onclick="numero('1')"/>
                        <input type="button" value="2" onclick="numero('2')"/>
                        <input type="button" value="3" onclick="numero('3')"/>
                        <input type="button" value="-" onclick="operar('-')"/>
                        <input type="button" value="1/x" onclick="inve()"/>
                  </div>

                  <br>
                  <div class="filareal" id="filareal5">
                        <input type="button" value="0" onclick="numero('0')"/>
                        <input type="button" value="+/-" onclick="opuest()"/>
                        <input type="button" value="." onclick="numero('.')"/>
                        <input type="button" value="+" onclick="operar('+')"/>
                        <input type="button" value="=" onclick="igualar()"/>
                  </div>
                  
<script src="myscript.js"></script>

            </div>


      </form>
      
      </div>
</body>
</html>