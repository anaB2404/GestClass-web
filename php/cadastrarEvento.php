<?php

include_once 'conexao.php';
session_start();
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$cad = true;
if ($cad) {
    $retorna = [
        'sit' => true,
        'msg' => '  <div class="card-panel green">
                            <span class="white-text text-darken-2">Evento cadastrado com sucesso ' . $dados['start'] . '!</span>
                        </div>'
    ];
    $_SESSION['msg'] = '<div class="card-panel green">
                                 <span class="white-text text-darken-2">Evento cadastrado com sucesso ' . $dados['title'] . '!</span>
                            </div>';
} else {
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

// $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// $data_start = str_replace('/', '-', $dados['start']);
// $data_start_conv = date("Y-m-d H:i:s", strtotime($data_start));

// $data_end = str_replace('/', '-', $dados['end']);
// $data_end_conv = date("Y-m-d H:i:s", strtotime($data_end));

// $queryEventos = "INSERT INTO events(title, color, start, end) VALUES(:title, :color, :start, :end)";
// $inserindoEventos = mysqli_query($conexao,$queryEventos);
// $inserindoEventos->bindParam(':title' = $dados['title']);
// $inserindoEventos->bindParam(':color' = $dados['color']);
// $inserindoEventos->bindParam(':start' = $data_start_conv);
// $inserindoEventos->bindParam(':end' = $data_end_conv);

// if ($inserindoEventos) {
//     $retorna = [
//         'sit' => true,
//         'msg' => '  <div class="card-panel green">
//                         <span class="white-text text-darken-2">Evento cadastrado com sucesso!</span>
//                     </div>'
//     ];
//     $_SESSION['msg'] = '<div class="card-panel green">
//                              <span class="white-text text-darken-2">Evento cadastrado com sucesso '.$dados['title'].'!</span>
//                         </div>';
// }else{
//     $retorna = [
//         'sit' => false,
//         'msg' => '  <div class="card-panel red accent-4">
//                         <span class="white-text text-darken-2">O evento não foi cadastrado, tente novamente!</span>
//                     </div>'
//     ];
// }

    

// header('Content-type: application/json');
// echo json_encode($retorna);
