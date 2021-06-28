<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamPointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamPointsTable Test Case
 */
class TeamPointsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamPointsTable
     */
    public $TeamPoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TeamPoints',
        'app.Teams',
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
        $config = TableRegistry::getTableLocator()->exists('TeamPoints') ? [] : ['className' => TeamPointsTable::class];
        $this->TeamPoints = TableRegistry::getTableLocator()->get('TeamPoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamPoints);

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
