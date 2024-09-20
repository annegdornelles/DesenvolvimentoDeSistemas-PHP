<?php

if ($_POST){

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $usuario = usersLogin($email, $senha);

   if (count($usuario)>0){
     session_start();
     $_SESSION['id'] = $usuario['id'];
     $_SESSION['nome'] = $usuario['nome'];

     header('location:../../gerenciamentoProjetos.php');
   }

   else {
      header('location:../../index.php?cod=304');
   }
}

function usersLogin($email, $senha){
    $result = userLoadAll();

    $usuario = array();

    foreach ($result as $key=>$value){
        if ($email == $value['email']&&$senha == $value['senha']){
            $usuario['id'] = $value['id'];
            $usuario['nome'] = $value['nome'];
            $usuario['email'] = $value['email'];
            $usuario['senha'] = $value['senha'];
            break;
        }
    }

    return $usuario;
}

function userLoadAll(){

    $usuarios = array(
        array('id'=> '1', 'nome'=>'Maria', 'email' => 'maria@gmail.com', 'senha' => '012'),
        array('id'=> '2', 'nome'=>'Luis', 'email'=>'luis@gmail.com', 'senha'=>'123'),
        array('id'=>'3', 'nome'=>'Julia', 'email'=>'julia@hotmail.com', 'senha'=>'456'),
        array('id'=>'4', 'nome'=>'Pedro', 'email'=>'pedro@outlook.com', 'senha'=>'789')
    );

    return $usuarios;
}