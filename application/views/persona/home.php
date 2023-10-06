<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container-sm d-flex justify-content-between mb-3 mt-5">
            <h3>Registro de Personas</h3>
            <button type="button" id="btnCreate" class="btn btn-primary">Agregar</button>
            <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#formCreate" id="btnModal"></button>
        </div>
        <div id="view-personas" class="container-sm mb-5 mt-4"></div>

        <div class="modal fade" id="formCreate" tabindex="-1" aria-labelledby="formCreateLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" id="dialog-content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formCreateLabel">Registrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-create" class="mt-3 d-flex row pl-3 pr-3">
                        <div class="modal-body">
                            <div class="w-100 d-flex flex-col">
                                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50 mr-3" name="nombre" id="nombre" placeholder="Nombres" required>
                                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50" name="apellidop" id="apellidop" placeholder="Apellido Paterno" required>
                            </div>
                            <div class="w-100 d-flex flex-col">
                                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50 mr-3" name="apellidom" id="apellidom" placeholder="Apellido Materno" required>
                                <input type="number" class="form-control pt-4 pb-4 w-50" name="edad" id="edad" placeholder="Edad" required>
                            </div>
                        </div>
                        <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-dialog modal-dialog-centered" id="dialog-content-update"></div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url("assets/js/main.js")  ?>"></script>

</body>

</html>