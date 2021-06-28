<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRound[]|\Cake\Collection\CollectionInterface $matchRounds
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Round Matches'), ['controller' => 'MatchRoundMatches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round Match'), ['controller' => 'MatchRoundMatches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Player Points'), ['controller' => 'PlayerPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player Point'), ['controller' => 'PlayerPoints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Team Points'), ['controller' => 'TeamPoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team Point'), ['controller' => 'TeamPoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matchRounds index large-9 medium-8 columns content">
    <h3><?= __('Match Rounds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matchRounds as $matchRound): ?>
            <tr>
                <td><?= $this->Number->format($matchRound->id) ?></td>
                <td><?= h($matchRound->name) ?></td>
                <td><?= $matchRound->has('match') ? $this->Html->link($matchRound->match->name, ['controller' => 'Matches', 'action' => 'view', $matchRound->match->id]) : '' ?></td>
                <td><?= h($matchRound->created) ?></td>
                <td><?= h($matchRound->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matchRound->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matchRound->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matchRound->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRound->id)]) ?>
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
