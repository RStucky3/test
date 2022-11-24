<?php

class eigenschappen
{
    public $id;
    public $eigenschap;
    public $sterkzwak;

    public function constructor()
    {
        settype($this->id, 'integer');
    }
}