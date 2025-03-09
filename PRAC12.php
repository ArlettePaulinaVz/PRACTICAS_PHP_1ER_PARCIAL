<?
/**Desarrolla un sistema que permita a un 
 * usuario responder una pregunta relacionada
 * con el clima. la pregunta sera: 
 * "Esta lloviendo actualmente?"
 * el usuario tendra 2 opciones para responder
 * "si" o "No". Dependiendo de la respuesta del usuario,
 * el sistema debe mostrar un mensaje adecuado:
 * 
 * 1.- si el usuario selecciona "si", que se muestre:
 * "Lleva un paraguas contigo, es un dia lluvioso".
 * 
 * 2.- Si el usuario selecciona "No ", que se muestre:
 * "Puedes salir sin preocuparte por la lluvia, el clima
 * esta despejado".
 */

?>
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
        <label for="lluvioso">Si</label>
        <input type="radio" id="lluvioso" name="clima" value="si"> <br><br>
        <label for="no_lluvioso">No</label>
        <input type="radio" id="no_lluvioso" name="clima" value="no"> <br><br>
        <button type="submit">Enviar</button>
    </form>
    </center>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['clima'])){
            $clima = $_POST['clima'];
            
        if($clima == "si"){
            echo "<center><p>Lleva un paraguas contigo, 
            es un dia lluvioso</center></p>";
        }else{
            echo "<center><p>Puedes salir sin preocuparte por la lluvia,
             el clima esta despejado</center></p>";  
        }
    
        }
    }
    
    ?>
</body>
</html>