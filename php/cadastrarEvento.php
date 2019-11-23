<?php
session_start();
include_once 'conexao.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$queryEventos = "INSERT INTO events(title, color, start, end) VALUES(:title, :color, :start, :end)";
$inserindoEventos = $conexao->prepare($queryEventos);
$inserindoEventos->bindParam(':title' = $dados['title']);
$inserindoEventos->bindParam(':color' = $dados['color']);
$inserindoEventos->bindParam(':start' = $dados['start']);
$inserindoEventos->bindParam(':end' = $dados['end']);



if ($inserindoEventos->execute()) {
    $retorna = [
        'sit' => true,
        'msg' => '  <div class="card-panel green">
                        <span class="white-text text-darken-2">Evento cadastrado com sucesso!</span>
                    </div>'
    ];
    $_SESSION['msg'] = '<div class="card-panel green">
                             <span class="white-text text-darken-2">Evento cadastrado com sucesso '.$dados['title'].'!</span>
                        </div>';
}else{
    $retorna = [
        'sit' => false,
        'msg' => '  <div class="card-panel red accent-4">
                        <span class="white-text text-darken-2">O evento não foi cadastrado, tente novamente!</span>
                    </div>'
    ];
}

    

header('Content-type: application/json');
echo json_encode($retorna);


// session_start();

// include_once 'conexao.php';

// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// //Converter a data e hora do formato brasileiro para o formato do Banco de Dados
// $data_start = str_replace('/', '-', $dados['start']);
// $data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

// $data_end = str_replace('/', '-', $dados['end']);
// $data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

// $query_event = "INSERT INTO events (title, color, start, end) VALUES (:title, :color, :start, :end)";

// $insert_event = $conn->prepare($query_event);
// $insert_event->bindParam(':title', $dados['title']);
// $insert_event->bindParam(':color', $dados['color']);
// $insert_event->bindParam(':start', $data_start_conv);
// $insert_event->bindParam(':end', $data_end_conv);

// if ($insert_event->execute()) {
//     $retorna = ['sit' => true, 'msg' => '<div class="card-panel green"><span class="white-text text-darken-2">Evento cadastrado com sucesso!</span></div>'];
//     $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Evento cadastrado com sucesso!</div>';
// } else {
//     $retorna = ['sit' => false, 'msg' => '<div class="card-panel red accent-4"><span class="white-text text-darken-2">O evento não foi cadastrado, tente novamente'.$dados['title'].'!</span></div>'];
// }

// ;

// header('Content-Type: application/json');
// echo json_encode($retorna);


//conversao data igual a do banco de dados

// $data = str_replace('/','-',$dados['start']);
// $data_start = date("Y-m-d H:i:s", strtotime($data));

// $dataE = str_replace('/','-',$dados['end']);
// $data_end = date("Y-m-d H:i:s", strtotime($dataE));