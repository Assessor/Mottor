<?php

require_once(__DIR__ . '/App/DataProvider/IDataProvider.php');
require_once(__DIR__ . '/App/DataProvider/InMemory.php');

require_once(__DIR__ . '/App/Entity/Bar.php');
require_once(__DIR__ . '/App/Entity/DanceFloor.php');
require_once(__DIR__ . '/App/Entity/Guest.php');

require_once(__DIR__ . '/App/Render/Render.php');

$dataProvider = new \Mottor\DataProvider\InMemory();
$guest1 = new \Mottor\Entity\Guest('Ivanov', $dataProvider, [1, 2]);
$guest2 = new \Mottor\Entity\Guest('Ivanov', $dataProvider);

echo '<pre>';
print_r($guest1);

print_r($guest2);