<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidStatusTypes Model
 *
 * @method \App\Model\Entity\OrcidStatusType newEmptyEntity()
 * @method \App\Model\Entity\OrcidStatusType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatusType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatusType get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidStatusType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidStatusType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatusType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatusType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidStatusType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidStatusType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatusType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatusType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatusType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidStatusTypesTable extends Table
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

        $this->setTable('orcid_status_types');
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
            ->integer('SEQ')
            ->allowEmptyString('SEQ');

        return $validator;
    }
}
