<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
        <?php //Delimitador de apertura
        $curso ='Bienvenido al curso de Nivel Intermedio';
        $tipo_de_curso = 'Online';
        $cont1 = 'Acceso PDF';
        $cont2 = 'Clases en Vivo';
        $cont3 = 'Clases Grabadas';
        $edad = 28;
        $nombre = "Sofia";
        $boolean = false;
        $notaIntegradora1 = 100;
        $notaIntegradora2 = 90;
        $notaIntegradora3 = 100;
        $notaFinal = floor(($notaIntegradora1+$notaIntegradora2+$notaIntegradora3)/3);
        //Delimitador de cierre ?>
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <h3><?php echo $curso;?> </h3>
        <p>Modalidad de Curso: <?php echo $tipo_de_curso; ?></p>
        <p>Materiales Didácticos: <?php 
        echo 
        "<ul>".
        "<li>".$cont1."</li>".
        "<li>".$cont2."</li>".
        "<li>".$cont3."</li>".
        "</ul>"; 
        ?></p>
    </div>
    <div id="uni4_2">
        <?php 
        echo "EVALUACIÓN<br>";
        echo "INTEGRADORA<br>";
        echo "PHP y MySQL";
        ?>
    </div>
    <div id="uni4_3">
        <?php
        echo "<p>Nombre: ".$nombre."</p>";
        echo "<p>Edad: ".$edad."</p>";
        echo $boolean."\n";
        ?>
    </div>
    <div id="uni4_4">
        <h3>Calificaciones</h3>
        <p>Nota Integradora 1: <?php echo $notaIntegradora1; ?></p>
        <p>Nota Integradora 2: <?php echo $notaIntegradora2; ?></p>
        <p>Nota Integradora 3: <?php echo $notaIntegradora3; ?></p>
        <p>Nota Final: <?php echo $notaFinal; ?></p>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>