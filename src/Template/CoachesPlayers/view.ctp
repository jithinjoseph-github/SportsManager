<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoachesPlayer $coachesPlayer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coaches Player'), ['action' => 'edit', $coachesPlayer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coaches Player'), ['action' => 'delete', $coachesPlayer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coachesPlayer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coaches Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coaches Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coachesPlayers view large-9 medium-8 columns content">
    <h3><?= h($coachesPlayer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $coachesPlayer->has('user') ? $this->Html->link($coachesPlayer->user->name, ['controller' => 'Users', 'action' => 'view', $coachesPlayer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coachesPlayer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach Id') ?></th>
            <td><?= $this->Number->format($coachesPlayer->coach_id) ?></td>
        </tr>
    </table>
</div>
