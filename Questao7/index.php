<?php
include_once './heroi.php';
$Herois = array(
    new SuperHeroi(01, "Homem de Ferro", "Voa", 151515, 111111,  "Laboratorio"),
    new SuperHeroi(02, "Thor", "Raio", 111000, 55555, "Venus"),
    new SuperHeroi(03, "Mulher Maravilha", "Chicote", 151718, 50, "Terra"),
    new SuperHeroi(04, "Hulk", "Forca", 8000, 50, "Terra"),
);
for ($i = 0; $i < count($Herois); $i++) {
    echo "Id: " . $Herois[$i]->getId() ;    
    echo "Nome: " . $Herois[$i]->getNome() ;
    echo "Poder Especial: " . $Herois[$i]->getPoderEspecial() ;
    echo "Energia: " . $Herois[$i]->getEnergia() ;
    echo "Forca: " . $Herois[$i]->getForca() ;
    echo "Origem: " . $Herois[$i]->getOrigem() ;
    echo "Poder Médio: " . $Herois[$i]->calcularPoderMedio() ;
    echo "Energia Aumentada: " . $Herois[$i]->aumentarEnergia();

}
