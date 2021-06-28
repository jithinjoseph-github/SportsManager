<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClubsSports Model
 *
 * @property \App\Model\Table\ClubsTable&\Cake\ORM\Association\BelongsTo $Clubs
 * @property \App\Model\Table\SportsTable&\Cake\ORM\Association\BelongsTo $Sports
 *
 * @method \App\Model\Entity\ClubsSport get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClubsSport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClubsSport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClubsSport|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClubsSport saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClubsSport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClubsSport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClubsSport findOrCreate($search, callable $callback = null, $options = [])
 */
class ClubsSportsTable extends Table
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

        $this->setTable('clubs_sports');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sports', [
            'foreignKey' => 'sport_id',
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
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));
        $rules->add($rules->existsIn(['sport_id'], 'Sports'));

        return $rules;
    }
}
