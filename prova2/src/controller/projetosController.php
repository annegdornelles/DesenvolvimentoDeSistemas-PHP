<?php

session_start();

   if ($_POST){

    if (isset($_SESSION['id'])){

    $status = $_POST['status'];

   /*if (empty($status)){
        header('location:../../gerenciamentoProjetos.php?cod=300');
    }
    else {*/
        header('location:../../gerenciamentoProjetos.php?cod='.$status);
    //}
   }

else {
    header('location:../../index.php');
}}

   function projetosLoadByStatusId($status){

    $nomeProjeto = projetosLoadAll();

    $result = null;
    $count = 0;
    
    foreach ($nomeProjeto as $key=>$value){
        if ($status == $value['status']){
            $result[$count]['id'] = $value['id'];
            $result[$count]['nomeProjeto'] = $value['nomeProjeto'];
            $result[$count]['status'] = $value['status'];
            $count++;
        }
    }

    return $result;
   }

   function projetosLoadAll(){
       
    $projetos = array(
        array('id'=>'1', 'nomeProjeto'=>'H2ORTA', 'status'=>'Em andamento','responsavel'=>'maria@gmail.com'),
        array('id'=>'2', 'nomeProjeto'=>'Reciclagem com robôs', 'status'=>'Pendente','responsavel'=>'maria@gmail.com'),
        array('id'=>'3', 'nomeProjeto'=>'GANHAR O JESMA', 'status'=>'Em andamento','responsavel'=>'julia@hotmail.com'),
        array('id'=>'4', 'nomeProjeto'=>'Energia com batatas', 'status'=>'Concluído','responsavel'=>'pedro@outlook.com')
    );

    return $projetos;
   }