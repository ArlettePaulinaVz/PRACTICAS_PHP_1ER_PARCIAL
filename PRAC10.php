<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 10</title>
</head>
<body>
<center>
        <h1><mark>NUMERO MAYOR:</mark></h1>
        <form action="" method="POST">
        <label for="Numero1" >INGRESE UN NUMERO:</label>
        <input type="text" id="Numero1" name="Numero1"><br><br>
        <button type="submit">OPERAR</button>
        </form>
</center>
 <?php  

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Numero1'])){
        $numero = $_POST['Numero1'];
        
        if($numero>5){
            echo "<center>El numero es mayor a 5</center>";
        }else{
            echo "<center>El numero es menor a 5</center>";
        }

    }
}

?>
</body>
</html>
