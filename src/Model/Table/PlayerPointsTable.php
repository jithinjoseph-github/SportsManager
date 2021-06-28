<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlayerPoints Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\MatchRoundsTable&\Cake\ORM\Association\BelongsTo $MatchRounds
 *
 * @method \App\Model\Entity\PlayerPoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlayerPoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlayerPoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlayerPoint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlayerPoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlayerPoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlayerPoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlayerPoint findOrCreate($search, callable $callback = null, $options = [])
 */
class PlayerPointsTable extends Table
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

        $this->setTable('player_points');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'player_id',
            'joinType' => 'INNER',
        ]);
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
            ->decimal('points')
            ->requirePresence('points', 'create')
            ->notEmptyString('points');

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
        $rules->add($rules->existsIn(['player_id'], 'Users'));
        $rules->add($rules->existsIn(['match_round_id'], 'MatchRounds'));

        return $rules;
    }
}
