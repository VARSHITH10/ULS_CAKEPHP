<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrcidUsers Controller
 *
 * @property \App\Model\Table\OrcidUsersTable $OrcidUsers
 * @method \App\Model\Entity\OrcidUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrcidUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orcidUsers = $this->paginate($this->OrcidUsers);

        $this->set(compact('orcidUsers'));
    }
    
    /**
 * find method
 *
 * @param string $download file format
 * @return void
 */
	public function find() {
		$this->OrcidUser->recursive = 0;
		$this->OrcidBatchGroups = $this->fetchTable('OrcidBatchGroups');
		$this->OrcidStatusTypes =  $this->fetchTable('OrcidStatusTypes');
		$findTypes = array(0 => __('Containing'), 1 => __('Starting With'), 2 => __('Ending With'), 3 => __('Matching Exactly'));
		$options = $this->_parameterize();
		$this->set('findTypes', $findTypes);
		$orcidBatchGroups = $this->OrcidBatchGroups->find('list');
		$orcidBatchGroups[-1] = __('No Group Membership');
		$this->set('orcidBatchGroups', $orcidBatchGroups);
		$this->set('orcidStatusTypes', $this->OrcidStatusTypes->find('list'));
		$this->set('orcidUsers', $this->Paginator->paginate($this->OrcidUsers, $options));
	}


    /**
     * View method
     *
     * @param string|null $id Orcid User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orcidUser = $this->OrcidUsers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orcidUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orcidUser = $this->OrcidUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $orcidUser = $this->OrcidUsers->patchEntity($orcidUser, $this->request->getData());
            if ($this->OrcidUsers->save($orcidUser)) {
                $this->Flash->success(__('The orcid user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orcid user could not be saved. Please, try again.'));
        }
        $this->set(compact('orcidUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orcid User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orcidUser = $this->OrcidUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orcidUser = $this->OrcidUsers->patchEntity($orcidUser, $this->request->getData());
            if ($this->OrcidUsers->save($orcidUser)) {
                $this->Flash->success(__('The orcid user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orcid user could not be saved. Please, try again.'));
        }
        $this->set(compact('orcidUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orcid User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orcidUser = $this->OrcidUsers->get($id);
        if ($this->OrcidUsers->delete($orcidUser)) {
            $this->Flash->success(__('The orcid user has been deleted.'));
        } else {
            $this->Flash->error(__('The orcid user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


 /**
     * Optout method
     *
     * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function optout($id = null)
    {
        if ($OrcidUsers){
        ($this->OrcidUsers->exists($id));
			throw new NotFoundException(__('Invalid ORCID User'));
		}
        
        if ($this->request->is(array('post', 'put'))) {
            $this->OrcidStatuses = TableRegistry::getTableLocator()('OrcidStatus');
			$this->OrcidStatusTypes = TableRegistry::getTableLocator()('OrcidStatusType');
			$optOutStatusTypes = $this->OrcidStatusTypes->find('first', array('recursive' => -1, 'conditions' => array('OrcidStatusTypes.seq' => 5)));
			if ($this->OrcidStatus->find('first', array('conditions' => array('orcid_user_id' => $id, 'orcid_status_type_id' => $optOutStatusTypes['OrcidStatusTypes']['id'])))) {
				$this->Session->setFlash(__('The ORCID User has already opted out.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->OrcidStatuses->create();
			$optOutStatuses = array(
				'orcid_user_id' => $id,
				'orcid_status_type_id' => $optOutStatusTypes['OrcidStatusTypes']['id'],
				'status_timestamp' => date('Y-m-d H:i:s'),
			);
			if ($this->OrcidStatuses->save($optOutStatuses)) {
				$this->Session->setFlash(__('The ORCID Opt-out has been saved.'), 'default', array('class' => 'success'));
			} else {
				$this->Session->setFlash(__('The ORCID Opt-out could not be saved. Please, try again.'));
			}
		}
		return $this->redirect(array('action' => 'index'));
   }    

/**
 * parameterize method
 *
 * @return array
 */
private function _parameterize() {
    $options = array();
    // query by string matching
    if ($this->request->getQuery('q')) {
        $options = array('OR' => array(
            'username'.($this->request->getQuery('s') == 3 ? '' : ' LIKE') => strtoupper($this->request->getQuery('q')) ? ($this->request->getQuery('s') == 2 || $this->request->getQuery('s') == 0 ? '%' : '').strtoupper($this->request->getQuery('q')).($this->request->getQuery('s') == 1 || $this->request->getQuery('s') == 0 ? '%' : '') : '',
            'orcid'.($this->request->getQuery('s') == 3 ? '' : ' LIKE') => $this->request->getQuery('q') ? ($this->request->getQuery('s') == 2 || $this->request->getQuery('s') == 0 ? '%' : '').$this->request->getQuery('q').($this->request->getQuery('s') == 1 || $this->request->getQuery('s') == 0 ? '%' : '') : ''
            )
        );
    }
    // query by group
    if (!$this->OrcidBathGroup) {
        $this->OrcidBatchGroup = $this->fetchTable('OrcidBatchGroups');
    }
    if ($this->request->getQuery('g')) {
        $members = $this->OrcidBatchGroup->getAssociatedUsers( intval($this->request->getQuery('g')), 'OrcidUser.'.$this->OrcidUser->primaryKey );
        $options[] = $members;
    }
    // if no query specified, return nothing
    if (!$options) {
        $options = array('id' => -1);
    }
    return $options;
}

}
?>