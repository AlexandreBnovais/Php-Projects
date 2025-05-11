<?php 
$estudantes = [ 
    "pedro" => [
        "Email" => "pedroguerra20@gmail.com",
        "RM" => "20202930152",
        "notas" => [10, 10, 10]
    ],
    "joao" => [
        "Email" => "joaoguerra20@gmail.com",
        "RM" => "20202930169",
        "notas" => [8, 1, 2]
    ],
    "maria" => [
        "Email" => "mariaguerra20@gmail.com",
        "RM" => "20202930125", 
        "notas" => [0, 7, 5]
    ]
];

foreach($estudantes as $key => $aluno) {
    echo "Aluno: $key\n";
    echo "Email " . $aluno['Email'] . "\n";
    echo "RM " . $aluno['RM'] . "\n";

    foreach($aluno['notas'] as $media) {
        echo "Notas: $media\t";
    }

    $media = array_sum($aluno['notas']) / count($aluno['notas']);
    echo "Media: " . round($media, 1) . "\n"; 

    if($media > 6.0) {
        echo "Status: Aprovado\n";
    }else{
        echo "Status: Reprovado\n";
    }

    echo "\n\n";
}
?>