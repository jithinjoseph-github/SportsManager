<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MatchRound Entity
 *
 * @property int $id
 * @property string $name
 * @property int $match_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Match $match
 * @property \App\Model\Entity\MatchRoundMatch[] $match_round_matches
 * @property \App\Model\Entity\PlayerPoint[] $player_points
 * @property \App\Model\Entity\TeamPoint[] $team_points
 */
class MatchRound extends Entity
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
        'match_id' => true,
        'created' => true,
        'modified' => true,
        'match' => true,
        'match_round_matches' => true,
        'player_points' => true,
        'team_points' => true,
    ];
}
