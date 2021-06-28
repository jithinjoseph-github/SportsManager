<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sports Model
 *
 * @property \App\Model\Table\MatchesTable&\Cake\ORM\Association\HasMany $Matches
 * @property \App\Model\Table\TeamsTable&\Cake\ORM\Association\HasMany $Teams
 * @property \App\Model\Table\TrainingSchedulesTable&\Cake\ORM\Association\HasMany $TrainingSchedules
 * @property \App\Model\Table\ClubsTable&\Cake\ORM\Association\BelongsToMany $Clubs
 *
 * @method \App\Model\Entity\Sport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sport|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sport saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sport findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SportsTable extends Table
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

        $this->setTable('sports');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Matches', [
            'foreignKey' => 'sport_id',
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'sport_id',
        ]);
        $this->hasMany('TrainingSchedules', [
            'foreignKey' => 'sport_id',
        ]);
        $this->belongsToMany('Clubs', [
            'foreignKey' => 'sport_id',
            'targetForeignKey' => 'club_id',
            'joinTable' => 'clubs_sports',
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
}
