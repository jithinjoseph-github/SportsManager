<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingSchedules Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SportsTable&\Cake\ORM\Association\BelongsTo $Sports
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TeamsTable&\Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \App\Model\Entity\TrainingSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingSchedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrainingSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingSchedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingSchedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingSchedule findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrainingSchedulesTable extends Table
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

        $this->setTable('training_schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'coach_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sports', [
            'foreignKey' => 'sport_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'player_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
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
            ->dateTime('date_from')
            ->requirePresence('date_from', 'create')
            ->notEmptyDateTime('date_from');

        $validator
            ->dateTime('date_to')
            ->requirePresence('date_to', 'create')
            ->notEmptyDateTime('date_to');

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
        $rules->add($rules->existsIn(['coach_id'], 'Users'));
        $rules->add($rules->existsIn(['sport_id'], 'Sports'));
        $rules->add($rules->existsIn(['player_id'], 'Users'));
        $rules->add($rules->existsIn(['team_id'], 'Teams'));

        return $rules;
    }
}
