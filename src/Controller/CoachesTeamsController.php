<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoachesTeams Controller
 *
 * @property \App\Model\Table\CoachesTeamsTable $CoachesTeams
 *
 * @method \App\Model\Entity\CoachesTeam[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoachesTeamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Teams'],
        ];
        $coachesTeams = $this->paginate($this->CoachesTeams);

        $this->set(compact('coachesTeams'));
    }

    /**
     * View method
     *
     * @param string|null $id Coaches Team id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coachesTeam = $this->CoachesTeams->get($id, [
            'contain' => ['Users', 'Teams'],
        ]);

        $this->set('coachesTeam', $coachesTeam);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coachesTeam = $this->CoachesTeams->newEntity();
        if ($this->request->is('post')) {
            $coachesTeam = $this->CoachesTeams->patchEntity($coachesTeam, $this->request->getData());
            if ($this->CoachesTeams->save($coachesTeam)) {
                $this->Flash->success(__('The coaches team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coaches team could not be saved. Please, try again.'));
        }
        $users = $this->CoachesTeams->Users->find('list', ['limit' => 200]);
        $teams = $this->CoachesTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('coachesTeam', 'users', 'teams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coaches Team id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coachesTeam = $this->CoachesTeams->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coachesTeam = $this->CoachesTeams->patchEntity($coachesTeam, $this->request->getData());
            if ($this->CoachesTeams->save($coachesTeam)) {
                $this->Flash->success(__('The coaches team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coaches team could not be saved. Please, try again.'));
        }
        $users = $this->CoachesTeams->Users->find('list', ['limit' => 200]);
        $teams = $this->CoachesTeams->Teams->find('list', ['limit' => 200]);
        $this->set(compact('coachesTeam', 'users', 'teams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coaches Team id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coachesTeam = $this->CoachesTeams->get($id);
        if ($this->CoachesTeams->delete($coachesTeam)) {
            $this->Flash->success(__('The coaches team has been deleted.'));
        } else {
            $this->Flash->error(__('The coaches team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
