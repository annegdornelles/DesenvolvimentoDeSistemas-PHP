<?php

if ($_POST){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $perfil = usersLogin($email, $senha);

    if (count($perfil)>0){
        session_start();
        $_SESSION['id'] = $perfil['id'];
        $_SESSION['nome'] = $perfil['nome'];
        setcookie("email_usuario", $email, time() + (60 * 60 * 24 * 30), "/");
        header('Location:../../perfil.php');
    }

    else {
        header('Location:../../index.php?cod=304');
    }
}

   function usersLogin($email, $senha){//compara usuario e senha
       
       $result = verPerfis();

       $perfil = array();

       foreach ($result as $key => $value){
           
         if ($email == $value['email'] && $senha == $value['senha']){
            $perfil['id'] = $value['id'];
            $perfil['nome'] = $value['nome'];
            $perfil['email'] = $value['email'];
            $perfil['senha'] = $value['senha'];
            break;
         }
       }

       return $perfil;
   }


    function verPerfis(){

    $perfis = array(
        array('id'=>'1', 'nome'=>'Luisa', 'email' => 'luisa@gmail.com', 'senha' => '123'),
        array ('id'=>'2', 'nome'=>'Pedro', 'email'=>'pedro@net.com', 'senha' => '456'),
        array ('id' => '3', 'nome' => 'Alex', 'email' => 'alex@outlook.com', 'senha' => '789')
    );

    return $perfis;
}