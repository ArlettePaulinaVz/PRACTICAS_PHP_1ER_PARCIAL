<!DOCTYPE html> <!--Declaramos el tipo de documento-->
<html lang="en"><!--La raiz del documento-->
<head> <!--La cabecera, aqui se encuentran todos los metadatos-->
    <meta charset="UTF-8"> <!--Le decimos al navegador el formato
    de caracteres que manejara-->
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Practica 4</title> <!--Este es el titulo 
    de nuestro sitio-->
</head>
<body><!--El cuerpo del sitio, aqui va todo lo que podemos ver-->
    <center><!--centra todo en html es una etiqueta obsoleta-->
    <h1><mark>Combinando PHP y HTML</mark></h1>
    <!--mark es una etiqueta q marca en amarillo los textos
    es una etiqueta obsoleta-->
    <p>Hola Bienvenidos a la practica 4
        es un placer tenerlos con nosotros.
    </p><br><!--P es una etiqueta de parrafo-->
    <?php  echo "Les enviamos un cordial saludo";/* aqui mandamos
    un mensaje sin variables directo en el echo */
     ?>
    </center>
</body>
</html>