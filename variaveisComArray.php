<?php
$lista= [
    'nome' => 'Thalys',
    'idade' => 90,
    'atributos' => [
        'forca' => 80,
        'agilidade' => 50,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928    
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida'];

