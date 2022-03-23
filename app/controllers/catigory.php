<?php
require_once 'controller.php';
class Catigory extends Controller{

    function __construct()
    {
      
    }

    function index(){

        //$user = $this->model('user');
        //$userName = $user->select($id);
        $this->view('catigory');

    }
    

}
?>