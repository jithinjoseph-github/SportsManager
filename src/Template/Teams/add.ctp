<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coaches Teams'), ['controller' => 'CoachesTeams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coaches Team'), ['controller' => 'CoachesTeams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['controller' => 'MatcheApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matche Application'), ['controller' => 'MatcheApplications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Points'), ['controller' => 'TeamPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Point'), ['controller' => 'TeamPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['controller' => 'TrainingSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['controller' => 'TrainingSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Add Team') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('club_id', ['options' => $clubs]);
            echo $this->Form->control('sport_id', ['options' => $sports]);
            echo $this->Form->control('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
