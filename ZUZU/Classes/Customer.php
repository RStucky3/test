<?php

class Customer
{
    public $id;
    public $fname;
    public $lname;
    public $address;
    public $city;
    public $zipcode;

    public function constructor()
    {
        settype($this->id, 'integer');
    }
}