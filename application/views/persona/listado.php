<table class="table" id="myTable">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $item = 1;
        foreach ($personas as $per) { ?>
            <tr id="item<?= $per->id ?>">
                <th scope="row"><?= $item ?></th>
                <td><?= $per->nombre ?></td>
                <td><?= $per->apellido_paterno ?></td>
                <td><?= $per->apellido_materno ?></td>
                <td><?= $per->edad ?></td>
                <td class="">
                    <button class="btn btn-outline-warning" onclick="viewFormUpate(<?= $per->id ?>)">Editar</button>
                    <button class="btn btn-outline-danger" onclick="deletePerson(<?= $per->id ?>)">Eliminar</button>
                </td>
            </tr>
        <?php
            $item++;
        } ?>
    </tbody>
</table>