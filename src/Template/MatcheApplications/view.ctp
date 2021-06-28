<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatcheApplication $matcheApplication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Matche Application'), ['action' => 'edit', $matcheApplication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matche Application'), ['action' => 'delete', $matcheApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matcheApplication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matche Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matcheApplications view large-9 medium-8 columns content">
    <h3><?= h($matcheApplication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Match') ?></th>
            <td><?= $matcheApplication->has('match') ? $this->Html->link($matcheApplication->match->name, ['controller' => 'Matches', 'action' => 'view', $matcheApplication->match->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $matcheApplication->has('team') ? $this->Html->link($matcheApplication->team->name, ['controller' => 'Teams', 'action' => 'view', $matcheApplication->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $matcheApplication->has('user') ? $this->Html->link($matcheApplication->user->name, ['controller' => 'Users', 'action' => 'view', $matcheApplication->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($matcheApplication->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($matcheApplication->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application Status') ?></th>
            <td><?= $this->Number->format($matcheApplication->application_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($matcheApplication->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($matcheApplication->modified) ?></td>
        </tr>
    </table>
</div>
