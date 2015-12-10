<?php 
    require_once("clases/AccesoDatos.php");
    require_once("clases/producto.php");
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


