<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatcheApplicationsFixture
 */
class MatcheApplicationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'match_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'player_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'application_status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0=Pending, 1=Approved, 2=Rejected', 'precision' => null],
        'notes' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'FK_matches_teams_matches' => ['type' => 'index', 'columns' => ['match_id'], 'length' => []],
            'FK_matches_teams_teams' => ['type' => 'index', 'columns' => ['team_id'], 'length' => []],
            'FK_matches_teams_users' => ['type' => 'index', 'columns' => ['player_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_matches_teams_matches' => ['type' => 'foreign', 'columns' => ['match_id'], 'references' => ['matches', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_matches_teams_teams' => ['type' => 'foreign', 'columns' => ['team_id'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_matches_teams_users' => ['type' => 'foreign', 'columns' => ['player_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'match_id' => 1,
                'team_id' => 1,
                'player_id' => 1,
                'application_status' => 1,
                'notes' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-06-28 13:56:15',
                'modified' => '2021-06-28 13:56:15',
            ],
        ];
        parent::init();
    }
}
