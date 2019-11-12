<?php namespace  Mottor\Controller;

class Play implements IBehavior {
    public function action($guest) {
        $key = array_rand($guest->getGenre());
        echo $guest->getId() . ': заказываю музыку, жанр: ' . $guest->getGenre()[$key]  . PHP_EOL . "<br />";

        return $key;
    }
}
