<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClubsSportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClubsSportsTable Test Case
 */
class ClubsSportsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClubsSportsTable
     */
    public $ClubsSports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ClubsSports',
        'app.Clubs',
        'app.Sports',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ClubsSports') ? [] : ['className' => ClubsSportsTable::class];
        $this->ClubsSports = TableRegistry::getTableLocator()->get('ClubsSports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClubsSports);

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
