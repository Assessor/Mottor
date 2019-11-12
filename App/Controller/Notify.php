<?php namespace Mottor\Controller;

use SplObserver;

class Notify implements \SplSubject {
    protected $queue = [];

    public function attach(SplObserver $guest) {
        $this->queue[spl_object_hash($guest)] = $guest;
    }

    public function detach(SplObserver $guest) {
        $key = spl_object_hash($guest);
        if (isset($this->queue[$key])) {
            unset($this->queue[$key]);
        }
    }

    public function notify() {
        foreach ($this->queue as $guest) {
            $guest->update($this);
        }
    }
}
