<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body style="background-color:rgb(68, 175, 157)" >
<header>
<center>
<h1>La Canasta</h1>
</center>
</header>
<center>
<form action="datos.php" method="POST">
    <fieldset style="background-color:rgb(61, 19, 15)" >
        <center>
        <legend>Producto de canasta</legend>
        </center>
            <label for="Prod1">Leche</label>
            <input type="text" placeholder="Escriba aqui el precio" name="Prod " id="Prod" >
            <br><br>
            <label for="Prod2">Huevos</label>
            <input type="text" placeholder="Escriba aqui el precio"  name="Prod " id="Prod" > 
            <br><br>
            <label for="Prod3">Carne</label>
            <input type="text" placeholder="Escriba aqui el precio"  name="Prod " id="Prod" > 
            <br><br>
            <label for="Prod4">Frijoles</label>
            <input type="text" placeholder="Escriba aqui el precio"  name="Prod " id="Prod" > 
            <br><br>
            <label for="Prod5">Arroz</label>
            <input type="text" placeholder="Escriba aqui el precio" name="Prod " id="Prod" >
            <br><br>
            <label for="Impt">Impuestos</label>
            <input type="text" placeholder="%" name="Impt" id="Impt" >
            <br><br>
            <br>
           <input type="submit" value="Enviar" name="enviar" id="enviar" >


</form>
</fieldset>
</center>
<?php

if(isset($_POST["Enviar"])){
    $Prod1 = $_POST["Prod1"];
    $Prod2 = $_POST["Prod2"];
    $Prod3 = $_POST["Prod3"];
    $Prod4 = $_POST["Prod4"];
    $Prod5 = $_POST["Prod5"];
    $Impt = $_POST["Impt"];
    $total = $Prod1+$Prod2+$Prod3+$Prod4+$Prod5;
    $impuestos = ($Impt/100)+$total;
    $totalf = $total;
    echo "<h2>Totales...</h2> <br> ";
    echo "TOTAL SIN DESCUERTO: ". $total . "<br>";
    echo "IMPUESTO: ". $impuestos . "<br>" ;
    echo "TOTAL FINAL: ". $totalf ."<br>" ;
    
   

    }
?>



    
</body>
</html>