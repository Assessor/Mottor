<?php namespace  Mottor\Controller;

class Drink implements IBehavior {
    public function action($guest) {
        echo $guest->getId() . ': иду в бар, мои любимые жанры: ' . implode(', ', $guest->getGenre()) . PHP_EOL . "<br />";

        return true;
    }
}

