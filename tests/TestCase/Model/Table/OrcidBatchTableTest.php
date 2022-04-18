<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidBatchTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidBatchTable Test Case
 */
class OrcidBatchTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidBatchTable
     */
    protected $OrcidBatch;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidBatch',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidBatch') ? [] : ['className' => OrcidBatchTable::class];
        $this->OrcidBatch = $this->getTableLocator()->get('OrcidBatch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidBatch);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidBatchTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
