<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoachesTeam[]|\Cake\Collection\CollectionInterface $coachesTeams
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coaches Team'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coachesTeams index large-9 medium-8 columns content">
    <h3><?= __('Coaches Teams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coachesTeams as $coachesTeam): ?>
            <tr>
                <td><?= $this->Number->format($coachesTeam->id) ?></td>
                <td><?= $coachesTeam->has('user') ? $this->Html->link($coachesTeam->user->name, ['controller' => 'Users', 'action' => 'view', $coachesTeam->user->id]) : '' ?></td>
                <td><?= $coachesTeam->has('team') ? $this->Html->link($coachesTeam->team->name, ['controller' => 'Teams', 'action' => 'view', $coachesTeam->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coachesTeam->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coachesTeam->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coachesTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coachesTeam->id)]) ?>
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
