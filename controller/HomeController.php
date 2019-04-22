<?php
    class HomeController {
        public $view = 'view/home.php';
        public $data;
        function setData(){
            $data = [
                'client'=>[
                                ['name'=>'Tuan 1','birthday' => '21/04/2000'],
                                ['name' => 'Tuan 2','birthday' => '21/03/2000']
                            ]
                        ];
            $this->data = json_encode($data);
            echo $this->data;
        }

    }
    $controller = new HomeController();
    $controller->setData();
