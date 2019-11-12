<?php namespace  Mottor\Controller;

class Dance implements IBehavior {
    public function action($guest) {
        echo $guest->getId() . ': иду на тацпол, мои любимые жанры: ' . implode(', ', $guest->getGenre())  . PHP_EOL . "<br />";

        return true;
    }
}

