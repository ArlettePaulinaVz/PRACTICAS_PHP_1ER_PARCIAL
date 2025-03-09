<?php 
   if($_SERVER["REQUEST_METHOD"] == "POST"){
// captura los datos del formulario
$persona = ['nombre' => $_POST['nombre'],
            'edad'=>$_POST['edad'],
            'ciudad'=>$_POST['ciudad']
        ];
// verifica por medio del arreglo, por el metodo post que los datos
// se almacenen en la variable persona

// mostrar los datos capturados

echo "<h2> Datos recibidos: </h2><br>";
echo "Nombre:" .$persona["nombre"]."<br>";
echo "Nombre:" .$persona["edad"]."<br>";
echo "Nombre:" .$persona["ciudad"]."<br>";

    } else{
        echo "acceso denegado";
    }

    
    ?>