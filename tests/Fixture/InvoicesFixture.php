<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicesFixture
 */
class InvoicesFixture extends TestFixture
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
                'amount' => 1.5,
                'services' => 'Lorem ipsum dolor sit amet',
                'due_date' => '2023-01-08',
                'created' => '2023-01-08 12:22:01',
                'modified' => '2023-01-08 12:22:01',
            ],
        ];
        parent::init();
    }
}
