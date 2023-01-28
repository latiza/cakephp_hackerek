<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DevelopersFixture
 */
class DevelopersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'on_vacation' => 1,
                'created' => '2023-01-08 12:21:33',
                'modified' => '2023-01-08 12:21:33',
            ],
        ];
        parent::init();
    }
}
