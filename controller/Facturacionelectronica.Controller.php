<?php

//require_once 'model/main.php';

class FacturacionelectronicaController
{
    
       
    public function __CONSTRUCT()
    {
        //$this->main_model = new Main();
    }
    
    public function Index()
    {
       require_once 'views/header.php';
       require_once 'views/electronica_facturacion_lista.php';  
       require_once 'views/footer.php';


    }

    public function data()
    {
       require_once 'views/header.php';
       require_once 'views/electronica_facturacion_datos.php';  
       require_once 'views/footer.php';


    }
  
   
}