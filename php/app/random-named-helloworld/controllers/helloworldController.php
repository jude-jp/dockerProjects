<?php
require_once dirname(__file__)."/../models/helloworldModel.php";

class HelloWorldController{

    private $model;

    public function __construct(){
        $this->model = new HelloWorldModel();
    }

    function getFirstNames(){
        return $model->getFirstNames();
    }
}

?>