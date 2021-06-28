<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matches Model
 *
 * @property \App\Model\Table\SportsTable&\Cake\ORM\Association\BelongsTo $Sports
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MatchRoundsTable&\Cake\ORM\Association\HasMany $MatchRounds
 * @property \App\Model\Table\MatcheApplicationsTable&\Cake\ORM\Association\HasMany $MatcheApplications
 * @property \App\Model\Table\TicketSalesTable&\Cake\ORM\Association\HasMany $TicketSales
 *
 * @method \App\Model\Entity\Match get($primaryKey, $options = [])
 * @method \App\Model\Entity\Match newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Match[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Match|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Match saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Match patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Match[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Match findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatchesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('matches');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sports', [
            'foreignKey' => 'sport_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'organizer_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('MatchRounds', [
            'foreignKey' => 'match_id',
        ]);
        $this->hasMany('MatcheApplications', [
            'foreignKey' => 'match_id',
        ]);
        $this->hasMany('TicketSales', [
            'foreignKey' => 'match_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('venue')
            ->maxLength('venue', 255)
            ->requirePresence('venue', 'create')
            ->notEmptyString('venue');

        $validator
            ->dateTime('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmptyDateTime('date_from');

        $validator
            ->dateTime('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmptyDateTime('date_to');

        $validator
            ->dateTime('apply_from')
            ->requirePresence('apply_from', 'create')
            ->notEmptyDateTime('apply_from');

        $validator
            ->dateTime('apply_to')
            ->requirePresence('apply_to', 'create')
            ->notEmptyDateTime('apply_to');

        $validator
            ->requirePresence('match_type', 'create')
            ->notEmptyString('match_type');

        $validator
            ->decimal('ticket_price')
            ->requirePresence('ticket_price', 'create')
            ->notEmptyString('ticket_price');

        $validator
            ->integer('total_tickets')
            ->requirePresence('total_tickets', 'create')
            ->notEmptyString('total_tickets');

        $validator
            ->integer('sold_tickets')
            ->requirePresence('sold_tickets', 'create')
            ->notEmptyString('sold_tickets');

        $validator
            ->notEmptyString('match_status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sport_id'], 'Sports'));
        $rules->add($rules->existsIn(['organizer_id'], 'Users'));

        return $rules;
    }
}
