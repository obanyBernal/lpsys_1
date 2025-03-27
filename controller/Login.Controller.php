<?php

//require_once 'model/main.php';

class LoginController
{
    
    
    
    public function __CONSTRUCT()
    {
        //$this->main_model = new Main();
    }
    
    public function Index()
    {
       require_once 'views/header.php';
       require_once 'views/login.php';  
       require_once 'views/footer.php';


    }

  
   
}