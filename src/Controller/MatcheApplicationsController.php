<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MatcheApplications Controller
 *
 * @property \App\Model\Table\MatcheApplicationsTable $MatcheApplications
 *
 * @method \App\Model\Entity\MatcheApplication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatcheApplicationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Matches', 'Teams', 'Users'],
        ];
        $matcheApplications = $this->paginate($this->MatcheApplications);

        $this->set(compact('matcheApplications'));
    }

    /**
     * View method
     *
     * @param string|null $id Matche Application id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matcheApplication = $this->MatcheApplications->get($id, [
            'contain' => ['Matches', 'Teams', 'Users'],
        ]);

        $this->set('matcheApplication', $matcheApplication);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matcheApplication = $this->MatcheApplications->newEntity();
        if ($this->request->is('post')) {
            $matcheApplication = $this->MatcheApplications->patchEntity($matcheApplication, $this->request->getData());
            if ($this->MatcheApplications->save($matcheApplication)) {
                $this->Flash->success(__('The matche application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matche application could not be saved. Please, try again.'));
        }
        $matches = $this->MatcheApplications->Matches->find('list', ['limit' => 200]);
        $teams = $this->MatcheApplications->Teams->find('list', ['limit' => 200]);
        $users = $this->MatcheApplications->Users->find('list', ['limit' => 200]);
        $this->set(compact('matcheApplication', 'matches', 'teams', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Matche Application id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matcheApplication = $this->MatcheApplications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matcheApplication = $this->MatcheApplications->patchEntity($matcheApplication, $this->request->getData());
            if ($this->MatcheApplications->save($matcheApplication)) {
                $this->Flash->success(__('The matche application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The matche application could not be saved. Please, try again.'));
        }
        $matches = $this->MatcheApplications->Matches->find('list', ['limit' => 200]);
        $teams = $this->MatcheApplications->Teams->find('list', ['limit' => 200]);
        $users = $this->MatcheApplications->Users->find('list', ['limit' => 200]);
        $this->set(compact('matcheApplication', 'matches', 'teams', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Matche Application id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matcheApplication = $this->MatcheApplications->get($id);
        if ($this->MatcheApplications->delete($matcheApplication)) {
            $this->Flash->success(__('The matche application has been deleted.'));
        } else {
            $this->Flash->error(__('The matche application could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
