<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeamPointsFixture
 */
class TeamPointsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'match_round_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'points' => ['type' => 'decimal', 'length' => 10, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'FK_team_points_teams' => ['type' => 'index', 'columns' => ['team_id'], 'length' => []],
            'FK_team_points_match_round_matches' => ['type' => 'index', 'columns' => ['match_round_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_team_points_match_round_matches' => ['type' => 'foreign', 'columns' => ['match_round_id'], 'references' => ['match_round_matches', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_team_points_teams' => ['type' => 'foreign', 'columns' => ['team_id'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'team_id' => 1,
                'match_round_id' => 1,
                'points' => 1.5,
            ],
        ];
        parent::init();
    }
}
