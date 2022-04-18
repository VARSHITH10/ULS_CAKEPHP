<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidBatchCreators Model
 *
 * @method \App\Model\Entity\OrcidBatchCreator newEmptyEntity()
 * @method \App\Model\Entity\OrcidBatchCreator newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchCreator[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidBatchCreatorsTable extends Table
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

        $this->setTable('orcid_batch_creators');
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
            ->maxLength('NAME', 10)
            ->allowEmptyString('NAME');

        $validator
            ->integer('FLAGS')
            ->allowEmptyString('FLAGS');

        return $validator;
    }
}
