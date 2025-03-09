    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1><mark>Arreglos</mark></h1>
    <fieldset>
        <legend>Almacenamiento de datos</legend><br>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required> <br><br>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" required> <br><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required> <br><br>
        <button type="submit">Enviar</button>
    </form>
    </fieldset>
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){ //Captura los datos del formulario 
        $persona = [
            "nombre" => $_POST['nombre'],
            "edad"   => $_POST['edad'],
            "ciudad" => $_POST['ciudad']
        ];

        //Mostrar datos capturados
        echo "<h2>Datos recibidos:</h2>";
        echo "Nombre: ".$persona["nombre"]."<br>";
        echo "Edad:".$persona["edad"]."<br>";
        echo "Ciudad:".$persona["ciudad"]."<br>";
    }else{
        echo "Acceso denegado";
    }
    ?>
   
    </body>
    </html>