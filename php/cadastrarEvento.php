<?php
include_once 'conexao.php';

session_start();
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$queryEventos = "INSERT INTO events(title,color,start,end) VALUES (:title, :color, :start, :end)";
$insereEventos->bindParm(':title', $dados['title']);
$insereEventos->bindParm(':color', $dados['color']);
$insereEventos->bindParm(':start', $dados['start']);
$insereEventos->bindParm(':end', $dados['end']);

if ($insereEventos->execute()) {
    $retorna = [
        'sit' => true,
        'msg' => '  <div class="card-panel green">
                        <span class="white-text text-darken-2">Evento cadastrado com sucesso!</span>
                    </div>'
    ];
    $_SESSION['msg'] = '<div class="card-panel green">
                            <span class="white-text text-darken-2">Evento cadastrado com sucesso ' . $dados['start'] . '!</span>
                        </div>';
} else {
    $retorna = [
        'sit' => true,
        'msg' => '  <div class="card-panel red darken-4">
                        <span class="white-text text-darken-2">O evento não foi cadastrado, tente novamente</span>
                    </div>'
    ];
}


header('Content-type: application/json');
echo json_encode($retorna);




//conversao data igual a do banco de dados

// $data = str_replace('/','-',$dados['start']);
// $data_start = date("Y-m-d H:i:s", strtotime($data));

// $dataE = str_replace('/','-',$dados['end']);
// $data_end = date("Y-m-d H:i:s", strtotime($dataE));