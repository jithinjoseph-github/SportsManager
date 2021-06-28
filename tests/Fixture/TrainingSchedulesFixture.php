<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrainingSchedulesFixture
 */
class TrainingSchedulesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'coach_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sport_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'player_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_from' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_to' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_training_schedules_users' => ['type' => 'index', 'columns' => ['coach_id'], 'length' => []],
            'FK_training_schedules_sports' => ['type' => 'index', 'columns' => ['sport_id'], 'length' => []],
            'FK_training_schedules_users_2' => ['type' => 'index', 'columns' => ['player_id'], 'length' => []],
            'FK_training_schedules_teams' => ['type' => 'index', 'columns' => ['team_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_training_schedules_sports' => ['type' => 'foreign', 'columns' => ['sport_id'], 'references' => ['sports', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_training_schedules_teams' => ['type' => 'foreign', 'columns' => ['team_id'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_training_schedules_users' => ['type' => 'foreign', 'columns' => ['coach_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_training_schedules_users_2' => ['type' => 'foreign', 'columns' => ['player_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'coach_id' => 1,
                'sport_id' => 1,
                'player_id' => 1,
                'team_id' => 1,
                'date_from' => '2021-06-28 13:57:53',
                'date_to' => '2021-06-28 13:57:53',
                'created' => '2021-06-28 13:57:53',
                'modified' => '2021-06-28 13:57:53',
            ],
        ];
        parent::init();
    }
}
