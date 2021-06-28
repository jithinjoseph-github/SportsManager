<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubsSport $clubsSport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clubsSport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clubsSport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clubs Sports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clubsSports form large-9 medium-8 columns content">
    <?= $this->Form->create($clubsSport) ?>
    <fieldset>
        <legend><?= __('Edit Clubs Sport') ?></legend>
        <?php
            echo $this->Form->control('club_id', ['options' => $clubs]);
            echo $this->Form->control('sport_id', ['options' => $sports]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
