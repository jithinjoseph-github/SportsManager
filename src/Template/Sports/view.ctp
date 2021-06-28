<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sport $sport
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sport'), ['action' => 'edit', $sport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sport'), ['action' => 'delete', $sport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['controller' => 'Matches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['controller' => 'TrainingSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['controller' => 'TrainingSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sports view large-9 medium-8 columns content">
    <h3><?= h($sport->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sport->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sport->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sport->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sport->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clubs') ?></h4>
        <?php if (!empty($sport->clubs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sport->clubs as $clubs): ?>
            <tr>
                <td><?= h($clubs->id) ?></td>
                <td><?= h($clubs->name) ?></td>
                <td><?= h($clubs->created) ?></td>
                <td><?= h($clubs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clubs', 'action' => 'view', $clubs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clubs', 'action' => 'edit', $clubs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clubs', 'action' => 'delete', $clubs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clubs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Matches') ?></h4>
        <?php if (!empty($sport->matches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Venue') ?></th>
                <th scope="col"><?= __('Sport Id') ?></th>
                <th scope="col"><?= __('Date From') ?></th>
                <th scope="col"><?= __('Date To') ?></th>
                <th scope="col"><?= __('Apply From') ?></th>
                <th scope="col"><?= __('Apply To') ?></th>
                <th scope="col"><?= __('Match Type') ?></th>
                <th scope="col"><?= __('Organizer Id') ?></th>
                <th scope="col"><?= __('Ticket Price') ?></th>
                <th scope="col"><?= __('Total Tickets') ?></th>
                <th scope="col"><?= __('Sold Tickets') ?></th>
                <th scope="col"><?= __('Match Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sport->matches as $matches): ?>
            <tr>
                <td><?= h($matches->id) ?></td>
                <td><?= h($matches->name) ?></td>
                <td><?= h($matches->venue) ?></td>
                <td><?= h($matches->sport_id) ?></td>
                <td><?= h($matches->date_from) ?></td>
                <td><?= h($matches->date_to) ?></td>
                <td><?= h($matches->apply_from) ?></td>
                <td><?= h($matches->apply_to) ?></td>
                <td><?= h($matches->match_type) ?></td>
                <td><?= h($matches->organizer_id) ?></td>
                <td><?= h($matches->ticket_price) ?></td>
                <td><?= h($matches->total_tickets) ?></td>
                <td><?= h($matches->sold_tickets) ?></td>
                <td><?= h($matches->match_status) ?></td>
                <td><?= h($matches->created) ?></td>
                <td><?= h($matches->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Matches', 'action' => 'view', $matches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Matches', 'action' => 'edit', $matches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matches', 'action' => 'delete', $matches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($sport->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Club Id') ?></th>
                <th scope="col"><?= __('Sport Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sport->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->name) ?></td>
                <td><?= h($teams->club_id) ?></td>
                <td><?= h($teams->sport_id) ?></td>
                <td><?= h($teams->created) ?></td>
                <td><?= h($teams->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Training Schedules') ?></h4>
        <?php if (!empty($sport->training_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coach Id') ?></th>
                <th scope="col"><?= __('Sport Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Date From') ?></th>
                <th scope="col"><?= __('Date To') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sport->training_schedules as $trainingSchedules): ?>
            <tr>
                <td><?= h($trainingSchedules->id) ?></td>
                <td><?= h($trainingSchedules->coach_id) ?></td>
                <td><?= h($trainingSchedules->sport_id) ?></td>
                <td><?= h($trainingSchedules->player_id) ?></td>
                <td><?= h($trainingSchedules->team_id) ?></td>
                <td><?= h($trainingSchedules->date_from) ?></td>
                <td><?= h($trainingSchedules->date_to) ?></td>
                <td><?= h($trainingSchedules->created) ?></td>
                <td><?= h($trainingSchedules->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TrainingSchedules', 'action' => 'view', $trainingSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TrainingSchedules', 'action' => 'edit', $trainingSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TrainingSchedules', 'action' => 'delete', $trainingSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainingSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
