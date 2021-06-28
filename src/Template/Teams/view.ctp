<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['controller' => 'Clubs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['controller' => 'Clubs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches Teams'), ['controller' => 'CoachesTeams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coaches Team'), ['controller' => 'CoachesTeams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matche Applications'), ['controller' => 'MatcheApplications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matche Application'), ['controller' => 'MatcheApplications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Team Points'), ['controller' => 'TeamPoints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team Point'), ['controller' => 'TeamPoints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Training Schedules'), ['controller' => 'TrainingSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training Schedule'), ['controller' => 'TrainingSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club') ?></th>
            <td><?= $team->has('club') ? $this->Html->link($team->club->name, ['controller' => 'Clubs', 'action' => 'view', $team->club->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sport') ?></th>
            <td><?= $team->has('sport') ? $this->Html->link($team->sport->name, ['controller' => 'Sports', 'action' => 'view', $team->sport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($team->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($team->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($team->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Club Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->club_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coaches Teams') ?></h4>
        <?php if (!empty($team->coaches_teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coach Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->coaches_teams as $coachesTeams): ?>
            <tr>
                <td><?= h($coachesTeams->id) ?></td>
                <td><?= h($coachesTeams->coach_id) ?></td>
                <td><?= h($coachesTeams->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CoachesTeams', 'action' => 'view', $coachesTeams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CoachesTeams', 'action' => 'edit', $coachesTeams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CoachesTeams', 'action' => 'delete', $coachesTeams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coachesTeams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Matche Applications') ?></h4>
        <?php if (!empty($team->matche_applications)): ?>
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
            <?php foreach ($team->matche_applications as $matcheApplications): ?>
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
        <h4><?= __('Related Team Points') ?></h4>
        <?php if (!empty($team->team_points)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Match Round Id') ?></th>
                <th scope="col"><?= __('Points') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->team_points as $teamPoints): ?>
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
    <div class="related">
        <h4><?= __('Related Training Schedules') ?></h4>
        <?php if (!empty($team->training_schedules)): ?>
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
            <?php foreach ($team->training_schedules as $trainingSchedules): ?>
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
