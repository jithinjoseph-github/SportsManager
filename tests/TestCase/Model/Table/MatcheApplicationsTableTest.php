<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatcheApplicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatcheApplicationsTable Test Case
 */
class MatcheApplicationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatcheApplicationsTable
     */
    public $MatcheApplications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MatcheApplications',
        'app.Matches',
        'app.Teams',
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
        $config = TableRegistry::getTableLocator()->exists('MatcheApplications') ? [] : ['className' => MatcheApplicationsTable::class];
        $this->MatcheApplications = TableRegistry::getTableLocator()->get('MatcheApplications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MatcheApplications);

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
