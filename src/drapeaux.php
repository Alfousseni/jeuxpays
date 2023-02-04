<?php 
$array_of_flags = [    ['name' => 'GUINEE', 'url' => 'templates\img\Guinea_Bissau.png'],
['name' => 'MALI', 'url' => 'templates\img\Mali.png'],
['name' => 'FRANCE', 'url' => 'templates\img\France.png'],
['name' => 'ALLEMAGNE', 'url' => 'templates\img\Germany.png'],
['name' => 'ROYAUME-UNI', 'url' => 'templates\img\United_Kingdom.png'],
['name' => 'ITALIE', 'url' => 'templates\img\Italy.png'],
['name' => 'ESPAGNE', 'url' => 'templates\img\Spain.png'],
['name' => 'RUSSIE', 'url' => 'templates\img\Russian_Federation.png'],
['name' => 'CHINE', 'url' => 'templates\img\China.png'],
['name' => 'JAPON', 'url' => 'templates\img\Japan.png'],
['name' => 'COREE DU SUD', 'url' => 'templates\img\South_Korea.png'],
['name' => 'INDE', 'url' => 'templates\img\India.png'],
['name' => 'PAYS-BAS', 'url' => 'templates\img\Netherlands.png'],
['name' => 'BELGIQUE', 'url' => 'templates\img\Belgium.png'],
['name' => 'CANADA', 'url' => 'templates\img\Canada.png'],
['name' => 'AUSTRALIE', 'url' => 'templates\img\Australia.png'],
['name' => 'NOUVELLE-ZELANDE', 'url' => 'templates\img\New_Zealand.png'],
['name' => 'BRESIL', 'url' => 'templates\img\Brazil.png'],
['name' => 'ARGENTINE', 'url' => 'templates\img\Argentina.png'],
['name' => 'MEXIQUE', 'url' => 'templates\img\Mexico.png'],
['name' => 'ETATS-UNIS', 'url' => 'templates\img\United_States_of_America.png'],
['name' => 'SUISSE', 'url' => 'templates\img\Switzerland.png'],
['name' => 'NORVEGE', 'url' => 'templates\img\Norway.png'],
['name' => 'SUEDE', 'url' => 'templates\img\Sweden.png'],
['name' => 'DANEMARK', 'url' => 'templates\img\Denmark.png'],
['name' => 'FINLANDE', 'url' => 'templates\img\Finland.png'],
['name' => 'PORTUGAL', 'url' => 'templates\img\Portugal.png'],
['name' => 'GRECE', 'url' => 'templates\img\Greece.png'],
['name' => 'TURQUIE', 'url' => 'templates\img\Turkey.png'],
['name' => 'IRLANDE', 'url' => 'templates\img\Ireland.png'],
['name' => 'HONG KONG', 'url' => 'templates\img\Hong_Kong.png'],
['name' => 'SINGAPOUR', 'url' => 'templates\img\Singapore.png'],
['name' => 'OUGANDA', 'url' => 'templates\img\Uganda.png'],
['name' => 'THAÏLANDE', 'url' => 'templates\img\Thailand.png'],
['name' => 'SAUDI ARABIE', 'url' => 'templates\img\Saudi_Arabia.png'],
['name' => 'IRAN', 'url' => 'templates\img\Iran.png'],
['name' => 'IRAQ', 'url' => 'templates\img\Iraq.png'],
['name' => 'EGYPTE', 'url' => 'templates\img\Egypt.png'],
['name' => 'MAROC', 'url' => 'templates\img\Morocco.png'],
['name' => 'AFRIQUE DU SUD', 'url' => 'templates\img\South_Africa.png']
];


$choice=$array_of_flags[array_rand($array_of_flags)];

require_once 'templates/Affichage.php';


