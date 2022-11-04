<?php require '../vendor/autoload.php';

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');

if(isset($_GET["cep"])){

    $ViaCep = new APP\ViaCep;
    $response = $ViaCep->Search(preg_replace('/[^0-9]/', '', $_GET["cep"]));

    if($response === null){
        $response = [
            'error' => true,
            'message' => 'Invalid CEP'
        ];
    }
    
    echo json_encode($response);

} else {

    echo json_encode([
        'error' => true,
        'message' => 'Please type the CEP'
    ]);
}

