<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrainingSchedule Entity
 *
 * @property int $id
 * @property int $coach_id
 * @property int $sport_id
 * @property int $player_id
 * @property int $team_id
 * @property \Cake\I18n\FrozenTime $date_from
 * @property \Cake\I18n\FrozenTime $date_to
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Sport $sport
 * @property \App\Model\Entity\Team $team
 */
class TrainingSchedule extends Entity
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
        'coach_id' => true,
        'sport_id' => true,
        'player_id' => true,
        'team_id' => true,
        'date_from' => true,
        'date_to' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'sport' => true,
        'team' => true,
    ];
}
