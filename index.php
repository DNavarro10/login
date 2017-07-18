<?php session_start();

if (isset($_SESSION['usuarioi'])) {
	header('Location: contenido.php');
} else {
	header('Location: registrate.php');
	
}
?>