<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoachesPlayers Controller
 *
 * @property \App\Model\Table\CoachesPlayersTable $CoachesPlayers
 *
 * @method \App\Model\Entity\CoachesPlayer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoachesPlayersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $coachesPlayers = $this->paginate($this->CoachesPlayers);

        $this->set(compact('coachesPlayers'));
    }

    /**
     * View method
     *
     * @param string|null $id Coaches Player id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coachesPlayer = $this->CoachesPlayers->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('coachesPlayer', $coachesPlayer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coachesPlayer = $this->CoachesPlayers->newEntity();
        if ($this->request->is('post')) {
            $coachesPlayer = $this->CoachesPlayers->patchEntity($coachesPlayer, $this->request->getData());
            if ($this->CoachesPlayers->save($coachesPlayer)) {
                $this->Flash->success(__('The coaches player has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coaches player could not be saved. Please, try again.'));
        }
        $users = $this->CoachesPlayers->Users->find('list', ['limit' => 200]);
        $this->set(compact('coachesPlayer', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coaches Player id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coachesPlayer = $this->CoachesPlayers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coachesPlayer = $this->CoachesPlayers->patchEntity($coachesPlayer, $this->request->getData());
            if ($this->CoachesPlayers->save($coachesPlayer)) {
                $this->Flash->success(__('The coaches player has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coaches player could not be saved. Please, try again.'));
        }
        $users = $this->CoachesPlayers->Users->find('list', ['limit' => 200]);
        $this->set(compact('coachesPlayer', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coaches Player id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coachesPlayer = $this->CoachesPlayers->get($id);
        if ($this->CoachesPlayers->delete($coachesPlayer)) {
            $this->Flash->success(__('The coaches player has been deleted.'));
        } else {
            $this->Flash->error(__('The coaches player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
