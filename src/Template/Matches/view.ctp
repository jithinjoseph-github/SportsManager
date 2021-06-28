<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Match Rounds'), ['controller' => 'MatchRounds', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match Round'), ['controller' => 'MatchRounds', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['controller' => 'MatcheApplications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matche Application'), ['controller' => 'MatcheApplications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ticket Sales'), ['controller' => 'TicketSales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket Sale'), ['controller' => 'TicketSales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matches view large-9 medium-8 columns content">
    <h3><?= h($match->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($match->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Venue') ?></th>
            <td><?= h($match->venue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sport') ?></th>
            <td><?= $match->has('sport') ? $this->Html->link($match->sport->name, ['controller' => 'Sports', 'action' => 'view', $match->sport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $match->has('user') ? $this->Html->link($match->user->name, ['controller' => 'Users', 'action' => 'view', $match->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($match->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Type') ?></th>
            <td><?= $this->Number->format($match->match_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Price') ?></th>
            <td><?= $this->Number->format($match->ticket_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Tickets') ?></th>
            <td><?= $this->Number->format($match->total_tickets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sold Tickets') ?></th>
            <td><?= $this->Number->format($match->sold_tickets) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match Status') ?></th>
            <td><?= $this->Number->format($match->match_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date From') ?></th>
            <td><?= h($match->date_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date To') ?></th>
            <td><?= h($match->date_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apply From') ?></th>
            <td><?= h($match->apply_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apply To') ?></th>
            <td><?= h($match->apply_to) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($match->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($match->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Match Rounds') ?></h4>
        <?php if (!empty($match->match_rounds)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Match Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($match->match_rounds as $matchRounds): ?>
            <tr>
                <td><?= h($matchRounds->id) ?></td>
                <td><?= h($matchRounds->name) ?></td>
                <td><?= h($matchRounds->match_id) ?></td>
                <td><?= h($matchRounds->created) ?></td>
                <td><?= h($matchRounds->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MatchRounds', 'action' => 'view', $matchRounds->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MatchRounds', 'action' => 'edit', $matchRounds->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MatchRounds', 'action' => 'delete', $matchRounds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matchRounds->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Matche Applications') ?></h4>
        <?php if (!empty($match->matche_applications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Match Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Application Status') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($match->matche_applications as $matcheApplications): ?>
            <tr>
                <td><?= h($matcheApplications->id) ?></td>
                <td><?= h($matcheApplications->match_id) ?></td>
                <td><?= h($matcheApplications->team_id) ?></td>
                <td><?= h($matcheApplications->player_id) ?></td>
                <td><?= h($matcheApplications->application_status) ?></td>
                <td><?= h($matcheApplications->notes) ?></td>
                <td><?= h($matcheApplications->created) ?></td>
                <td><?= h($matcheApplications->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MatcheApplications', 'action' => 'view', $matcheApplications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MatcheApplications', 'action' => 'edit', $matcheApplications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MatcheApplications', 'action' => 'delete', $matcheApplications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matcheApplications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ticket Sales') ?></h4>
        <?php if (!empty($match->ticket_sales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Match Id') ?></th>
                <th scope="col"><?= __('Buyer Name') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($match->ticket_sales as $ticketSales): ?>
            <tr>
                <td><?= h($ticketSales->id) ?></td>
                <td><?= h($ticketSales->match_id) ?></td>
                <td><?= h($ticketSales->buyer_name) ?></td>
                <td><?= h($ticketSales->quantity) ?></td>
                <td><?= h($ticketSales->price) ?></td>
                <td><?= h($ticketSales->created) ?></td>
                <td><?= h($ticketSales->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TicketSales', 'action' => 'view', $ticketSales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TicketSales', 'action' => 'edit', $ticketSales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TicketSales', 'action' => 'delete', $ticketSales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketSales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
