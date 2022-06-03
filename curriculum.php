<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum vitae</title>
    <link rel="stylesheet" href="fondo.css">
    <link rel="stylesheet" href="SCSS">
    <link rel="stylesheet" href="barraNavegacion.css">
    <link rel="icon" href="fogata.webp">
</head>

<body>
    <header class="header">
        <div class="container logo-nav-conteiner" class>
            <nav class="navegation">
                <ul>
                    <li><a href="index.html" class="active">Inicio</a></li>
                    <li><a href="curriculum.php" class="active">Curriculum</a></li>
                    <li><a href="video.php">Video</a></li>
                    <li><a href="listadoEstudiantes.php">Listado Estudiantes</a></li>
                    <li><a href="horario.html">Horario</a></li>
                    <li><a href="calculadora.html">Calculadora</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div align="center">
        <h1><br>Curriculum vitae</br></h1>
        <img src="yo.jpg" style="width:250px; height:250px;">
        <h2>Alex Paul Viñamagua Villalta</h2>
    </div>
    <hr size="2px" color="orange" />
</body>

</html>

<?php
$archivoXML = simplexml_load_file("infCurriculum.xml");
foreach ($archivoXML->persona as $key => $persona) {
    echo "<h3>Datos personales:</h3>";
    echo "Cedula: " . $persona->cedula . "<br>";
    echo "Nombres: " . $persona->nombre . "<br>";
    echo "Apellidos: " . $persona->apellido . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Educacion:</h3>";
    echo "Escuela: " . $persona->escuela . "<br>";
    echo "Colegio: " . $persona->colegio . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Habilidades técnicas que usted posee:</h3>";
    echo "Lenguaje de programacion: " . $persona->lenguajes . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Trabajos realizados o experiencia que usted tiene:</h3>";
    echo "independiente: " . $persona->independiente . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Deportes:</h3>";
    echo "Deportes de salto: " . $persona->salto . "<br>";
    echo "Deportes de larga distancia: " . $persona->correr . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Cursos o capacitaciones:</h3>";
    echo "Habilidades: " . $persona->habilidades . "<br>";
    echo "Especialidad: " . $persona->especialidad . "<br>";
    echo "<hr size='2px' color='orange'/>";
    echo "<h3>Contacto:</h3>";
    echo "Celular: " . $persona->celular . "<br>";
    echo "Correo: " . $persona->correo . "<br>";
    echo "<hr size='2px' color='orange'/>";
}
?>