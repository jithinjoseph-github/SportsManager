<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlayerPoints Controller
 *
 * @property \App\Model\Table\PlayerPointsTable $PlayerPoints
 *
 * @method \App\Model\Entity\PlayerPoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlayerPointsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'MatchRounds'],
        ];
        $playerPoints = $this->paginate($this->PlayerPoints);

        $this->set(compact('playerPoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Player Point id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $playerPoint = $this->PlayerPoints->get($id, [
            'contain' => ['Users', 'MatchRounds'],
        ]);

        $this->set('playerPoint', $playerPoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $playerPoint = $this->PlayerPoints->newEntity();
        if ($this->request->is('post')) {
            $playerPoint = $this->PlayerPoints->patchEntity($playerPoint, $this->request->getData());
            if ($this->PlayerPoints->save($playerPoint)) {
                $this->Flash->success(__('The player point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player point could not be saved. Please, try again.'));
        }
        $users = $this->PlayerPoints->Users->find('list', ['limit' => 200]);
        $matchRounds = $this->PlayerPoints->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('playerPoint', 'users', 'matchRounds'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Player Point id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $playerPoint = $this->PlayerPoints->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playerPoint = $this->PlayerPoints->patchEntity($playerPoint, $this->request->getData());
            if ($this->PlayerPoints->save($playerPoint)) {
                $this->Flash->success(__('The player point has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player point could not be saved. Please, try again.'));
        }
        $users = $this->PlayerPoints->Users->find('list', ['limit' => 200]);
        $matchRounds = $this->PlayerPoints->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('playerPoint', 'users', 'matchRounds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Player Point id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playerPoint = $this->PlayerPoints->get($id);
        if ($this->PlayerPoints->delete($playerPoint)) {
            $this->Flash->success(__('The player point has been deleted.'));
        } else {
            $this->Flash->error(__('The player point could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
