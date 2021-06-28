<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayerPoint $playerPoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $playerPoint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $playerPoint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Player Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playerPoints form large-9 medium-8 columns content">
    <?= $this->Form->create($playerPoint) ?>
    <fieldset>
        <legend><?= __('Edit Player Point') ?></legend>
        <?php
            echo $this->Form->control('player_id', ['options' => $users]);
            echo $this->Form->control('match_round_id', ['options' => $matchRounds]);
            echo $this->Form->control('points');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
