<?php namespace Mottor\Controller;

class Run extends Notify {
    public $selected;

    public function __construct() {
    }

    public function turnMusic() {
        $this->selected = '';
        $first = array_keys($this->queue)[0];
        $this->selected = $this->queue[$first]->update($this);
        $this->notify();
        $this->updateQueue();
    }

    private function updateQueue() {
        $first = array_shift($this->queue);
        array_push($this->queue, $first);
    }
}
