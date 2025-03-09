<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 12</title>
</head>
<body>
    <center>
    <h1><mark>¿Esta lloviendo actualmente?</mark></h1>
    <form action="" method="POST">
        <label for="Numero1">Numero 1:</label>
        <input type="number" id="lluvioso" name="num1" required> <br><br>
        <label for="Numero2">Numero 2:</label>
        <input type="number" id="lluvioso" name="num2" required> <br><br>
        <button type="submit">Enviar</button>
    </form>
    </center>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['num1']) && ($_POST['num2'])){
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            
        if($numero1 != $numero2){
            echo "<center><p>los numeros son diferente</center></p>";
        }else{
            echo "<center><p>los numeros son iguales </center></p>";  
        }
    
        }
    }
    
    ?>
</body>
</html>