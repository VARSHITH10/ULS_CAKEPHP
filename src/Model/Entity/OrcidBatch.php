<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrcidBatch Entity
 *
 * @property int $ID
 * @property string|null $NAME
 * @property string|null $SUBJECT
 * @property string|null $BODY
 * @property string|null $FROM_NAME
 * @property string|null $FROM_ADDR
 * @property string|null $REPLY_TO
 * @property int|null $ORCID_BATCH_CREATOR_ID
 */
class OrcidBatch extends Entity
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
        'NAME' => true,
        'SUBJECT' => true,
        'BODY' => true,
        'FROM_NAME' => true,
        'FROM_ADDR' => true,
        'REPLY_TO' => true,
        'ORCID_BATCH_CREATOR_ID' => true,
    ];
}
