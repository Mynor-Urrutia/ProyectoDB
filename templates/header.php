<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- JS, Popper.js, and jQuery -->
    <script src="/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar " id="navbar-p">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/Logo_CU.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Comercial Urrutia
        </a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="ventas.php">Ventas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reportes</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Consulta de Venta</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Reporte de Ventas Diarias</a>
              <a class="dropdown-item" href="#">Reporte de Ventas Mensual</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Cierre del dia</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Registro de Empleado</a>
              <a class="dropdown-item" href="#">Creación de Puestos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="pventas.php">Plataformas de Ventas</a>
              <a class="dropdown-item" href="bancos.php">Registro de Bancos</a>              
              <a class="dropdown-item" href="mpagos.php">Metodos de Pago</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inventario</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Registro de Proveedores</a>
              <a class="dropdown-item" href="#">Registro de Productos</a>              
              <a class="dropdown-item" href="#">Registro de Categorias</a>
              <a class="dropdown-item" href="#">Salida de Productos</a>
              <a class="dropdown-item" href="#">Merma de Productos y Articulos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Registro de Activos</a>
              <a class="dropdown-item" href="#">Reporte de Activos</a>
            </div>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="#">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cerrar Sesión</a>
          </li>
        </ul>
    </nav>