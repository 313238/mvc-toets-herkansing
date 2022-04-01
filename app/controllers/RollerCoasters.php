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
        
        $rows ="";

        foreach($RollerCoasters as $value) {
            
           



            $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->nameRollerCoaster, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->nameAmusementPark, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->country, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->topspeed, 0, ',', '.') . "</td>
                  <td>" . number_format($value->height, 0, ',', '.') . "</td>
                </tr>";


        }

        $data = [
            "title" => "RollerCoasters",
            "rollercoasters" => $rows
        ];
        
        $this->view('rollercoasters/index', $data);
    }

}