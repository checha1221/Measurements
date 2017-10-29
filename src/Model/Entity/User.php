<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $birthdate
 * @property string $email
 * @property int $phone
 * @property string $nickname
 * @property string $password
 * @property string $role
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Measuremet[] $measuremet
 * @property \App\Model\Entity\Payment[] $payment
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'gender' => true,
        'birthdate' => true,
        'email' => true,
        'phone' => true,
        'nickname' => true,
        'password' => true,
        'role' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'measuremet' => true,
        'payment' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
