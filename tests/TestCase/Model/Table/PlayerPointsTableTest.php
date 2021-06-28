<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlayerPointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlayerPointsTable Test Case
 */
class PlayerPointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlayerPointsTable
     */
    public $PlayerPoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PlayerPoints',
        'app.Users',
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
        $config = TableRegistry::getTableLocator()->exists('PlayerPoints') ? [] : ['className' => PlayerPointsTable::class];
        $this->PlayerPoints = TableRegistry::getTableLocator()->get('PlayerPoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlayerPoints);

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
