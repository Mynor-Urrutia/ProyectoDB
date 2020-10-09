<?php
      require_once('templates/header.php');
?>

<main role="main" class="container">
    <div class="bancos">
        <h3>Sistema de Registro - Bancos</h3>
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
    </div>
    <div class="text-center">
        <table class="table table-striped table-bordered">
        <caption>Listado de bancos registrados en el sistema</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Banco</th>
                    <th scope="col">No. Cuenta</th>
                    <th scope="col">Nombre Cuenta</th>
                    <th  colspan="2">Modificar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Banrural</td>
                    <td>1234567890</td>
                    <td>Mario Hernandez</td>
                    <td><button type="submit" class="btn btn-warning">Modificar</button></td>
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>