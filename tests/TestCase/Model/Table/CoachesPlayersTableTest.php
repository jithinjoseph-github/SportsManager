<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoachesPlayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoachesPlayersTable Test Case
 */
class CoachesPlayersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoachesPlayersTable
     */
    public $CoachesPlayers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CoachesPlayers',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CoachesPlayers') ? [] : ['className' => CoachesPlayersTable::class];
        $this->CoachesPlayers = TableRegistry::getTableLocator()->get('CoachesPlayers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoachesPlayers);

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
