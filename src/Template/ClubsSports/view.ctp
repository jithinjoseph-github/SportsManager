<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubsSport $clubsSport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clubs Sport'), ['action' => 'edit', $clubsSport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clubs Sport'), ['action' => 'delete', $clubsSport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubsSport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clubs Sports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clubs Sport'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clubsSports view large-9 medium-8 columns content">
    <h3><?= h($clubsSport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Club') ?></th>
            <td><?= $clubsSport->has('club') ? $this->Html->link($clubsSport->club->name, ['controller' => 'Clubs', 'action' => 'view', $clubsSport->club->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sport') ?></th>
            <td><?= $clubsSport->has('sport') ? $this->Html->link($clubsSport->sport->name, ['controller' => 'Sports', 'action' => 'view', $clubsSport->sport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clubsSport->id) ?></td>
        </tr>
    </table>
</div>
