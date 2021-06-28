<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeamPoints Controller
 *
 * @property \App\Model\Table\TeamPointsTable $TeamPoints
 *
 * @method \App\Model\Entity\TeamPoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeamPointsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'MatchRounds'],
        ];
        $teamPoints = $this->paginate($this->TeamPoints);

        $this->set(compact('teamPoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Team Point id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamPoint = $this->TeamPoints->get($id, [
            'contain' => ['Teams', 'MatchRounds'],
        ]);

        $this->set('teamPoint', $teamPoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamPoint = $this->TeamPoints->newEntity();
        if ($this->request->is('post')) {
            $teamPoint = $this->TeamPoints->patchEntity($teamPoint, $this->request->getData());
            if ($this->TeamPoints->save($teamPoint)) {
                $this->Flash->success(__('The team point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team point could not be saved. Please, try again.'));
        }
        $teams = $this->TeamPoints->Teams->find('list', ['limit' => 200]);
        $matchRounds = $this->TeamPoints->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('teamPoint', 'teams', 'matchRounds'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Team Point id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamPoint = $this->TeamPoints->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamPoint = $this->TeamPoints->patchEntity($teamPoint, $this->request->getData());
            if ($this->TeamPoints->save($teamPoint)) {
                $this->Flash->success(__('The team point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team point could not be saved. Please, try again.'));
        }
        $teams = $this->TeamPoints->Teams->find('list', ['limit' => 200]);
        $matchRounds = $this->TeamPoints->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('teamPoint', 'teams', 'matchRounds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Team Point id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamPoint = $this->TeamPoints->get($id);
        if ($this->TeamPoints->delete($teamPoint)) {
            $this->Flash->success(__('The team point has been deleted.'));
        } else {
            $this->Flash->error(__('The team point could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
