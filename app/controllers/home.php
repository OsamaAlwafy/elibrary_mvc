<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
      echo "home index";
    }

    function index(){

        //$user = $this->model('user');
        //$userName = $user->select($id);
        $this->view('index');

    }

}
?>