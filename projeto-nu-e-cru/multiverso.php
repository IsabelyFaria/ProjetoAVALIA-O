<?php
header('Content-Type: application/json');

$universos = [
    "Cyberpunk" => ["#00ffcc", "Hackers no espaço!", "Erro: Conexão perdida na rede neural."],
    "Medieval"  => ["#ffcc00", "A missão foi concluída!", "Erro: O mago não encontrou a runa correta."],
    "Steampunk" => ["#cc6600", "Engrenagens em perfeita harmonia!", "Erro: Vapores interromperam a operação."]
];


$universo_atual = array_rand($universos);


echo json_encode([
    "tema" => $universo_atual,
    "cor" => $universos[$universo_atual][0],
    "sucesso" => $universos[$universo_atual][1],
    "erro" => $universos[$universo_atual][2]
]);
?>
