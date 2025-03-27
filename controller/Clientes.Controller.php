<?php

//require_once 'model/main.php';

class ClientesController
{
    
       
    public function __CONSTRUCT()
    {
        //$this->main_model = new Main();
    }
    
    public function Index()
    {
       require_once 'views/header.php';
       require_once 'views/clientes_lista.php';  
       require_once 'views/footer.php';


    }

    
    public function data()
    {
       require_once 'views/header.php';
       require_once 'views/clientes_datos.php';  
       require_once 'views/footer.php';


    }
  
   
    public function copy()
    {
       
        require_once 'views/header.php';
        require_once 'views/clientes_copy.php';  
        require_once 'views/footer.php';
 


    }


}