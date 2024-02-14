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
    <section id="contenido_contacto">
    <h2>Contáctenos - Unidad VIII</h2>
    <form action="enviar_consulta.php" method="POST" class="form_contacto">
        <input type="text" name="nombre" placeholder="Nombre" required maxlength="30">
        <input type="text" name="apellido" placeholder="Apellido" required maxlength="50">
        <input type="email" name="correo" placeholder="Correo electrónico" required maxlength="100">
        <textarea name="consulta" id="consulta" rows="4" cols="20" placeholder="Consulta" required></textarea>
        <button type="submit" id="Enviar" name="enviar" class="cliente">Enviar</button>
    </form>
    </section>
    <?php
    if (isset($_GET['ok'])) { ?>
        <p class="txt_verde">Registro cargado con éxito</p>
    <?php
    }
    ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>