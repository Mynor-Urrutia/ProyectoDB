<?php
      require_once('templates/header.php');
?>
<nav class="collapse bd-links">
      <div class="bd-toc-item">
        <a href="index.php" class="bd-toc-link">Inicio</a>
      </div>
    </nav>
    <main role="main" class="container">
    <div class="ventas">
      <h3 class="cabecera text-center font-weight-bold text-uppercase py-4">Detalle de Venta</h3>
      <form>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputVendedor">Vendedor</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Vendedor 1</option>
              <option>Vendedor 2</option>
              <option>Vendedor 3</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPago">Forma de Pago</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Pago 1</option>
              <option>Pago 2</option>
              <option>Pago 3</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputBancoAc">Banco Acreditado</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Banco 1</option>
              <option>Banco 2</option>
              <option>Banco 3</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputBoleta">No. Boleta</label>
            <input type="number" class="form-control" id="inputBoleta" placeholder="1234567890">
          </div>
          <div class="form-group col-md-6">
            <label for="inputFechaDepo">Fecha del Deposito</label>
            <input type="date" class="form-control" id="inputFechaDepo">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputDeposito">Cantidad Depositada</label>
            <input type="number" class="form-control" id="inputDeposito" placeholder="10.00">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPlataforma">Plataforma de Venta</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Plataforma 1</option>
              <option>Plataforma 2</option>
              <option>Plataforma 3</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputProducto">Producto o Juego</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>Producto 1</option>
              <option>Producto 2</option>
              <option>Producto 3</option>
            </select>
          </div>
        </div>

        <div class="venta">
          <div class="venta-body">
            <div id="table" class="table-editable">
              <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Producto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Mover</th>
                    <th class="text-center">Quitar Fila</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half" contenteditable="true">1</td>
                    <td class="pt-3-half" contenteditable="true">Recarga Free Fire</td>
                    <td class="pt-3-half" contenteditable="true">Q 10.00</td>
                    <td class="pt-3-half" contenteditable="true">Q 10.00</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                      aria-hidden="true"></i></a></span>
                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                      aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                    <span class="table-remove"><button type="button"
                      class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pt-3-half" contenteditable="true">1</td>
                    <td class="pt-3-half" contenteditable="true">Recarga Free Fire</td>
                    <td class="pt-3-half" contenteditable="true">Q 10.00</td>
                    <td class="pt-3-half" contenteditable="true">Q 10.00</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                      aria-hidden="true"></i></a></span>
                    <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                      aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                    <span class="table-remove"><button type="button"
                      class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>          
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Realizar Venta</button>
      </form>
    </div>
    </main>
</body>
</html>