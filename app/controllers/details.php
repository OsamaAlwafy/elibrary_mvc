<?php
require_once 'controller.php';
class Details extends Controller{

    function __construct()
    {
      
    }

    function index(){

        //$user = $this->model('user');
        //$userName = $user->select($id);
        $this->view('details');

    }
    function select($id=0)
    {
        echo "Select function in details books by id";
    }
    function update($id=0)
    {
        echo "update function in details books by id";
    }
    function insert($data)
    {
        echo "insert function in details books by id";
    }
    function delete($id=0)
    {
        echo "delete function in details books by id";
    }
    

}
?>