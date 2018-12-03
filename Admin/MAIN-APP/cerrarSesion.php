<?php

session_start();
session_unset($_SESSION['CORREO']);
session_destroy();

header('Location: ../index.php');

?>