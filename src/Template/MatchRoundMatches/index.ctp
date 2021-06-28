<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRoundMatch[]|\Cake\Collection\CollectionInterface $matchRoundMatches
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Match Round Match'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matchRoundMatches index large-9 medium-8 columns content">
    <h3><?= __('Match Round Matches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_round_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('winner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('match_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matchRoundMatches as $matchRoundMatch): ?>
            <tr>
                <td><?= $this->Number->format($matchRoundMatch->id) ?></td>
                <td><?= $matchRoundMatch->has('match_round') ? $this->Html->link($matchRoundMatch->match_round->name, ['controller' => 'MatchRounds', 'action' => 'view', $matchRoundMatch->match_round->id]) : '' ?></td>
                <td><?= $this->Number->format($matchRoundMatch->player1) ?></td>
                <td><?= $this->Number->format($matchRoundMatch->player2) ?></td>
                <td><?= $this->Number->format($matchRoundMatch->team1) ?></td>
                <td><?= $this->Number->format($matchRoundMatch->team2) ?></td>
                <td><?= $this->Number->format($matchRoundMatch->winner) ?></td>
                <td><?= $this->Number->format($matchRoundMatch->match_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matchRoundMatch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matchRoundMatch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matchRoundMatch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRoundMatch->id)]) ?>
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
