<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoachesPlayer[]|\Cake\Collection\CollectionInterface $coachesPlayers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coaches Player'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coachesPlayers index large-9 medium-8 columns content">
    <h3><?= __('Coaches Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coachesPlayers as $coachesPlayer): ?>
            <tr>
                <td><?= $this->Number->format($coachesPlayer->id) ?></td>
                <td><?= $this->Number->format($coachesPlayer->coach_id) ?></td>
                <td><?= $coachesPlayer->has('user') ? $this->Html->link($coachesPlayer->user->name, ['controller' => 'Users', 'action' => 'view', $coachesPlayer->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coachesPlayer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coachesPlayer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coachesPlayer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coachesPlayer->id)]) ?>
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
