<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $name
 * @property int $club_id
 * @property int $sport_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Sport $sport
 * @property \App\Model\Entity\CoachesTeam[] $coaches_teams
 * @property \App\Model\Entity\MatcheApplication[] $matche_applications
 * @property \App\Model\Entity\TeamPoint[] $team_points
 * @property \App\Model\Entity\TrainingSchedule[] $training_schedules
 * @property \App\Model\Entity\User[] $users
 */
class Team extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'club_id' => true,
        'sport_id' => true,
        'created' => true,
        'modified' => true,
        'club' => true,
        'sport' => true,
        'coaches_teams' => true,
        'matche_applications' => true,
        'team_points' => true,
        'training_schedules' => true,
        'users' => true,
    ];
}
