<h1 class="page-header">Alumnos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Teacher&a=Crud">Nuevo Teacher</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">ID</th>
            <th style="width:180px;">Nombres</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th style="width:120px;">Edad</th>
            <th style="width:120px;">Dpi</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id;?></td>
            <td><?php echo $r->nombres; ?></td>
            <td><?php echo $r->apellidos; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->edad ?></td>
            <td><?php echo $r->dpi ?></td>
            <td>
                <a href="?c=Teacher&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Teacher&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
