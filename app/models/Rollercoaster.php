<?php

class RollerCoaster {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function getRollerCoasters() {
            $this->db->query("SELECT * FROM rollercoaster");

            $result = $this->db->resultSet();

            return $result;
        }
 }