<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrcidUser Entity
 *
 * @property int $ID
 * @property string|null $USERNAME
 * @property string|null $ORCID
 * @property string|null $TOKEN
 * @property \Cake\I18n\FrozenDate|null $CREATED
 * @property \Cake\I18n\FrozenDate|null $MODIFIED
 */
class OrcidUser extends Entity
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
        'USERNAME' => true,
        'ORCID' => true,
        'TOKEN' => true,
        'CREATED' => true,
        'MODIFIED' => true,
    ];
}
