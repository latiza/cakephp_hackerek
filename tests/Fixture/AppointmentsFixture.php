<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppointmentsFixture
 */
class AppointmentsFixture extends TestFixture
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
                'id' => 1,
                'customer_id' => 1,
                'developer_id' => 1,
                'date' => '2023-01-08 12:21:42',
                'created' => '2023-01-08 12:21:42',
                'modified' => '2023-01-08 12:21:42',
            ],
        ];
        parent::init();
    }
}
