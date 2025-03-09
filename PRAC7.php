<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PRACTICA 6</title>
</head>
<body>
    <center>
        <h1><mark>Suma de 2 numeros:</mark></h1>
        <form action="" method="POST">
        <label for="Numero1" >NUMERO 1:</label>
        <input type="text" id="Numero1" name="Numero1"><br><br>
        <label for="Numero2" >NUMERO 2:</label>
        <input type="text" id="Numero2" name="Numero2"><br><br>
        <button type="submit">Sumar</button>
        </form></center>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['Numero1'])&& ($_POST['Numero2'])){
            $Num1 = $_POST['Numero1'];
            $Num2 = $_POST['Numero2'];
            $Suma = $Num1 + $Num2;
            echo "<br><br><center> 
            EL RESULTADO DE LA SUMA ES: $Suma </center>";
        }
    }
    
    ?>
</body>
</html>

