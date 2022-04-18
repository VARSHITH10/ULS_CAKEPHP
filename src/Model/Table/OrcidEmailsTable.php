<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrcidEmails Model
 *
 * @method \App\Model\Entity\OrcidEmail newEmptyEntity()
 * @method \App\Model\Entity\OrcidEmail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidEmail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrcidEmail get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrcidEmail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrcidEmail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidEmail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrcidEmail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidEmail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrcidEmail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidEmail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidEmail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrcidEmail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrcidEmailsTable extends Table
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

        $this->setTable('orcid_emails');
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
            ->integer('ORCID_BATCH_ID')
            ->allowEmptyString('ORCID_BATCH_ID');

        $validator
            ->date('QUEUED')
            ->allowEmptyDate('QUEUED');

        $validator
            ->date('SENT')
            ->allowEmptyDate('SENT');

        $validator
            ->date('CANCELLED')
            ->allowEmptyDate('CANCELLED');

        return $validator;
    }
}
