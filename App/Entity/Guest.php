<?php namespace Mottor\Entity;

use Mottor\DataProvider\InMemory;

class Guest {
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

    public function create() {
    }
}
