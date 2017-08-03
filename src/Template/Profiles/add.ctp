<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profiles form large-9 medium-8 columns content">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Add Profile') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('profile_photo');
            echo $this->Form->control('cover_photo');
            echo $this->Form->control('position');
            echo $this->Form->control('experience');
            echo $this->Form->control('total_project');
            echo $this->Form->control('profit');
            echo $this->Form->control('about_us');
            echo $this->Form->control('current_project');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
