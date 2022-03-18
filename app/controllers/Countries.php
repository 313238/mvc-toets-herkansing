<?php
require "../app/models/Country.php";

class Countries extends Controller {
    private array $last_country = [];

    public function __construct()   
    {
        $this->db = new Database;
        $this->get_countries();
        
    }

    private function get_countries()
    {
        $this->db->query('SELECT * FROM country');
        $this->db->execute();
        foreach($this->db->resultSet() as $country) {
            $country = (array) $country;
            array_push($this->last_country, new Country($country['id'], $country['name'], $country['capitalCity'], $country['continent']. $country['population']));
        }
    }

    public function index() {
        $data = [
            "title" => "Countries",
            "countries" => $this->last_country
        ];
        
        $this->view('countries', $data);
    }

}