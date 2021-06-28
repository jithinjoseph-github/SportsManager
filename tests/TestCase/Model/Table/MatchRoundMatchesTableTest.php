<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatchRoundMatchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatchRoundMatchesTable Test Case
 */
class MatchRoundMatchesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatchRoundMatchesTable
     */
    public $MatchRoundMatches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MatchRoundMatches',
        'app.MatchRounds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MatchRoundMatches') ? [] : ['className' => MatchRoundMatchesTable::class];
        $this->MatchRoundMatches = TableRegistry::getTableLocator()->get('MatchRoundMatches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MatchRoundMatches);

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
