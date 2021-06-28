<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TicketSale[]|\Cake\Collection\CollectionInterface $ticketSales
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket Sale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ticketSales index large-9 medium-8 columns content">
    <h3><?= __('Ticket Sales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buyer_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketSales as $ticketSale): ?>
            <tr>
                <td><?= $this->Number->format($ticketSale->id) ?></td>
                <td><?= $ticketSale->has('match') ? $this->Html->link($ticketSale->match->name, ['controller' => 'Matches', 'action' => 'view', $ticketSale->match->id]) : '' ?></td>
                <td><?= h($ticketSale->buyer_name) ?></td>
                <td><?= $this->Number->format($ticketSale->quantity) ?></td>
                <td><?= $this->Number->format($ticketSale->price) ?></td>
                <td><?= h($ticketSale->created) ?></td>
                <td><?= h($ticketSale->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketSale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketSale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketSale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketSale->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
