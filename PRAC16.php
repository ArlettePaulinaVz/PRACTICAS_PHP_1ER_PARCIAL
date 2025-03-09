<? 
/**Realiza un sistema donde el usuario al momento
 * de ingresar el nombre de un mes, 
 * este nos de la estacion del anio en la que pertenece, ejemplo:
 * "Enero pertenece a la estacion de invierno"
 *
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 16</title>
</head>
<body>
<center>
    <h1><mark>Estaciones del anio</mark></h1>
    <form action="" method="POST">
        <label for="mes">Ingresa el mes a consultar:</label>
        <input type="text" id="mes" name="mes" required> <br><br>
        <button type="submit">Consultar</button>
    </form>
    </center>
    <?php 
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['mes'])){
            $mes = strtolower(trim($_POST['mes'])); 

            switch($mes){
                case 'diciembre':
                case 'enero':
                case 'febrero':
                $Estacion  = "Invierno";
                break;

                case 'marzo':
                case 'abril':
                case 'mayo':
                $Estacion  = "Primavera";
                break;
                
                
                default :
                $Estacion = "Ingresa mes valido";
                break;
            }

            echo "<center><p>$mes
             pertenece a la estacion de <b>$Estacion</b>.</center></p> ";

            

        }
    }
    ?>
    
</body>
</html>