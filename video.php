<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
    <link rel="stylesheet" href="barraNavegacion.css">
    <script type="text/javascript" src="funciones.js"> </script>
    <link rel="stylesheet" href="fondo.css">
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
    <h1 align="center"><br>Video de muestra</br></h1>
    <section>
        <div align="center">
            <video width="540" height="380" id="videoPresentacion">
                <source src="ovejas.mp4" type="video/mp4">
            </video>
        </div>
        <div align="center">
            <button onclick="play()">&#9658;/&#9474;&#9474;</button>
            <button onclick="reiniciar()">&#9726;</button>
        </div>
        <script>
            var miVideo = document.getElementById("videoPresentacion");
        </script>
    </section>
</body>

</html>