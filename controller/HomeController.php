<?php
    require 'model/User.php';
    class HomeController {
        public $view;
        private $users;
        public $data;
        function __construct(){
            $this->users = new User();
        }
        function pullUser(){
            $user = '';
             if(isset($_GET['id'])) $user  =   $this->users->getUser($_GET['id']);
            $this->view = 'view/home.php';
            $data = ['user' => $user];
            $this->data = json_encode($data);
        }

    }
    $controller = new HomeController();
    
     $controller->pullUser();

