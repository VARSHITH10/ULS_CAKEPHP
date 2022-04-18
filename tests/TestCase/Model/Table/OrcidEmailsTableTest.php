<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrcidEmailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrcidEmailsTable Test Case
 */
class OrcidEmailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrcidEmailsTable
     */
    protected $OrcidEmails;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.OrcidEmails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrcidEmails') ? [] : ['className' => OrcidEmailsTable::class];
        $this->OrcidEmails = $this->getTableLocator()->get('OrcidEmails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->OrcidEmails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrcidEmailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
