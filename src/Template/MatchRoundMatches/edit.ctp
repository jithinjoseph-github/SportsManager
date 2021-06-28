<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRoundMatch $matchRoundMatch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $matchRoundMatch->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $matchRoundMatch->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Match Round Matches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matchRoundMatches form large-9 medium-8 columns content">
    <?= $this->Form->create($matchRoundMatch) ?>
    <fieldset>
        <legend><?= __('Edit Match Round Match') ?></legend>
        <?php
            echo $this->Form->control('match_round_id', ['options' => $matchRounds]);
            echo $this->Form->control('player1');
            echo $this->Form->control('player2');
            echo $this->Form->control('team1');
            echo $this->Form->control('team2');
            echo $this->Form->control('winner');
            echo $this->Form->control('match_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
