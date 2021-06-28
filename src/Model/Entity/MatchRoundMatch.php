<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MatchRoundMatch Entity
 *
 * @property int $id
 * @property int $match_round_id
 * @property int $player1
 * @property int $player2
 * @property int $team1
 * @property int $team2
 * @property int $winner
 * @property int $match_status
 *
 * @property \App\Model\Entity\MatchRound $match_round
 */
class MatchRoundMatch extends Entity
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
        'match_round_id' => true,
        'player1' => true,
        'player2' => true,
        'team1' => true,
        'team2' => true,
        'winner' => true,
        'match_status' => true,
        'match_round' => true,
    ];
}
