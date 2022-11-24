<?php

class Products
{
    public $id;
    public $name;
    public $price;
    public $amount;

    public function constructor()
    {
        settype($this->id, 'integer');
        settype($this->price, 'double');
        settype($this->amount, 'integer');
    }
}