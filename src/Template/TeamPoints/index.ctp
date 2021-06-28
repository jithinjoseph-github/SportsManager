<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TeamPoint[]|\Cake\Collection\CollectionInterface $teamPoints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Team Point'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamPoints index large-9 medium-8 columns content">
    <h3><?= __('Team Points') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_round_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('points') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamPoints as $teamPoint): ?>
            <tr>
                <td><?= $this->Number->format($teamPoint->id) ?></td>
                <td><?= $teamPoint->has('team') ? $this->Html->link($teamPoint->team->name, ['controller' => 'Teams', 'action' => 'view', $teamPoint->team->id]) : '' ?></td>
                <td><?= $teamPoint->has('match_round') ? $this->Html->link($teamPoint->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $teamPoint->match_round->id]) : '' ?></td>
                <td><?= $this->Number->format($teamPoint->points) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamPoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamPoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamPoint->id)]) ?>
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
