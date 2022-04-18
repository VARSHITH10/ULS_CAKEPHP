<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidBatchGroups Model
 *
 * @method \App\Model\Entity\OrcidBatchGroup newEmptyEntity()
 * @method \App\Model\Entity\OrcidBatchGroup newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidBatchGroup[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidBatchGroupsTable extends Table
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

        $this->setTable('orcid_batch_groups');
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
            ->scalar('GROUP_DEFINITION')
            ->maxLength('GROUP_DEFINITION', 2048)
            ->allowEmptyString('GROUP_DEFINITION');

        $validator
            ->scalar('EMPLOYEE_DEFINITION')
            ->maxLength('EMPLOYEE_DEFINITION', 2048)
            ->allowEmptyString('EMPLOYEE_DEFINITION');

        $validator
            ->scalar('STUDENT_DEFINITION')
            ->maxLength('STUDENT_DEFINITION', 2048)
            ->allowEmptyString('STUDENT_DEFINITION');

        $validator
            ->date('CACHE_CREATION_DATE')
            ->allowEmptyDate('CACHE_CREATION_DATE');

        return $validator;
    }
}
