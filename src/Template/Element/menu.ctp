<nav class="navbar navbar-inverse">
  <div class="container-fluid">

 <div class="navbar-header">
       <?= $this->Html->link('APP',['controller' => 'Users','action'=>'index'],['class'=>'navbar-brand'])?>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><?= $this->Html->link('Home' ,['controller' => 'Users', 'action' =>'index'])?></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
            <?= $this->Html->link('Listar Usuarios' ,['controller' => 'Users', 'action' =>'index'])?>
            </li>
            <li>
             <?= $this->Html->link('Nuevo Usuario' ,['controller' => 'Users', 'action' =>'add'])?>
            </li>
            
          </ul>
        </li>
        <li><a href="#">Pagos</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?= $this->Html->link('Logout', ['controller' =>'Users', 'action' => 'logout'])?></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>