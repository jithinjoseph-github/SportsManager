<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MatchRound $matchRound
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match Round'), ['action' => 'edit', $matchRound->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match Round'), ['action' => 'delete', $matchRound->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRound->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Match Round Matches'), ['controller' => 'MatchRoundMatches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round Match'), ['controller' => 'MatchRoundMatches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Player Points'), ['controller' => 'PlayerPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player Point'), ['controller' => 'PlayerPoints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Points'), ['controller' => 'TeamPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Point'), ['controller' => 'TeamPoints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matchRounds view large-9 medium-8 columns content">
    <h3><?= h($matchRound->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($matchRound->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match') ?></th>
            <td><?= $matchRound->has('match') ? $this->Html->link($matchRound->match->name, ['controller' => 'Matches', 'action' => 'view', $matchRound->match->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($matchRound->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($matchRound->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($matchRound->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Match Round Matches') ?></h4>
        <?php if (!empty($matchRound->match_round_matches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Match Round Id') ?></th>
                <th scope="col"><?= __('Player1') ?></th>
                <th scope="col"><?= __('Player2') ?></th>
                <th scope="col"><?= __('Team1') ?></th>
                <th scope="col"><?= __('Team2') ?></th>
                <th scope="col"><?= __('Winner') ?></th>
                <th scope="col"><?= __('Match Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($matchRound->match_round_matches as $matchRoundMatches): ?>
            <tr>
                <td><?= h($matchRoundMatches->id) ?></td>
                <td><?= h($matchRoundMatches->match_round_id) ?></td>
                <td><?= h($matchRoundMatches->player1) ?></td>
                <td><?= h($matchRoundMatches->player2) ?></td>
                <td><?= h($matchRoundMatches->team1) ?></td>
                <td><?= h($matchRoundMatches->team2) ?></td>
                <td><?= h($matchRoundMatches->winner) ?></td>
                <td><?= h($matchRoundMatches->match_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MatchRoundMatches', 'action' => 'view', $matchRoundMatches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MatchRoundMatches', 'action' => 'edit', $matchRoundMatches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MatchRoundMatches', 'action' => 'delete', $matchRoundMatches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRoundMatches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Player Points') ?></h4>
        <?php if (!empty($matchRound->player_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Match Round Id') ?></th>
                <th scope="col"><?= __('Points') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($matchRound->player_points as $playerPoints): ?>
            <tr>
                <td><?= h($playerPoints->id) ?></td>
                <td><?= h($playerPoints->player_id) ?></td>
                <td><?= h($playerPoints->match_round_id) ?></td>
                <td><?= h($playerPoints->points) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PlayerPoints', 'action' => 'view', $playerPoints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PlayerPoints', 'action' => 'edit', $playerPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlayerPoints', 'action' => 'delete', $playerPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playerPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Team Points') ?></h4>
        <?php if (!empty($matchRound->team_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Match Round Id') ?></th>
                <th scope="col"><?= __('Points') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($matchRound->team_points as $teamPoints): ?>
            <tr>
                <td><?= h($teamPoints->id) ?></td>
                <td><?= h($teamPoints->team_id) ?></td>
                <td><?= h($teamPoints->match_round_id) ?></td>
                <td><?= h($teamPoints->points) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TeamPoints', 'action' => 'view', $teamPoints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TeamPoints', 'action' => 'edit', $teamPoints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamPoints', 'action' => 'delete', $teamPoints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamPoints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
