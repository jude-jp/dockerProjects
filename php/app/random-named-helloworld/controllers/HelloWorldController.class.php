<?php
require_once dirname(__file__)."/../models/HelloWorldModel.class.php";

class HelloWorldController{

    private $model;

    public function __construct(){
        $this->model = new HelloWorldModel();
    }

    function getFirstNames(){
        return $this->getModel()->getFirstNames();
    }

    public function getModel(){
        return $this->model;
    }
}

?>