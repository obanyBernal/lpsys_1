<?php if(session_id() ==null)
  {
  
    session_start();
  }

/* Establecemos que las paginas no pueden ser cacheadas */
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$current_user_id =0;

if(isset($_SESSION["current_user_id"]))
{
    $current_user_id = $_SESSION["current_user_id"];
}

$_SESSION["current_user_id"] = $current_user_id;



?>
