<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Measuremet'), ['controller' => 'Measuremet', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Measuremet'), ['controller' => 'Measuremet', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payment'), ['controller' => 'Payment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('gender', ['options' =>['M' => 'Masculino', 'F' => 'Femenino']]);
            echo $this->Form->control('birthdate');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('nickname');
            echo $this->Form->control('password');
            echo $this->Form->control('role', ['options' =>['admin' =>'Administrador', 'user' => 'Usuario', 'coach' =>' Entrenador']]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
