<?php namespace Mottor\DataProvider;

interface IDataProvider {
    public function getAll();
    public function getId($id);
}
