<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingSchedule $trainingSchedule
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trainingSchedule->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trainingSchedule->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trainingSchedules form large-9 medium-8 columns content">
    <?= $this->Form->create($trainingSchedule) ?>
    <fieldset>
        <legend><?= __('Edit Training Schedule') ?></legend>
        <?php
            echo $this->Form->control('coach_id');
            echo $this->Form->control('sport_id', ['options' => $sports]);
            echo $this->Form->control('player_id', ['options' => $users]);
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('date_from');
            echo $this->Form->control('date_to');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
