<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClubsSport[]|\Cake\Collection\CollectionInterface $clubsSports
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Clubs Sport'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clubsSports index large-9 medium-8 columns content">
    <h3><?= __('Clubs Sports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sport_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clubsSports as $clubsSport): ?>
            <tr>
                <td><?= $this->Number->format($clubsSport->id) ?></td>
                <td><?= $clubsSport->has('club') ? $this->Html->link($clubsSport->club->name, ['controller' => 'Clubs', 'action' => 'view', $clubsSport->club->id]) : '' ?></td>
                <td><?= $clubsSport->has('sport') ? $this->Html->link($clubsSport->sport->name, ['controller' => 'Sports', 'action' => 'view', $clubsSport->sport->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clubsSport->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clubsSport->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clubsSport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubsSport->id)]) ?>
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
