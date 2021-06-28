<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MatchRounds Model
 *
 * @property \App\Model\Table\MatchesTable&\Cake\ORM\Association\BelongsTo $Matches
 * @property \App\Model\Table\MatchRoundMatchesTable&\Cake\ORM\Association\HasMany $MatchRoundMatches
 * @property \App\Model\Table\PlayerPointsTable&\Cake\ORM\Association\HasMany $PlayerPoints
 * @property \App\Model\Table\TeamPointsTable&\Cake\ORM\Association\HasMany $TeamPoints
 *
 * @method \App\Model\Entity\MatchRound get($primaryKey, $options = [])
 * @method \App\Model\Entity\MatchRound newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MatchRound[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MatchRound|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MatchRound saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MatchRound patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MatchRound[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MatchRound findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatchRoundsTable extends Table
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

        $this->setTable('match_rounds');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Matches', [
            'foreignKey' => 'match_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('MatchRoundMatches', [
            'foreignKey' => 'match_round_id',
        ]);
        $this->hasMany('PlayerPoints', [
            'foreignKey' => 'match_round_id',
        ]);
        $this->hasMany('TeamPoints', [
            'foreignKey' => 'match_round_id',
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
        $rules->add($rules->existsIn(['match_id'], 'Matches'));

        return $rules;
    }
}
