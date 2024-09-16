<?php

if ($_POST){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = usersLogin($email, $senha);

    if (count($usuario)>0){
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        setcookie("email_usuario", $email, time() + (60 * 60 * 24 * 30), "/");
        header('Location:../../perfil.php');
    }

    else {
        header('Location:../../index.php?cod=304');
    }
}

   function usersLogin($email, $senha){//compara usuario e senha
       
       $result = verPerfis();

       $usuario = array();

       foreach ($result as $key => $value){
           
         if ($email == $value['email'] && $senha == $value['senha']){
            $usuario['id'] = $value['id'];
            $usuario['nome'] = $value['nome'];
            $usuario['email'] = $value['email'];
            $usuario['senha'] = $value['senha'];
            break;
         }
       }

       return $usuario;
   }


    function verPerfis(){

    $usuarios = array(
        array('id'=>'1', 'nome'=>'Luisa', 'email' => 'luisa@gmail.com', 'senha' => '123'),
        array ('id'=>'2', 'nome'=>'Pedro', 'email'=>'pedro@net.com', 'senha' => '456'),
        array ('id' => '3', 'nome' => 'Alex', 'email' => 'alex@outlook.com', 'senha' => '789')
    );

    return $usuarios;
}