<div class="row">
    <div class="col-md-6 col-md-offset-3">

<div class="page-header">
    <h2>Crear Usuario</h2>
</div>
<?= $this->Form->create($user) ?>
   
    
    <fieldset>
        <?php
            echo $this->Form->control('first_name',['label' => 'Nombre']);
            echo $this->Form->control('last_name', ['label' => 'Apellido']);
            echo $this->Form->control('gender', ['options' =>['M' => 'Masculino', 'F' => 'Femenino']], ['label' => 'Genero']);
            echo $this->Form->control('birthdate',['label' => 'Fecha de Nacimiento']);
            echo $this->Form->control('email', ['label' => 'Correo Electronico']);
            echo $this->Form->control('phone', ['label' => 'Telefono']);
            echo $this->Form->control('nickname' , ['label' => 'Nickname']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->control('role', ['options' =>['admin' =>'Administrador', 'user' => 'Usuario', 'coach' =>' Entrenador']], ['label' => 'Rol']);
            echo $this->Form->control('active', ['label' => 'Activo']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Crear'),['class'=>'btn btn-small btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
  </div>