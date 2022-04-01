<?php
require "../app/models/Rollercoaster.php";

class RollerCoasters extends Controller {
    private array $last_rollercoaster = [];

    public function __construct()   
    {
        $this->rollercoasterData = $this->model("Rollercoaster");        
    }

    public function index() {
        $RollerCoasters = $this->rollercoasterData->getRollerCoasters();
        // var_dump($countries);exit();

        $rows ="";

        foreach($RollerCoasters as $value) {
            
            $rows .= "<tr><th>$value->id</th></tr>";
            $rows .= "<tr><td>$value->nameRollerCoaster</td></tr>";
            $rows .= "<tr><td>$value->nameAmusementPark</td></tr>";
            $rows .= "<tr><td>$value->country</td></tr>";
            $rows .= "<tr><td>$value->topspeed</td></tr>";
            $rows .= "<tr><td>$value->height</td></tr>";


        }

        $data = [
            "title" => "RollerCoasters",
            "rollercoasters" => $rows
        ];
        
        $this->view('rollercoasters/index', $data);
    }

}