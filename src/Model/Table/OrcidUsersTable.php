<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidUsers Model
 *
 * @method \App\Model\Entity\OrcidUser newEmptyEntity()
 * @method \App\Model\Entity\OrcidUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidUsersTable extends Table
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

        $this->setTable('orcid_users');
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
            ->scalar('USERNAME')
            ->maxLength('USERNAME', 8)
            ->allowEmptyString('USERNAME');

        $validator
            ->scalar('ORCID')
            ->maxLength('ORCID', 19)
            ->allowEmptyString('ORCID');

        $validator
            ->scalar('TOKEN')
            ->maxLength('TOKEN', 255)
            ->allowEmptyString('TOKEN');

        $validator
            ->date('CREATED')
            ->allowEmptyDate('CREATED');

        $validator
            ->date('MODIFIED')
            ->allowEmptyDate('MODIFIED');

        return $validator;
    }
}
