<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidBatchGroupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidBatchGroupsTable Test Case
 */
class OrcidBatchGroupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidBatchGroupsTable
     */
    protected $OrcidBatchGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidBatchGroups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidBatchGroups') ? [] : ['className' => OrcidBatchGroupsTable::class];
        $this->OrcidBatchGroups = $this->getTableLocator()->get('OrcidBatchGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidBatchGroups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidBatchGroupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
