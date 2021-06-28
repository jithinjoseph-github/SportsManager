<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRoundMatch $matchRoundMatch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match Round Match'), ['action' => 'edit', $matchRoundMatch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match Round Match'), ['action' => 'delete', $matchRoundMatch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRoundMatch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Match Round Matches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round Match'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matchRoundMatches view large-9 medium-8 columns content">
    <h3><?= h($matchRoundMatch->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Match Round') ?></th>
            <td><?= $matchRoundMatch->has('match_round') ? $this->Html->link($matchRoundMatch->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $matchRoundMatch->match_round->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player1') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->player1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player2') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->player2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team1') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->team1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team2') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->team2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Winner') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->winner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Status') ?></th>
            <td><?= $this->Number->format($matchRoundMatch->match_status) ?></td>
        </tr>
    </table>
</div>
