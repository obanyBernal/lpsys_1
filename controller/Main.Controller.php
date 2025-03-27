<?php

//require_once 'model/main.php';

class MainController
{
    
       
    public function __CONSTRUCT()
    {
        //$this->main_model = new Main();
    }
    
    public function Index()
    {
       require_once 'views/header.php';
       require_once 'views/leftmenu.php';  
       require_once 'views/main_desktop.php';  
       require_once 'views/footer.php';


    }

  
   
}