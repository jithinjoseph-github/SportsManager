<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoachesTeam $coachesTeam
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coaches Team'), ['action' => 'edit', $coachesTeam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coaches Team'), ['action' => 'delete', $coachesTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coachesTeam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coaches Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coaches Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coachesTeams view large-9 medium-8 columns content">
    <h3><?= h($coachesTeam->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $coachesTeam->has('user') ? $this->Html->link($coachesTeam->user->name, ['controller' => 'Users', 'action' => 'view', $coachesTeam->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $coachesTeam->has('team') ? $this->Html->link($coachesTeam->team->name, ['controller' => 'Teams', 'action' => 'view', $coachesTeam->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coachesTeam->id) ?></td>
        </tr>
    </table>
</div>
