<?php namespace Mottor\DataProvider;

class InMemory implements IDataProvider {
    private $data = [
            'genre' => [
                '0' => 'Рок',
                '1' => 'Шансон',
                '2' => 'Метал',
                '3' => 'Классика',
                '4' => 'Поп',
                '5' => 'Джаз',
                '6' => 'Кантри'
            ]
    ];

    public function getAll() {
        return $this->data['genre'];
    }

    public function getId($id) {
        if (is_array($id)) {
            return array_intersect_key($this->data['genre'], array_flip($id));
        }

        return isset($this->data['genre'][$id]) ? $this->data['genre'][$id] : [];
    }
}
