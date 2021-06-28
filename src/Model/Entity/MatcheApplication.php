<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MatcheApplication Entity
 *
 * @property int $id
 * @property int $match_id
 * @property int $team_id
 * @property int $player_id
 * @property int $application_status
 * @property string|null $notes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Match $match
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\User $user
 */
class MatcheApplication extends Entity
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
        'match_id' => true,
        'team_id' => true,
        'player_id' => true,
        'application_status' => true,
        'notes' => true,
        'created' => true,
        'modified' => true,
        'match' => true,
        'team' => true,
        'user' => true,
    ];
}
