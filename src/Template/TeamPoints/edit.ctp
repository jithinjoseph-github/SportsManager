<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TeamPoint $teamPoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teamPoint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teamPoint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Team Points'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamPoints form large-9 medium-8 columns content">
    <?= $this->Form->create($teamPoint) ?>
    <fieldset>
        <legend><?= __('Edit Team Point') ?></legend>
        <?php
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('match_round_id', ['options' => $matchRounds]);
            echo $this->Form->control('points');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
