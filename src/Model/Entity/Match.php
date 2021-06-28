<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Match Entity
 *
 * @property int $id
 * @property string $name
 * @property string $venue
 * @property int $sport_id
 * @property \Cake\I18n\FrozenTime $date_from
 * @property \Cake\I18n\FrozenTime $date_to
 * @property \Cake\I18n\FrozenTime $apply_from
 * @property \Cake\I18n\FrozenTime $apply_to
 * @property int $match_type
 * @property int $organizer_id
 * @property float $ticket_price
 * @property int $total_tickets
 * @property int $sold_tickets
 * @property int $match_status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Sport $sport
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\MatchRound[] $match_rounds
 * @property \App\Model\Entity\MatcheApplication[] $matche_applications
 * @property \App\Model\Entity\TicketSale[] $ticket_sales
 */
class Match extends Entity
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
        'venue' => true,
        'sport_id' => true,
        'date_from' => true,
        'date_to' => true,
        'apply_from' => true,
        'apply_to' => true,
        'match_type' => true,
        'organizer_id' => true,
        'ticket_price' => true,
        'total_tickets' => true,
        'sold_tickets' => true,
        'match_status' => true,
        'created' => true,
        'modified' => true,
        'sport' => true,
        'user' => true,
        'match_rounds' => true,
        'matche_applications' => true,
        'ticket_sales' => true,
    ];
}
