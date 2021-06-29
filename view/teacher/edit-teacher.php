<h1 class="page-header">
    <?php echo $tea->id != null ? $tea->nombres : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Teacher">Profesor</a></li>
  <li class="active"><?php echo $tea->id != null ? $tea->nombres : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-teacher" action="?c=Teacher&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $tea->id; ?>" />
    
    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombre" value="<?php echo $tea->nombres; ?>" class="form-control" placeholder="Ingrese sus nombres" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apellido" value="<?php echo $tea->apellidos; ?>" class="form-control" placeholder="Ingrese sus apellidos" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $tea->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Edad</label>
        <input  type="text" name="edad" value="<?php echo $tea->edad; ?>" class="form-control" placeholder="Ingrese su edad" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Dpi</label>
        <input  type="text" name="dpi" value="<?php echo $tea->dpi; ?>" class="form-control" placeholder="Ingrese su dpi" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-teacher").submit(function(){
            return $(this).validate();
        });
    })
</script>