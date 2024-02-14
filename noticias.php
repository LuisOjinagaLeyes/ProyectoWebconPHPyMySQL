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
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <?php
    $noticias = array (
        array('titulo'=>'Ataques informáticos: proponen un protocolo para que las organizaciones le avisen a sus clientes si fueron expuestos sus datos', 'párrafo'=>'En este contexto, resulta esencial que las instituciones que almacenan y manejan información confidencial asuman la responsabilidad de garantizar la seguridad de dichos datos y, en caso de una brecha de seguridad, informar de manera oportuna a los titulares afectados«.»Allí están claramente los plazos y las responsabilidades de las organizaciones en caso de una brecha de seguridad que afecte los datos personales.', 'imagen'=>'ransomware.jpg'),
        array('titulo'=>'Un calor mortífero, incendios e inundaciones son las alarmas de un planeta que está al límite', 'párrafo'=>'Los científicos dicen que no hay duda de que esto se debe al cambio climático o aumentará a medida que el planeta se caliente. Según el Panel Intergubernamental sobre Cambio Climático, si la humanidad no cambia radicalmente la forma en que viajamos, producimos energía y alimentos, las temperaturas promedio globales podrían aumentar en más de 3 grados centígrados, causando desastres que hacen que los desastres de este año parezcan menores.', 'imagen'=>'cambio climático.jpg'),
        array('titulo'=>'La Policía de la Ciudad comenzó hoy a usar las pistolas Taser en las 15 comunas y estaciones de subte', 'párrafo'=>'Los primeros 60 kits fueron donados a la Unidad de Intervención Rápida , personal de la División Metropolitana y miembros del grupo de trabajo de la Unidad Especial de Operaciones Urbanas . Dos meses después de la compra, y luego de resolver varias disputas públicas y administrativas sobre su uso, la Policía de la Ciudad de Buenos Aires finalmente comenzó a utilizar la pistola eléctrica modelo X2 a partir de este lunes.', 'imagen'=>'taser.jpg'),
        array('titulo'=>'Razr 40 Ultra: Motorola pone en venta su nuevo smartphone plegable en la Argentina', 'párrafo'=>'La compañía presentó hoy en el país una nueva versión de su teléfono con pantalla plegable; un segundo modelo, más económico, llegará más adelante. Motorola anunció que comenzará a vender en nuestro país sus dos smartphones plegables, el Razr 40 y el Razr 40 Ultra, un mes y medio después de su debut internacional. Que esté terminado en Tierra del Fuego le permite tener un precio similar al de ese mismo teléfono comprado en el exterior; tiene un precio internacional de 999 dólares .', 'imagen'=>'Motorola-Razr-40-Ultra.jpg')
    );
    ?>
    <section id="contenido_noticias">
    <h2>Noticias - Unidad VI</h2>
    <?php
    for ($i=0; $i < count($noticias) ; $i++) { ?>
        
    
    <div class="noticias">
    <h3><?php echo $noticias [$i]['titulo'] ?></h3>
    <p><?php echo $noticias [$i]['párrafo'] ?></p>
    <img src="imágenes/<?php echo $noticias [$i]['imagen'] ?>" alt="<?php echo $noticias [$i]['titulo'] ?>"class="ajustar" >
    </div>

<?php
}
?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>