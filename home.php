<?php 
require_once('include/session.php'); 
$home_menu=1;
?>

<!DOCTYPE html>
<html lang="es">
<style>
 .col{
    width: 100%;
    padding-bottom: 50%;
 }
</style>

<head>
    <link rel="shortcut icon" href="logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio | Sistema Santa Rosa</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('navbar.php');?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bienvenid@ <small>Administrador</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Inicio
                            </li>
                        </ol>
                    </div>

                    <div class="col"><h3><small>Este es un sevidor que contiene un sistema de inventario farmacéutico oficial de la farmacia Santa Rosa. Desarrollado por: Danner Palacios & üTemark | Company.<small></h3></div>
               

</body>

</html>
