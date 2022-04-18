<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrcidBatchGroupCache Entity
 *
 * @property int $ID
 * @property int|null $ORCID_BATCH_GROUP_ID
 * @property int|null $ORCID_USER_ID
 * @property \Cake\I18n\FrozenDate|null $DEPRECATED
 */
class OrcidBatchGroupCache extends Entity
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
        'ORCID_BATCH_GROUP_ID' => true,
        'ORCID_USER_ID' => true,
        'DEPRECATED' => true,
    ];
}
