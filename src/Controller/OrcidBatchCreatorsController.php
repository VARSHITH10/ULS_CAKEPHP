<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrcidBatchCreators Controller
 *
 * @property \App\Model\Table\OrcidBatchCreatorsTable $OrcidBatchCreators
 * @method \App\Model\Entity\OrcidBatchCreator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrcidBatchCreatorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orcidBatchCreators = $this->paginate($this->OrcidBatchCreators);

        $this->set(compact('orcidBatchCreators'));
    }

    /**
     * View method
     *
     * @param string|null $id Orcid Batch Creator id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orcidBatchCreator = $this->OrcidBatchCreators->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orcidBatchCreator'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orcidBatchCreator = $this->OrcidBatchCreators->newEmptyEntity();
        if ($this->request->is('post')) {
            $orcidBatchCreator = $this->OrcidBatchCreators->patchEntity($orcidBatchCreator, $this->request->getData());
            if ($this->OrcidBatchCreators->save($orcidBatchCreator)) {
                $this->Flash->success(__('The orcid batch creator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orcid batch creator could not be saved. Please, try again.'));
        }
        $this->set(compact('orcidBatchCreator'));
    }

/**
 * enable method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function enable($id = null) {
    if (!$this->OrcidBatchCreators->exists($id)) {
        throw new NotFoundException(__('Invalid Administrator'));
    }
    $this->request->allowMethod('post', 'put');
    $options = array('recursive' => -1, 'conditions' => array('OrcidBatchCreators.' . $this->OrcidBatchCreators->primaryKey => $id));
    $creator = $this->OrcidBatchCreators->get('first', $options);
    $creator['OrcidBatchCreators']['flags'] = $creator['OrcidBatchCreators']['flags'] & ~ 1;
    if ($this->OrcidBatchCreators->save($creator)) {
        $this->Session->setFlash(__('The Administrator has been enabled.'), 'default', array('class' => 'success'));
        return $this->redirect(array('action' => 'index'));
    } else {
        $this->Session->setFlash(__('The Administrator could not be enabled. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
}

    /**
 * disable method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function disable($id = null) {
		$this->OrcidBatchCreator->id = $id;
		if (!$this->OrcidBatchCreator->exists()) {
			throw new NotFoundException(__('Invalid Administrator'));
		}
		$this->request->allowMethod('post', 'put', 'delete');
		$options = array('recursive' => -1, 'conditions' => array('OrcidBatchCreator.' . $this->OrcidBatchCreator->primaryKey => $id));
		$creator = $this->OrcidBatchCreator->find('first', $options);
		$creator['OrcidBatchCreator']['flags'] = $creator['OrcidBatchCreator']['flags'] | 1;
		if ($this->OrcidBatchCreator->save($creator)) {
			$this->Session->setFlash(__('The Administrator has been disabled.'), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('The Administrator could not be disabled. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * getUser method
 *
 * @param request $request
 * @return mixed User or FALSE
 */
	public function getUser($request) {
		$user = env('REMOTE_USER');
		$options = array('conditions' => array('OrcidBatchCreator.username' => $user));
		$creator = $this->OrcidBatchCreator->find('first', $options);
		return $creator['OrcidBatchCreator']['flags'] &  1 ? FALSE : $creator;
	}
}
