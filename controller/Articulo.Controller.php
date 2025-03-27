<?php

//require_once 'model/main.php';

class ArticuloController
{
    
       
    public function __CONSTRUCT()
    {
        //$this->main_model = new Main();
    }
    
    public function Index()
    {
       require_once 'views/header.php';
       require_once 'views/articulo_lista.php';  
       require_once 'views/footer.php';


    }

    
    public function data()
    {
       require_once 'views/header.php';
       require_once 'views/articulo_datos.php';  
       require_once 'views/footer.php';


    }
  
   
}