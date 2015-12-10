<?php 
session_start();
require_once("clases/AccesoDatos.php");
require_once("clases/producto.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
    $estadisticas = producto::TraerEstadisticas();
    ?>
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


    <table class="table" id="datatable" style=" background-color: beige; display:none">
        <thead>
            <tr>
                <th>Producto</th><th>Productos Más Vendidos</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            foreach ($estadisticas as $row) {
                echo"<tr>
                <td>".$row["ProductoNom"]."</td>
                <td>".$row["CantidadProd"]."</td>
                </tr>   ";
            }
            ?>
        </tbody>
    </table>


    <script type="text/javascript">
    $(function () {
        $('#container').highcharts({
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Top 5 Productos Más Pedidos'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Cantidad'
                }
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });

    </script>
    <?php   
}
else 
{
    echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
    <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
}
?>