<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidBatchTriggers Model
 *
 * @method \App\Model\Entity\OrcidBatchTrigger newEmptyEntity()
 * @method \App\Model\Entity\OrcidBatchTrigger newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchTrigger[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidBatchTriggersTable extends Table
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

        $this->setTable('orcid_batch_triggers');
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
            ->scalar('NAME')
            ->maxLength('NAME', 512)
            ->allowEmptyString('NAME');

        $validator
            ->integer('ORCID_STATUS_TYPE_ID')
            ->allowEmptyString('ORCID_STATUS_TYPE_ID');

        $validator
            ->integer('ORCID_BATCH_ID')
            ->allowEmptyString('ORCID_BATCH_ID');

        $validator
            ->integer('TRIGGER_DELAY')
            ->allowEmptyString('TRIGGER_DELAY');

        $validator
            ->integer('ORCID_BATCH_GROUP_ID')
            ->allowEmptyString('ORCID_BATCH_GROUP_ID');

        $validator
            ->date('BEGIN_DATE')
            ->allowEmptyDate('BEGIN_DATE');

        $validator
            ->integer('REQUIRE_BATCH_ID')
            ->allowEmptyString('REQUIRE_BATCH_ID');

        $validator
            ->integer('MINIMUM_REPEAT')
            ->allowEmptyString('MINIMUM_REPEAT');

        $validator
            ->integer('MAXIMUM_REPEAT')
            ->allowEmptyString('MAXIMUM_REPEAT');

        return $validator;
    }
}
