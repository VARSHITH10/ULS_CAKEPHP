<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidBatchTriggersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidBatchTriggersTable Test Case
 */
class OrcidBatchTriggersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidBatchTriggersTable
     */
    protected $OrcidBatchTriggers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidBatchTriggers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidBatchTriggers') ? [] : ['className' => OrcidBatchTriggersTable::class];
        $this->OrcidBatchTriggers = $this->getTableLocator()->get('OrcidBatchTriggers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidBatchTriggers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidBatchTriggersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
