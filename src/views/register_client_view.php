<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <asp:Panel ID="Resultados" Visible="false" runat="server" CssClass="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i id="Icono" runat="server" visible="true" class="icon fa fa-ban"></i>
          <asp:Label ID="LTitulo" runat="server" Text=""></asp:Label>
        </h4>
        <asp:Label ID="LResultado" runat="server" Text=""></asp:Label>
      </asp:Panel>
    </div>
  </div>
  <h2>Registro de Clientes</h2>
  <hr>
  <form action='src/controllers/client_controller.php' method='post'>
    <input type="hidden" name="action" value="register" />
    <div class="form-group">
      <label for="nombre">Nombre Completo:</label>
      <input type="nombre" class="form-control" name="nombre" required="true" placeholder="Ingrese su nombre">
    </div>
    <div class="form-group">
      <label for="identificacion">Identificación:</label>
      <input type="identificacion" class="form-control" name="identificacion" required="true" placeholder="Ingrese sus identificación">
    </div>
    <div class="form-group">
      <label for="correo">Correo:</label>
      <input class="form-control" name="correo" required="true" placeholder="Ingrese su Correo">
    </div>
    <br />
    <div class="row">
      <div class="col text-center">
        <button type="submit" class="btn btn-success">Registrar</button>
      </div>
    </div>
  </form>
  <hr>
</div>