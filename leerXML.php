<?php
    echo('<table align="center" border=1 style="background:#FFC300">');
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
        foreach($xml->estudiante as $key => $estud){
            $count++;
            echo '<tr>';
            echo '<td>'.$count.'</td>';
            echo '<td>'.$estud->cedula['id'].'</td>';
            echo '<td>'.$estud->cedula.'</td>';
            echo '<td>'.$estud->nombre.'</td>';
            echo '<td>'.$estud->apellido.'</td>';
            echo '<td>'.$estud->celular.'</td>';
            echo '<td>'.$estud->carrera.'</td>';
            echo '<td>'.$estud->cedula['genero'].'</td>';

            echo '</tr>';
        }
    }else {
        exit("No se puede abrir el XML");
    }
?>