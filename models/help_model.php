<?php

class Help_Model extends Model{

    function __construct(){
        parent::__construct();
        
    }

    function index(){
        return $this->db->query("SELECT * FROM product");
    }
}