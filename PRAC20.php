<?
/** Se desea obtener los N primeros caracteres de un nombre
 *para la solucion de este problema, se requiere que el     
 * usuario ingrese un nombre y una cantidad y el sistema
 * devuelve los primeros caracteres indicados por la cantidad
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 20</title>
</head>
<body>
    <header><center>
        <h1>Ingresa un nombre porfavor:</h1>
        </center>
    </header>
    <main>
    <section>
    <form action="" method="POST">
        <fieldset>
        <legend>Rellene los campos</legend><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad"><br><br>
        <button type="submit">Calcular</button> <br><br><br>     

<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["nombre"])&& ($_POST["cantidad"])){
            //DATOS DE ENTRADA 
            $nom = $_POST['nombre'];
            $can = $_POST['cantidad'];

            //PROCESO
            $r =substr($nom, 0,$can);
            /*devuelve un numero de caracteres de una cadena
            (Cadena, inicio, longitud)*/
           // echo "<center><h2>$r</h2><center>";
        }  
    }
    ?>
     <label for="respuesta">Respuesta:</label>
        <input type="text" id="respuesta" name="respuesta" 
        value="<?php echo $r;?>"><br><br>
        </fieldset>
    </form>
    </section>
    </main>    
</body>
</html>