<?php
      require_once('templates/header.php');
?>

<main role="main" class="container">
    <div class="bancos">
        <h3>Sistema de Registro - Plataformas de Ventas</h3>
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
    </div>
    <div class="text-center">
        <table class="table table-striped table-bordered">
        <caption>Listado de plataformas de ventas autorizados</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plataforma</th>
                    <th scope="col">Community Manager</th>
                    <th  colspan="2">Modificar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Facebook</td>
                    <td>Mario Hernandez</td>
                    <td><button type="submit" class="btn btn-warning">Modificar</button></td>
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
