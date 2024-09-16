<?php

session_start();

if (isset($_GET['perfil'])) {

    $perfilEscolhido = $_GET['perfil'];
    
    $_SESSION['perfil'] = $perfilEscolhido;

    header("Location:../../perfilEscolhido.php");
  
} 

else {
    
    header("Location:../../index.php");
    
}
?>
