<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoachesTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoachesTeamsTable Test Case
 */
class CoachesTeamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoachesTeamsTable
     */
    public $CoachesTeams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CoachesTeams',
        'app.Users',
        'app.Teams',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CoachesTeams') ? [] : ['className' => CoachesTeamsTable::class];
        $this->CoachesTeams = TableRegistry::getTableLocator()->get('CoachesTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoachesTeams);

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
