<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['controller' => 'MatcheApplications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matche Application'), ['controller' => 'MatcheApplications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Sales'), ['controller' => 'TicketSales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Sale'), ['controller' => 'TicketSales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matches form large-9 medium-8 columns content">
    <?= $this->Form->create($match) ?>
    <fieldset>
        <legend><?= __('Add Match') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('venue');
            echo $this->Form->control('sport_id', ['options' => $sports]);
            echo $this->Form->control('date_from');
            echo $this->Form->control('date_to');
            echo $this->Form->control('apply_from');
            echo $this->Form->control('apply_to');
            echo $this->Form->control('match_type');
            echo $this->Form->control('organizer_id', ['options' => $users]);
            echo $this->Form->control('ticket_price');
            echo $this->Form->control('total_tickets');
            echo $this->Form->control('sold_tickets');
            echo $this->Form->control('match_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
