<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de estudiantes</title>
    <link rel="stylesheet" href="fondo.css">
    <link rel="stylesheet" href="barraNavegacion.css">
    <link rel="icon" href="fogata.webp">
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
    <h1 align="center"><br>LISTADO DE ESTUDIANTES DEL 5 "B"</br></h1>
</body>
</head>

</html>

<?php
echo ('<table align="center" border=1 style="background:#red">');
echo '<tr>';
echo '<th>Numero</th>';
echo '<th>ID</th>';
echo '<th>Cedula</th>';
echo '<th>Nombre</th>';
echo '<th>Apellido</th>';
echo '<th>Celular</th>';
echo '<th>Carrera</th>';
echo '<th>Genero</th>';
echo '</tr>';

//Cargar la tabla//
$count = 0;
if (file_exists('Estudiantes.xml')) {
    $xml = simplexml_load_file('Estudiantes.xml');
    foreach ($xml->estudiante as $key => $estud) {
        $count++;
        echo '<tr>';
        echo '<td>' . $count . '</td>';
        echo '<td>' . $estud->cedula['id'] . '</td>';
        echo '<td>' . $estud->cedula . '</td>';
        echo '<td>' . $estud->nombre . '</td>';
        echo '<td>' . $estud->apellido . '</td>';
        echo '<td>' . $estud->celular . '</td>';
        echo '<td>' . $estud->carrera . '</td>';
        echo '<td>' . $estud->cedula['genero'] . '</td>';

        echo '</tr>';
    }
} else {
    exit("No se puede abrir el XML");
}
?>