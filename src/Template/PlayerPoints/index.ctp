<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayerPoint[]|\Cake\Collection\CollectionInterface $playerPoints
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player Point'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playerPoints index large-9 medium-8 columns content">
    <h3><?= __('Player Points') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_round_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('points') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playerPoints as $playerPoint): ?>
            <tr>
                <td><?= $this->Number->format($playerPoint->id) ?></td>
                <td><?= $playerPoint->has('user') ? $this->Html->link($playerPoint->user->name, ['controller' => 'Users', 'action' => 'view', $playerPoint->user->id]) : '' ?></td>
                <td><?= $playerPoint->has('match_round') ? $this->Html->link($playerPoint->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $playerPoint->match_round->id]) : '' ?></td>
                <td><?= $this->Number->format($playerPoint->points) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playerPoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playerPoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playerPoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playerPoint->id)]) ?>
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
