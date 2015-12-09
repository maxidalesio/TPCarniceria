<?php
session_start();

    public static function validarSesionActual()
    {
        if(isset($_SESSION['registrado']))
        {
            $segundos = strtotime(date("Y-m-d H:i:s")) - strtotime($_SESSION['tiempo']);
            if ($segundos <= 30)
            {
                $_SESSION['tiempo']= date("Y-m-d H:i:s");
                return true;
            }
            
        }
        
        return false;
    }
}
?>