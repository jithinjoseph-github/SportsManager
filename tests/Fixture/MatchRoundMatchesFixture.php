<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatchRoundMatchesFixture
 */
class MatchRoundMatchesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'match_round_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'player1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'player2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'team1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'team2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'winner' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'match_status' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '0=Pending, 1=In Progress, 2=Finished', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_match_round_matches_match_rounds' => ['type' => 'index', 'columns' => ['match_round_id'], 'length' => []],
            'FK_match_round_matches_users' => ['type' => 'index', 'columns' => ['player1'], 'length' => []],
            'FK_match_round_matches_users_2' => ['type' => 'index', 'columns' => ['player2'], 'length' => []],
            'FK_match_round_matches_teams' => ['type' => 'index', 'columns' => ['team1'], 'length' => []],
            'FK_match_round_matches_teams_2' => ['type' => 'index', 'columns' => ['team2'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_match_round_matches_match_rounds' => ['type' => 'foreign', 'columns' => ['match_round_id'], 'references' => ['match_rounds', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_match_round_matches_teams' => ['type' => 'foreign', 'columns' => ['team1'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_match_round_matches_teams_2' => ['type' => 'foreign', 'columns' => ['team2'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_match_round_matches_users' => ['type' => 'foreign', 'columns' => ['player1'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_match_round_matches_users_2' => ['type' => 'foreign', 'columns' => ['player2'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'match_round_id' => 1,
                'player1' => 1,
                'player2' => 1,
                'team1' => 1,
                'team2' => 1,
                'winner' => 1,
                'match_status' => 1,
            ],
        ];
        parent::init();
    }
}
