<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Login Log'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="loginLog form large-9 medium-8 columns content">
    <?= $this->Form->create($loginLog) ?>
    <fieldset>
        <legend><?= __('Add Login Log') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('datetime');
            echo $this->Form->control('ipaddress');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
