<?php
session_start();
$Email_cliente = $_POST ['email'];
$password_cliente = $_POST['pass'];

if ($Email_cliente == 'cliente@gmail.com' && $password_cliente == 'phpintermedio') {
    $_SESSION['clientes'] = $Email_cliente;
    header("Location: clientes.php?ok");
} else {
    header("Location: clientes.php?error");
}
?>