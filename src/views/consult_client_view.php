<div class="container">
    <h2>Clientes Registrados</h2>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="box">
                                        <div class="box-body" id="div_table">
                                            <table id="example1" aria-describedby class="table table-bordered table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">N°</th>
                                                        <th class="text-center">Nombre</th>
                                                        <th class="text-center">Identificación</th>
                                                        <th class="text-center">Contacto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $lines = "<td class='text-center'>";
                                                    $final = "</td>";
                                                    $i = 0;
                                                    //Lenado de los datos de los Cliente Registrados
                                                    foreach ($datos as $dato) {
                                                        $i++;
                                                        echo "<tr>" .
                                                            $lines . ($i) . $final .
                                                            $lines . ucwords(($dato["Nombre"])) . $final .
                                                            $lines . $dato["Identificacion"] . $final .
                                                            $lines . strtolower($dato["Correo"]) . $final .
                                                            "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>