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
            $user = $this->users->getUser(1);
            $this->view = 'view/home.php';
            $data = ['user' => $user];
            $this->data = json_encode($data);
        }

    }
    $controller = new HomeController();
    $controller->pullUser();
