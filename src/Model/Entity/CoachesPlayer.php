<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoachesPlayer Entity
 *
 * @property int $id
 * @property int $coach_id
 * @property int $player_id
 *
 * @property \App\Model\Entity\User $user
 */
class CoachesPlayer extends Entity
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
        'player_id' => true,
        'user' => true,
    ];
}
