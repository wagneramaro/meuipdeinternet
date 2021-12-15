<?php
header("Access-Control-Allow-Origin: *");
$ipeth = $_SERVER['REMOTE_ADDR']; 
$operadora = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$dados =  [
    'id' => $ipeth,
    'host' => $operadora
];

echo json_encode($dados);

?>