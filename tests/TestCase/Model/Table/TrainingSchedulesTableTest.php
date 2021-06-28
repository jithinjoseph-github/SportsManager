<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingSchedulesTable Test Case
 */
class TrainingSchedulesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingSchedulesTable
     */
    public $TrainingSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TrainingSchedules',
        'app.Users',
        'app.Sports',
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
        $config = TableRegistry::getTableLocator()->exists('TrainingSchedules') ? [] : ['className' => TrainingSchedulesTable::class];
        $this->TrainingSchedules = TableRegistry::getTableLocator()->get('TrainingSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrainingSchedules);

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
