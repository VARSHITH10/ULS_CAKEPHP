<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrcidBatchCreatorsFixture
 */
class OrcidBatchCreatorsFixture extends TestFixture
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
                'NAME' => 'Lorem ip',
                'FLAGS' => 1,
            ],
        ];
        parent::init();
    }
}
