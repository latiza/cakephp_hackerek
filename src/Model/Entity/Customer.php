<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $zip
 * @property string $city
 * @property string $street
 * @property int $service_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Appointment[] $appointments
 * @property \App\Model\Entity\Invoice[] $invoices
 */
class Customer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'phone' => true,
        'zip' => true,
        'city' => true,
        'street' => true,
        'service_id' => true,
        'created' => true,
        'modified' => true,
        'service' => true,
        'appointments' => true,
        'invoices' => true,
    ];
}
