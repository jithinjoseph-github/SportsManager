<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoachesPlayer $coachesPlayer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coachesPlayer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coachesPlayer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coaches Players'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coachesPlayers form large-9 medium-8 columns content">
    <?= $this->Form->create($coachesPlayer) ?>
    <fieldset>
        <legend><?= __('Edit Coaches Player') ?></legend>
        <?php
            echo $this->Form->control('coach_id');
            echo $this->Form->control('player_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
