<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidStatusTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidStatusTypesTable Test Case
 */
class OrcidStatusTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidStatusTypesTable
     */
    protected $OrcidStatusTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidStatusTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidStatusTypes') ? [] : ['className' => OrcidStatusTypesTable::class];
        $this->OrcidStatusTypes = $this->getTableLocator()->get('OrcidStatusTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidStatusTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidStatusTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
