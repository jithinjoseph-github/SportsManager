<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TeamPoint $teamPoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team Point'), ['action' => 'edit', $teamPoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team Point'), ['action' => 'delete', $teamPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamPoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Team Points'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Point'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamPoints view large-9 medium-8 columns content">
    <h3><?= h($teamPoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $teamPoint->has('team') ? $this->Html->link($teamPoint->team->name, ['controller' => 'Teams', 'action' => 'view', $teamPoint->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Round') ?></th>
            <td><?= $teamPoint->has('match_round') ? $this->Html->link($teamPoint->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $teamPoint->match_round->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamPoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Points') ?></th>
            <td><?= $this->Number->format($teamPoint->points) ?></td>
        </tr>
    </table>
</div>
