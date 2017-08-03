<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoginLogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoginLogTable Test Case
 */
class LoginLogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LoginLogTable
     */
    public $LoginLog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.login_log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LoginLog') ? [] : ['className' => LoginLogTable::class];
        $this->LoginLog = TableRegistry::get('LoginLog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LoginLog);

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
