<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="formCreateLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form id="form-update" class="mt-3 d-flex row pl-3 pr-3">
        <div class="modal-body">
            <div class="w-100 d-flex flex-col">
                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50 mr-3" name="nombreupdate" id="nombreupdate" placeholder="Nombres" value="<?= $persona->nombre ?>" required>
                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50" name="apellidopupdate" id="apellidopupdate" placeholder="Apellido Paterno" value="<?= $persona->apellido_paterno ?>" required>
            </div>
            <div class="w-100 d-flex flex-col">
                <input type="text" class="form-control mb-3 pt-4 pb-4 w-50 mr-3" name="apellidomupdate" id="apellidomupdate" placeholder="Apellido Materno" value="<?= $persona->apellido_materno ?>" required>
                <input type="number" class="form-control pt-4 pb-4 w-50" name="edadupdate" id="edadupdate" placeholder="Edad" required value="<?= $persona->edad ?>">
            </div>
        </div>
        <div class="modal-footer w-100">
            <input type="hidden" name="idpersona" id="idpersona" value="<?= $persona->id ?>">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>