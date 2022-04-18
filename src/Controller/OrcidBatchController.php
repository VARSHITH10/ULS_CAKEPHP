<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrcidBatch Controller
 *
 * @property \App\Model\Table\OrcidBatchTable $OrcidBatch
 * @method \App\Model\Entity\OrcidBatch[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrcidBatchController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orcidBatch = $this->paginate($this->OrcidBatch);

        $this->set(compact('orcidBatch'));
    }

    /**
     * View method
     *
     * @param string|null $id Orcid Batch id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orcidBatch = $this->OrcidBatch->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orcidBatch'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orcidBatch = $this->OrcidBatch->newEmptyEntity();
        if ($this->request->is('post')) {
            $orcidBatch = $this->OrcidBatch->patchEntity($orcidBatch, $this->request->getData());
            if ($this->OrcidBatch->save($orcidBatch)) {
                $this->Flash->success(__('The orcid batch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orcid batch could not be saved. Please, try again.'));
        }
        $this->set(compact('orcidBatch'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orcid Batch id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orcidBatch = $this->OrcidBatch->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orcidBatch = $this->OrcidBatch->patchEntity($orcidBatch, $this->request->getData());
            if ($this->OrcidBatch->save($orcidBatch)) {
                $this->Flash->success(__('The orcid batch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orcid batch could not be saved. Please, try again.'));
        }
        $this->set(compact('orcidBatch'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orcid Batch id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orcidBatch = $this->OrcidBatch->get($id);
        if ($this->OrcidBatch->delete($orcidBatch)) {
            $this->Flash->success(__('The orcid batch has been deleted.'));
        } else {
            $this->Flash->error(__('The orcid batch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
