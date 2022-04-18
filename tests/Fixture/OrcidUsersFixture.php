<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrcidUsersFixture
 */
class OrcidUsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'ID' => 1,
                'USERNAME' => 'Lorem ',
                'ORCID' => 'Lorem ipsum dolor',
                'TOKEN' => 'Lorem ipsum dolor sit amet',
                'CREATED' => '2022-04-03',
                'MODIFIED' => '2022-04-03',
            ],
        ];
        parent::init();
    }
}
