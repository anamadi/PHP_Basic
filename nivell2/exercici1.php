<!-- Escriure un programa PHP per calcular la suma dels dos valors enters donats. Si els dos valors són iguals, torna el doble de la seva suma. -->
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
        Número 1: <input type="number" name="numerouno" id="uno"><br/><br/>
        Número 2: <input type="number" name="numerodos" id="dos"><br/><br/>
        <button name="enviar">Enviar</button><br/><br>
    </form>
    </body>
</html>       
<?php
if(isset($_POST['enviar'])){
    $uno = $_POST['numerouno'];
    $dos = $_POST['numerodos'];
    
    if($uno != $dos){
        echo "<br/>Resultado: ".$uno+$dos;
    }else{
        echo "<br/>Resultado: ".($uno+$dos)*2;
    }
}
?>
