<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayerPoint $playerPoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player Point'), ['action' => 'edit', $playerPoint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player Point'), ['action' => 'delete', $playerPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playerPoint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Player Points'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player Point'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playerPoints view large-9 medium-8 columns content">
    <h3><?= h($playerPoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $playerPoint->has('user') ? $this->Html->link($playerPoint->user->name, ['controller' => 'Users', 'action' => 'view', $playerPoint->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Round') ?></th>
            <td><?= $playerPoint->has('match_round') ? $this->Html->link($playerPoint->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $playerPoint->match_round->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playerPoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Points') ?></th>
            <td><?= $this->Number->format($playerPoint->points) ?></td>
        </tr>
    </table>
</div>
