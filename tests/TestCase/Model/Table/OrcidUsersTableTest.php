<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidUsersTable Test Case
 */
class OrcidUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidUsersTable
     */
    protected $OrcidUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidUsers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidUsers') ? [] : ['className' => OrcidUsersTable::class];
        $this->OrcidUsers = $this->getTableLocator()->get('OrcidUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
