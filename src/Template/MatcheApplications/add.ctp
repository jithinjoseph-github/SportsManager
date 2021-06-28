<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatcheApplication $matcheApplication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matcheApplications form large-9 medium-8 columns content">
    <?= $this->Form->create($matcheApplication) ?>
    <fieldset>
        <legend><?= __('Add Matche Application') ?></legend>
        <?php
            echo $this->Form->control('match_id', ['options' => $matches]);
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('player_id', ['options' => $users]);
            echo $this->Form->control('application_status');
            echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
