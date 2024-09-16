<?php

session_start();

if (isset($_GET['perfil'])) {

    $perfilEscolhido = $_GET['perfil'];
    
    $_SESSION['perfil'] = $perfilEscolhido;

    setcookie("perfil_usuario", $perfilEscolhido, time() + (60 * 60 * 24 * 30), "/");

    header("Location:../../perfilEscolhido.php");
  
} 

else {
    
    header("Location:../../index.php");
    
}
?>
