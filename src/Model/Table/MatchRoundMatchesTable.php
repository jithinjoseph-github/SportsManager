<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MatchRoundMatches Model
 *
 * @property \App\Model\Table\MatchRoundsTable&\Cake\ORM\Association\BelongsTo $MatchRounds
 *
 * @method \App\Model\Entity\MatchRoundMatch get($primaryKey, $options = [])
 * @method \App\Model\Entity\MatchRoundMatch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MatchRoundMatch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MatchRoundMatch|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MatchRoundMatch saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MatchRoundMatch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MatchRoundMatch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MatchRoundMatch findOrCreate($search, callable $callback = null, $options = [])
 */
class MatchRoundMatchesTable extends Table
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

        $this->setTable('match_round_matches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('MatchRounds', [
            'foreignKey' => 'match_round_id',
            'joinType' => 'INNER',
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
            ->integer('player1')
            ->requirePresence('player1', 'create')
            ->notEmptyString('player1');

        $validator
            ->integer('player2')
            ->requirePresence('player2', 'create')
            ->notEmptyString('player2');

        $validator
            ->integer('team1')
            ->requirePresence('team1', 'create')
            ->notEmptyString('team1');

        $validator
            ->integer('team2')
            ->requirePresence('team2', 'create')
            ->notEmptyString('team2');

        $validator
            ->integer('winner')
            ->requirePresence('winner', 'create')
            ->notEmptyString('winner');

        $validator
            ->integer('match_status')
            ->requirePresence('match_status', 'create')
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
        $rules->add($rules->existsIn(['match_round_id'], 'MatchRounds'));

        return $rules;
    }
}
