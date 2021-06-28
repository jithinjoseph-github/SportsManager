<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoachesTeam Entity
 *
 * @property int $id
 * @property int $coach_id
 * @property int $team_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Team $team
 */
class CoachesTeam extends Entity
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
        'team_id' => true,
        'user' => true,
        'team' => true,
    ];
}
