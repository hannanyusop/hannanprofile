<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LoginLog Controller
 *
 * @property \App\Model\Table\LoginLogTable $LoginLog
 *
 * @method \App\Model\Entity\LoginLog[] paginate($object = null, array $settings = [])
 */
class LoginLogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $loginLog = $this->paginate($this->LoginLog);

        $this->set(compact('loginLog'));
        $this->set('_serialize', ['loginLog']);
    }

    /**
     * View method
     *
     * @param string|null $id Login Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $loginLog = $this->LoginLog->get($id, [
            'contain' => []
        ]);

        $this->set('loginLog', $loginLog);
        $this->set('_serialize', ['loginLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loginLog = $this->LoginLog->newEntity();
        if ($this->request->is('post')) {
            $loginLog = $this->LoginLog->patchEntity($loginLog, $this->request->getData());
            if ($this->LoginLog->save($loginLog)) {
                $this->Flash->success(__('The login log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login log could not be saved. Please, try again.'));
        }
        $this->set(compact('loginLog'));
        $this->set('_serialize', ['loginLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Login Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $loginLog = $this->LoginLog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $loginLog = $this->LoginLog->patchEntity($loginLog, $this->request->getData());
            if ($this->LoginLog->save($loginLog)) {
                $this->Flash->success(__('The login log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login log could not be saved. Please, try again.'));
        }
        $this->set(compact('loginLog'));
        $this->set('_serialize', ['loginLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Login Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $loginLog = $this->LoginLog->get($id);
        if ($this->LoginLog->delete($loginLog)) {
            $this->Flash->success(__('The login log has been deleted.'));
        } else {
            $this->Flash->error(__('The login log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
