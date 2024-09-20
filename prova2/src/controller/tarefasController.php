<?php

   if ($_POST){

    $tarefa = $_POST['tarefa'];

    if (empty($tarefa)){
        header('location:../../tarefas.php');
    }
    
    else {
        header('location:../../tarefas.php?cod='.$tarefas);
    }
   }

   function tarefasLoadByStatusId($status){

    $tarefa = tarefasLoadAll();

    $result = null;
    $count = 0;
    
    foreach ($tarefa as $key=>$value){
        if ($status == $value['status']){
            $result[$count]['id'] = $value['id'];
            $result[$count]['nomeProjeto'] = $value['nomeProjeto'];
            $result[$count]['status'] = $value['status'];
            $count++;
        }
    }

    return $result;
   }

   function tarefasLoadAll(){
       
    $tarefas = array(
        array('id'=>'1', 'tarefa'=>'regar planta', 'status'=>'Em andamento','responsavel'=>'maria@gmail.com', 'projeto'=>'H2ORTA'),
        array('id'=>'2', 'tarefa'=>'Recolher embalagens recicláveis', 'status'=>'Concluído','responsavel'=>'julia@gmail.com', 'projeto'=>'reciclagem'),
        array('id'=>'3', 'tarefa'=>'Treinar toda quinta', 'status'=>'Em andamento','responsavel'=>'julia@hotmail.com', 'projeto'=>'JESMA'),
        array('id'=>'4', 'tarefa'=>'Conseguir pilhas', 'status'=>'Concluido','responsavel'=>'pedro@outlook.com','projeto'=>'Energia renovável')
    );

    return $tarefas;
   }