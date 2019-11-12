<?php namespace Mottor\Entity;

use Mottor\Controller\Dance;
use Mottor\Controller\Drink;
use Mottor\Controller\Play;
use Mottor\DataProvider\InMemory;

class Guest implements \SplObserver {
    private $id;
    private $genre = [];


    public function __construct($id, InMemory $provider, $favorite = null) {
        $this->id = $id;

        if (is_null($favorite)) {
            $this->genre = $provider->getAll();
        } else {
            $this->genre = $provider->getId($favorite);
        }
    }

    public function update(\SplSubject $guest) {
        $behavior = null;

        switch ($guest->selected) {
            case '':
                $behavior = new Play();
                break;
            case (array_key_exists(intval($guest->selected), $this->getGenre())):
                $behavior = new Dance();
                break;
            default:
                $behavior = new Drink();
        }

        if (!is_null($behavior)) {
            return $behavior->action($this);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getGenre() {
        return $this->genre;
    }
}
