<?php if(session_id() ==null)
  {
  
    session_start();
  }

// Activar las alertas
ini_set('display_errors', 'on');
ini_set('display_errors', 1);

// Notificar todos los errores excepto E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);
// Notificar todos los errores excepto E_NOTICE
//error_reporting(0);
date_default_timezone_set('America/El_Salvador'); 

/*------------------------------------------------------*/
    

$current_user_id =0;

if(isset($_SESSION["current_user_id"]))
{
    $current_user_id = $_SESSION["current_user_id"];
}

$_SESSION["current_user_id"] = $current_user_id;

try
{



            $action ="";
     
         if($current_user_id <=0)
            {
                $controller="login";
                $current_page =0;

            }

          if(isset($_REQUEST["a"]))
                    {
                        $action = $_REQUEST["a"];
                    }
          else
                    {

                       $action ='Index';
                       $current_page =0;
                  
                       
                    }
       

            /* capturando el controlador */
            /* elcontrolador-laaccion */
            
               if(isset($_REQUEST["c"]))
                   {
                        $GetLink = $_REQUEST["c"];
                        $nGuionPos = strpos($GetLink,"-");
                        
                        if($nGuionPos == FALSE)
                        {
                            $controller = $_REQUEST["c"];
                        }
                        else
                        {
                            $controller = substr($GetLink,0,$nGuionPos);
                            $action = substr($GetLink,$nGuionPos+1,strlen($GetLink));
                            
                        }


                       
                      
                   }
               else
                   {
                       $controller="Main";

                   } 
                             
                   
        if( strtoupper($controller)  == "LOGOUT")
        {
            $current_user_id =0;
        }
      

        if($current_user_id <=0)
        {
                //a este nivel el usuario ya esta logueado

                $controller ='Login';



        }

         
        //print "El controlador".$controller;

     
          // Todo esta lógica hara el papel de un FrontController
          if(strlen($controller) >0)
          {
  
            
            $action = (strlen($action) >0) ? $action : "Index";
  
            // Instanciamos el controlador
            require_once "controller/$controller.controller.php";
            $controller = ucwords($controller) . 'Controller';
            $controller = new $controller;
            
            
            // Llama la action
            call_user_func( array( $controller, $action ) );





         
          }
             
       
    
}
catch (Exception $e) 
        {
            $MsgErr=$e->getMessage();

            echo '
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong>'.$MsgErr.'</div>';


        }
?>