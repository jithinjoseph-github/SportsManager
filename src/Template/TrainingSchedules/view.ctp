<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingSchedule $trainingSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Training Schedule'), ['action' => 'edit', $trainingSchedule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Training Schedule'), ['action' => 'delete', $trainingSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingSchedule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trainingSchedules view large-9 medium-8 columns content">
    <h3><?= h($trainingSchedule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sport') ?></th>
            <td><?= $trainingSchedule->has('sport') ? $this->Html->link($trainingSchedule->sport->name, ['controller' => 'Sports', 'action' => 'view', $trainingSchedule->sport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $trainingSchedule->has('user') ? $this->Html->link($trainingSchedule->user->name, ['controller' => 'Users', 'action' => 'view', $trainingSchedule->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $trainingSchedule->has('team') ? $this->Html->link($trainingSchedule->team->name, ['controller' => 'Teams', 'action' => 'view', $trainingSchedule->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trainingSchedule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach Id') ?></th>
            <td><?= $this->Number->format($trainingSchedule->coach_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From') ?></th>
            <td><?= h($trainingSchedule->date_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To') ?></th>
            <td><?= h($trainingSchedule->date_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($trainingSchedule->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($trainingSchedule->modified) ?></td>
        </tr>
    </table>
</div>
