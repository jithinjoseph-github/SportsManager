<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sport $sport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['controller' => 'TrainingSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['controller' => 'TrainingSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sports form large-9 medium-8 columns content">
    <?= $this->Form->create($sport) ?>
    <fieldset>
        <legend><?= __('Edit Sport') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('clubs._ids', ['options' => $clubs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
