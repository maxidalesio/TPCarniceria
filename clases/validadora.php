<?php
class validadora
{

    public static function ValidarLogin($mail, $clavePost, $recordar)
    {

        $unUsuario = usuario::ValidarUsuario($mail,md5($clavePost));

        if($unUsuario)
        {
            session_start();
            $_SESSION['mail'] = $unUsuario->mail;
            $_SESSION['id'] = $unUsuario->id;
            $_SESSION['clave'] = $clavePost;
            $_SESSION['tipo'] = $unUsuario->tipo;   
            $_SESSION['tiempo'] = date('d-M-Y g:i:s A');

            if($recordar == "true")
            {
                setcookie("dni", $dni, time()+36000, '/');          
            }
            else
            {
                setcookie("dni", $dni, time()-36000, '/');          
            }
            echo $_SESSION['tipo'];
        }
        else
        {
            echo "error";       
        }
    }

    public static function ValidarSesionVigente()
    {
        
        $retorno;
        $duracion = 0;

            //echo var_dump($_SESSION);

        if(isset($_SESSION['mail']))
        {
                //session_start();   
            $horaActual = strtotime(date('d-M-Y g:i:s A'));
            $horaSesion = strtotime($_SESSION['tiempo']);

                //echo var_dump($horaActual);
                //echo var_dump($horaSesion);

            $duracion = $horaActual - $horaSesion;
            if ($duracion < 1800) {
                $_SESSION['tiempo'] = date('d-M-Y g:i:s A');
                $retorno= true;
            }
            else
            {
                $_SESSION['mail']=null;
                $_SESSION['clave']=null;
                $_SESSION['id']=null;
                $_SESSION['tipo']=null;
                $_SESSION['tiempo']=null;
                unset($_SESSION["cart_array"]);
                session_destroy();
                $retorno= false;
            }                           
        }

        else
        {
            $retorno= false;
        }

            //echo var_dump($duracion);

        return $retorno;
    }
}
?>