<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\LoginLog $loginLog
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Login Log'), ['action' => 'edit', $loginLog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Login Log'), ['action' => 'delete', $loginLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $loginLog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Login Log'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login Log'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loginLog view large-9 medium-8 columns content">
    <h3><?= h($loginLog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($loginLog->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ipaddress') ?></th>
            <td><?= h($loginLog->ipaddress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($loginLog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($loginLog->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datetime') ?></th>
            <td><?= h($loginLog->datetime) ?></td>
        </tr>
    </table>
</div>
