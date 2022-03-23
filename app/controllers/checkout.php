<?php
require_once 'controller.php';
class checkout extends Controller{

    function __construct()
    {
      
    }

    function index(){

        //$user = $this->model('user');
        //$userName = $user->select($id);
        $this->view('checkout');

    }


    function select($id_array)
    {
        echo "Select function in details books by id";
    }
    function update($id)
    {
        echo "update function in checkout basket by id";
    }
    function insert($data)
    {
        echo "insert function in basket books by id";
    }
    function delete($id=0)
    {
        echo "delete function in basket books by id";
    }
    

}
?>