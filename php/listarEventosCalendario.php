<?php
    include 'conexao.php'; 

    $queryEventos = "SELECT id, title, color, start, end FROM events";
    $resultadoEventos = mysqli_query($conexao,$queryEventos);
    
    $eventos = [];

    while($linhaEventos = mysqli_fetch_array($resultadoEventos)){
        $id = $linhaEventos['id'];
        $titulo = $linhaEventos['title'];
        $cor = $linhaEventos['color'];
        $dataInicio = $linhaEventos['start'];
        $dataFim = $linhaEventos['end'];

        $eventos[] = [
            'id' => $id,
            'title' => $titulo,
            'color' => $cor,
            'start' => $dataInicio,
            'end' => $dataFim,
        ];
    }

    echo json_encode($eventos);
    
?>