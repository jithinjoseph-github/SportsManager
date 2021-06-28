<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TicketSale $ticketSale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticket Sale'), ['action' => 'edit', $ticketSale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticket Sale'), ['action' => 'delete', $ticketSale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketSale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Sales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Sale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ticketSales view large-9 medium-8 columns content">
    <h3><?= h($ticketSale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Match') ?></th>
            <td><?= $ticketSale->has('match') ? $this->Html->link($ticketSale->match->name, ['controller' => 'Matches', 'action' => 'view', $ticketSale->match->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buyer Name') ?></th>
            <td><?= h($ticketSale->buyer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketSale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($ticketSale->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($ticketSale->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticketSale->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ticketSale->modified) ?></td>
        </tr>
    </table>
</div>
