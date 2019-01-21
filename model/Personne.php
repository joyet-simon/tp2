<?php

namespace model;

class Personne
{
    protected $first_name;
    protected $last_name;
    protected $id;

    public function __construct(string $first_name, string $last_name, int $id = 0)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public static function createNullObject() : Personne
    {
        return new Personne('', '', 0);
    }

    public function toArray() : array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name
        ];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

}