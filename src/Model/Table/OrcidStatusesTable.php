<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidStatuses Model
 *
 * @method \App\Model\Entity\OrcidStatus newEmptyEntity()
 * @method \App\Model\Entity\OrcidStatus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidStatus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidStatus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidStatus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidStatusesTable extends Table
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

        $this->setTable('orcid_statuses');
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
            ->integer('ORCID_USER_ID')
            ->allowEmptyString('ORCID_USER_ID');

        $validator
            ->integer('ORCID_STATUS_TYPE_ID')
            ->allowEmptyString('ORCID_STATUS_TYPE_ID');

        $validator
            ->date('STATUS_TIMESTAMP')
            ->allowEmptyDate('STATUS_TIMESTAMP');

        return $validator;
    }
}
