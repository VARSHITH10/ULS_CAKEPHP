<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidBatchGroupCaches Model
 *
 * @method \App\Model\Entity\OrcidBatchGroupCache newEmptyEntity()
 * @method \App\Model\Entity\OrcidBatchGroupCache newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroupCache[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidBatchGroupCachesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('orcid_batch_group_caches');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->integer('ORCID_BATCH_GROUP_ID')
            ->allowEmptyString('ORCID_BATCH_GROUP_ID');

        $validator
            ->integer('ORCID_USER_ID')
            ->allowEmptyString('ORCID_USER_ID');

        $validator
            ->date('DEPRECATED')
            ->allowEmptyDate('DEPRECATED');

        return $validator;
    }
}
