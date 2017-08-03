<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Profile $profile
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profiles view large-9 medium-8 columns content">
    <h3><?= h($profile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $profile->has('user') ? $this->Html->link($profile->user->name, ['controller' => 'Users', 'action' => 'view', $profile->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($profile->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Experience') ?></th>
            <td><?= h($profile->experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Project') ?></th>
            <td><?= h($profile->current_project) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Project') ?></th>
            <td><?= $this->Number->format($profile->total_project) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profit') ?></th>
            <td><?= $this->Number->format($profile->profit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($profile->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Profile Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($profile->profile_photo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cover Photo') ?></h4>
        <?= $this->Text->autoParagraph(h($profile->cover_photo)); ?>
    </div>
    <div class="row">
        <h4><?= __('About Us') ?></h4>
        <?= $this->Text->autoParagraph(h($profile->about_us)); ?>
    </div>
</div>
