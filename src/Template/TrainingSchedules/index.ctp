<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrainingSchedule[]|\Cake\Collection\CollectionInterface $trainingSchedules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trainingSchedules index large-9 medium-8 columns content">
    <h3><?= __('Training Schedules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sport_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_to') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trainingSchedules as $trainingSchedule): ?>
            <tr>
                <td><?= $this->Number->format($trainingSchedule->id) ?></td>
                <td><?= $this->Number->format($trainingSchedule->coach_id) ?></td>
                <td><?= $trainingSchedule->has('sport') ? $this->Html->link($trainingSchedule->sport->name, ['controller' => 'Sports', 'action' => 'view', $trainingSchedule->sport->id]) : '' ?></td>
                <td><?= $trainingSchedule->has('user') ? $this->Html->link($trainingSchedule->user->name, ['controller' => 'Users', 'action' => 'view', $trainingSchedule->user->id]) : '' ?></td>
                <td><?= $trainingSchedule->has('team') ? $this->Html->link($trainingSchedule->team->name, ['controller' => 'Teams', 'action' => 'view', $trainingSchedule->team->id]) : '' ?></td>
                <td><?= h($trainingSchedule->date_from) ?></td>
                <td><?= h($trainingSchedule->date_to) ?></td>
                <td><?= h($trainingSchedule->created) ?></td>
                <td><?= h($trainingSchedule->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trainingSchedule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainingSchedule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainingSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingSchedule->id)]) ?>
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
