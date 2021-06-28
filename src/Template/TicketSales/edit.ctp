<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TicketSale $ticketSale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketSale->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketSale->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticket Sales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ticketSales form large-9 medium-8 columns content">
    <?= $this->Form->create($ticketSale) ?>
    <fieldset>
        <legend><?= __('Edit Ticket Sale') ?></legend>
        <?php
            echo $this->Form->control('match_id', ['options' => $matches]);
            echo $this->Form->control('buyer_name');
            echo $this->Form->control('quantity');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
