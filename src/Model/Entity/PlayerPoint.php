<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlayerPoint Entity
 *
 * @property int $id
 * @property int $player_id
 * @property int $match_round_id
 * @property float $points
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MatchRound $match_round
 */
class PlayerPoint extends Entity
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
        'player_id' => true,
        'match_round_id' => true,
        'points' => true,
        'user' => true,
        'match_round' => true,
    ];
}
