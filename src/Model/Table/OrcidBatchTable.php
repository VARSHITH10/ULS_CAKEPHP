<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidBatch Model
 *
 * @method \App\Model\Entity\OrcidBatch newEmptyEntity()
 * @method \App\Model\Entity\OrcidBatch newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatch get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidBatch findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidBatch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatch[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatch|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatch saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatch[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatch[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatch[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatch[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidBatchTable extends Table
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

        $this->setTable('orcid_batch');
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
            ->scalar('SUBJECT')
            ->maxLength('SUBJECT', 512)
            ->allowEmptyString('SUBJECT');

        $validator
            ->scalar('BODY')
            ->maxLength('BODY', 4294967295)
            ->allowEmptyString('BODY');

        $validator
            ->scalar('FROM_NAME')
            ->maxLength('FROM_NAME', 64)
            ->allowEmptyString('FROM_NAME');

        $validator
            ->scalar('FROM_ADDR')
            ->maxLength('FROM_ADDR', 64)
            ->allowEmptyString('FROM_ADDR');

        $validator
            ->scalar('REPLY_TO')
            ->maxLength('REPLY_TO', 64)
            ->allowEmptyString('REPLY_TO');

        $validator
            ->integer('ORCID_BATCH_CREATOR_ID')
            ->allowEmptyString('ORCID_BATCH_CREATOR_ID');

        return $validator;
    }
}
