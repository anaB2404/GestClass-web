<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$retorna = [
    'sit' => true,
    'msg' => ' <div class="card-panel teal lighten-2">
                 This is a card panel with a teal lighten-2 class
             </div>'
];

header('Content-Type: application/json');
echo json_encode($retorna);
