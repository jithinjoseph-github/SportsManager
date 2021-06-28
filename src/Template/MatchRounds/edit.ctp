<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRound $matchRound
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $matchRound->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $matchRound->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Round Matches'), ['controller' => 'MatchRoundMatches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round Match'), ['controller' => 'MatchRoundMatches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Player Points'), ['controller' => 'PlayerPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player Point'), ['controller' => 'PlayerPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Points'), ['controller' => 'TeamPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Point'), ['controller' => 'TeamPoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matchRounds form large-9 medium-8 columns content">
    <?= $this->Form->create($matchRound) ?>
    <fieldset>
        <legend><?= __('Edit Match Round') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('match_id', ['options' => $matches]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
