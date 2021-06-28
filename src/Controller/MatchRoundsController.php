<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MatchRounds Controller
 *
 * @property \App\Model\Table\MatchRoundsTable $MatchRounds
 *
 * @method \App\Model\Entity\MatchRound[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatchRoundsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Matches'],
        ];
        $matchRounds = $this->paginate($this->MatchRounds);

        $this->set(compact('matchRounds'));
    }

    /**
     * View method
     *
     * @param string|null $id Match Round id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matchRound = $this->MatchRounds->get($id, [
            'contain' => ['Matches', 'MatchRoundMatches', 'PlayerPoints', 'TeamPoints'],
        ]);

        $this->set('matchRound', $matchRound);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matchRound = $this->MatchRounds->newEntity();
        if ($this->request->is('post')) {
            $matchRound = $this->MatchRounds->patchEntity($matchRound, $this->request->getData());
            if ($this->MatchRounds->save($matchRound)) {
                $this->Flash->success(__('The match round has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match round could not be saved. Please, try again.'));
        }
        $matches = $this->MatchRounds->Matches->find('list', ['limit' => 200]);
        $this->set(compact('matchRound', 'matches'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Match Round id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matchRound = $this->MatchRounds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matchRound = $this->MatchRounds->patchEntity($matchRound, $this->request->getData());
            if ($this->MatchRounds->save($matchRound)) {
                $this->Flash->success(__('The match round has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match round could not be saved. Please, try again.'));
        }
        $matches = $this->MatchRounds->Matches->find('list', ['limit' => 200]);
        $this->set(compact('matchRound', 'matches'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Match Round id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matchRound = $this->MatchRounds->get($id);
        if ($this->MatchRounds->delete($matchRound)) {
            $this->Flash->success(__('The match round has been deleted.'));
        } else {
            $this->Flash->error(__('The match round could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
