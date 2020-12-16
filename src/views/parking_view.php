<div class="container">
  <h2>Registro de parqueo</h2>
  <form action='src/controllers/parking_controller.php' method='post'>
    <div class="row">
      <input type="hidden" name="action" value="register" />
      <div class="col-sm-6">
        <div class="form-group">
          <label for="identificacion">* Identificación:</label>
          <input type="number" class="form-control" name="identificacion" id="identificacion" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="tipo_vehiculo">* Tipo de vehículo:</label>
          <select class="form-control" name="tipo_vehiculo" id="tipo_vehiculo" required>
            <option selected disabled value="">Seleccione un tipo</option>
            <?php
            //Lenado de los datos (Array) del Tipo de Vehículo
            foreach ($result as $dato) {
              echo "<option value='" . $dato["Id"] . "'>" .  $dato["Nombre"] . "</option>";
            }
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="placa">* Placa:</label>
          <input class="form-control" name="placa" required type="text">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="ingreso">* Ingreso:</label>
          <input class="form-control" name="ingreso" id="ingreso" required type="date">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="salida">Salida:</label>
          <input class="form-control" name="salida" id="salida" type="date">
        </div>
      </div>
    </div>
    <button type="submit" class="text-center btn btn-success">Registrar</button>
  </form>
  <div class="row">
    <br />
    <br />
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Registros</h4>
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="table-responsive">
                  <div class="box">
                    <div class="box-body" id="div_table">
                      <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                          <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Tipo</th>
                            <th class="text-center">Placa</th>
                            <th class="text-center">Ingreso</th>
                            <th class="text-center">Salida</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $lines = "<td class='text-center'>";
                          $final = "</td>";
                          $i = 0;
                          //Lenado de los datos del Parqueo
                          foreach ($datos as $dato) {
                            $i++;
                            echo "<tr>" .
                              $lines . ($i) . $final .
                              $lines . ucwords($dato["Nombre"]) . $final .
                              $lines . $dato["Tipo"] . $final .
                              $lines . strtoupper($dato["Placa"]) . $final .
                              $lines . $dato["Ingreso"] . $final .
                              $lines . $dato["Salida"] . $final .
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