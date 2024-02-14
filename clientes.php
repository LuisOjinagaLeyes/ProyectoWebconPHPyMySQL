<?php session_start(); ?>
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
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>
    <form action="validar_cliente.php" method="POST">
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="pass" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar" class="cliente">
    </form>
    <?php if(isset($_SESSION['clientes'])){
        include ("contenido_clientes.php");
    ?>
    <p><a href="salir.php">Salir</a></p>
    <?php
    } ?>
    <?php
    if (isset($_GET['error'])) { ?>
        <p class="txt_rojo">Los datos ingresados son incorrectos.</p>
    <?php
    }
    ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>