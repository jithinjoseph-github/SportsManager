<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatchRoundsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatchRoundsTable Test Case
 */
class MatchRoundsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatchRoundsTable
     */
    public $MatchRounds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MatchRounds',
        'app.Matches',
        'app.MatchRoundMatches',
        'app.PlayerPoints',
        'app.TeamPoints',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MatchRounds') ? [] : ['className' => MatchRoundsTable::class];
        $this->MatchRounds = TableRegistry::getTableLocator()->get('MatchRounds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MatchRounds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
