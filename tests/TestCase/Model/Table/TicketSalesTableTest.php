<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketSalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketSalesTable Test Case
 */
class TicketSalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketSalesTable
     */
    public $TicketSales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TicketSales',
        'app.Matches',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TicketSales') ? [] : ['className' => TicketSalesTable::class];
        $this->TicketSales = TableRegistry::getTableLocator()->get('TicketSales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TicketSales);

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
