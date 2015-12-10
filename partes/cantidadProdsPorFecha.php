<?php 
session_start();
require_once("clases/AccesoDatos.php");
require_once("clases/producto.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
    $arrayProdCant = pedido::traerCantidadPorFecha($_POST['fecha']);
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th><th>Cantidad</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            foreach ($arrayProdCant as $row) {
                echo"<tr>
                <td>".$row["Producto"]."</td>
                <td>".$row["Cantidad"]."</td>
                </tr>   ";
            }
            ?>
        </tbody>
    </table>
    <?php   
}
else 
{
    echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
    <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
}
?>

