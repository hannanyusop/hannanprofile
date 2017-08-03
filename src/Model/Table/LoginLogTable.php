<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LoginLog Model
 *
 * @method \App\Model\Entity\LoginLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\LoginLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LoginLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LoginLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LoginLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LoginLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LoginLog findOrCreate($search, callable $callback = null, $options = [])
 */
class LoginLogTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('login_log');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('username');

        $validator
            ->dateTime('datetime')
            ->allowEmpty('datetime');

        $validator
            ->allowEmpty('ipaddress');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
