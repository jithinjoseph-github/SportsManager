<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match[]|\Cake\Collection\CollectionInterface $matches
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?></li>
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
<div class="matches index large-9 medium-8 columns content">
    <h3><?= __('Matches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sport_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apply_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apply_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('organizer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_tickets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sold_tickets') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matches as $match): ?>
            <tr>
                <td><?= $this->Number->format($match->id) ?></td>
                <td><?= h($match->name) ?></td>
                <td><?= h($match->venue) ?></td>
                <td><?= $match->has('sport') ? $this->Html->link($match->sport->name, ['controller' => 'Sports', 'action' => 'view', $match->sport->id]) : '' ?></td>
                <td><?= h($match->date_from) ?></td>
                <td><?= h($match->date_to) ?></td>
                <td><?= h($match->apply_from) ?></td>
                <td><?= h($match->apply_to) ?></td>
                <td><?= $this->Number->format($match->match_type) ?></td>
                <td><?= $match->has('user') ? $this->Html->link($match->user->name, ['controller' => 'Users', 'action' => 'view', $match->user->id]) : '' ?></td>
                <td><?= $this->Number->format($match->ticket_price) ?></td>
                <td><?= $this->Number->format($match->total_tickets) ?></td>
                <td><?= $this->Number->format($match->sold_tickets) ?></td>
                <td><?= $this->Number->format($match->match_status) ?></td>
                <td><?= h($match->created) ?></td>
                <td><?= h($match->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $match->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $match->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?>
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
