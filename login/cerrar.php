<?php
session_start();
require('conexion.php');
unset($_SESSION['usuario']);
header("Location: ../index.php");
?>