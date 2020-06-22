<?php
require_once dirname(__file__)."/../models/HelloWorldModel.class.php";

class HelloWorldController{

    private $model;

    public function __construct(){
        $this->model = new HelloWorldModel();
    }

    function insertFirstName($value){
        $response =  $this->model->insertFirstName($value);

        $http_response;
        if (isset($response)) {
            $http_response = array('status' => 200, 'payload' => $response);
        }

        return json_encode($http_response);
    }
}

?>