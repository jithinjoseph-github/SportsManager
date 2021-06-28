<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatcheApplication[]|\Cake\Collection\CollectionInterface $matcheApplications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Matche Application'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matcheApplications index large-9 medium-8 columns content">
    <h3><?= __('Matche Applications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matcheApplications as $matcheApplication): ?>
            <tr>
                <td><?= $this->Number->format($matcheApplication->id) ?></td>
                <td><?= $matcheApplication->has('match') ? $this->Html->link($matcheApplication->match->name, ['controller' => 'Matches', 'action' => 'view', $matcheApplication->match->id]) : '' ?></td>
                <td><?= $matcheApplication->has('team') ? $this->Html->link($matcheApplication->team->name, ['controller' => 'Teams', 'action' => 'view', $matcheApplication->team->id]) : '' ?></td>
                <td><?= $matcheApplication->has('user') ? $this->Html->link($matcheApplication->user->name, ['controller' => 'Users', 'action' => 'view', $matcheApplication->user->id]) : '' ?></td>
                <td><?= $this->Number->format($matcheApplication->application_status) ?></td>
                <td><?= h($matcheApplication->notes) ?></td>
                <td><?= h($matcheApplication->created) ?></td>
                <td><?= h($matcheApplication->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matcheApplication->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matcheApplication->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matcheApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matcheApplication->id)]) ?>
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
