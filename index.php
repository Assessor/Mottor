<?php

require_once(__DIR__ . '/App/DataProvider/IDataProvider.php');
require_once(__DIR__ . '/App/DataProvider/InMemory.php');

require_once(__DIR__ . '/App/Entity/Guest.php');

require_once(__DIR__ . '/App/Controller/Notify.php');
require_once(__DIR__ . '/App/Controller/Behavior/IBehavior.php');
require_once(__DIR__ . '/App/Controller/Behavior/Play.php');
require_once(__DIR__ . '/App/Controller/Behavior/Dance.php');
require_once(__DIR__ . '/App/Controller/Behavior/Drink.php');

require_once(__DIR__ . '/App/Controller/Run.php');

$dataProvider = new \Mottor\DataProvider\InMemory();

$guests[] = new \Mottor\Entity\Guest('Ivanov', $dataProvider, [3, 4]);
$guests[] = new \Mottor\Entity\Guest('Petrov', $dataProvider);
$guests[] = new \Mottor\Entity\Guest('Smirnov', $dataProvider, [5,6]);

$run = new \Mottor\Controller\Run();

foreach ($guests as $guest) {
    $run->attach($guest);
}

echo '<br />' . '--- Запуск музыки ---' . PHP_EOL . '<br />';
$run->turnMusic();

echo '<br />' . '--- Пришел новый посетитель ---' . PHP_EOL . '<br />';
$run->attach(new \Mottor\Entity\Guest('Kapustin', $dataProvider, [1]));

echo '<br />' . '--- Музыка закончилась. Выполняется заказ сл. посетителя в порядке очереди ---' . PHP_EOL . '<br />';
$run->turnMusic();

echo '<br />' . '--- Музыка закончилась. Выполняется заказ сл. посетителя в порядке очереди ---' . PHP_EOL . '<br />';
$run->turnMusic();

echo '<br />' . '--- Пришел новый посетитель ---' . PHP_EOL . '<br />';
$run->attach(new \Mottor\Entity\Guest('Orlov', $dataProvider, [1, 2, 5]));

echo '<br />' . '--- Музыка закончилась. Выполняется заказ сл. посетителя в порядке очереди ---' . PHP_EOL . '<br />';
$run->turnMusic();

echo '<br />' . '--- Музыка закончилась. Выполняется заказ сл. посетителя в порядке очереди ---' . PHP_EOL . '<br />';
$run->turnMusic();

echo '<br />' . '--- Музыка закончилась. Выполняется заказ сл. посетителя в порядке очереди ---' . PHP_EOL . '<br />';
$run->turnMusic();