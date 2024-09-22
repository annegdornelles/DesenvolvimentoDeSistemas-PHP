<?php

if ($_POST) {

    //if (isset($_SESSION['id'])){
    $projetoId = $_POST['projetoId'];

    if (empty($projetoId)) {
        header('location:../../tarefas.php?cod=300');
    } else {
        header('location:../../tarefas.php?projetoId=' . $projetoId);
    }
}

/*else {
    header('location:../../index.php');
}}*/

function tarefasLoadByProjetoId($projetoId) {
    $tarefas = tarefasLoadAll();
    $result = array();

    foreach ($tarefas as $tarefa) {
        if ($tarefa['projetoId'] == $projetoId) {
            $result[] = $tarefa;
        }
    }

    return $result;
}

function tarefasLoadAll() {
    $tarefas = array(
        array('id' => '1', 'tarefa' => 'Regar plantas', 'status' => 'Em andamento', 'descricao' => 'Regar a horta semanalmente', 'projetoId' => '1', 'responsavelId' => '1'),
        array('id' => '2', 'tarefa' => 'Recolher embalagens recicláveis', 'status' => 'Concluída', 'descricao' => 'Recolher materiais para reciclagem', 'projetoId' => '2', 'responsavelId' => '2'),
        array('id' => '3', 'tarefa' => 'Treinar toda quinta', 'status' => 'Em andamento', 'descricao' => 'Treinamento semanal', 'projetoId' => '3', 'responsavelId' => '2'),
        array('id' => '4', 'tarefa' => 'Conseguir pilhas', 'status' => 'Concluída', 'descricao' => 'Obter pilhas para o projeto', 'projetoId' => '4', 'responsavelId' => '3'),
    );
    return $tarefas;
}
?>
