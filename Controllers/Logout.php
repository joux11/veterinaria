<?php
session_start();

// Destruir todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();

// Redirigir al usuario al formulario de inicio de sesión
header("Location: login");
exit();
?>