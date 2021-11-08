<!-- Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donat i imprimeix la nova cadena.
 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
        Introduce una cadena: <input type="text" name="cadena"><br/><br/>
        <button name="enviar">Enviar</button><br/><br>
    </form>
    </body>
</html>
<?php

if(isset($_POST['enviar']))
{
    $cadena = $_POST['cadena'];

    if(strlen($cadena) != 1)
    {
        $final = $cadena[0];
        $principio = $cadena[strlen($cadena)-1];
        $cadena[0] = $principio;
        $cadena[strlen($cadena)-1] = $final;
    }
    
    echo $cadena;
}
?>