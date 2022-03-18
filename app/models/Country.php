<?php

class Country {
    public int $id;
    public string $name;
    public string $capitalCity;
    public string $continent;
    public int $population;

    public function __construct(int $id, string $name, string $capitalCity, string $continent, int $population) {
        $this->id = $id;
        $this->name = $name;
        $this->capitalCity = $capitalCity;
        $this->continent = $continent;
        $this->population = $population;
    }
}