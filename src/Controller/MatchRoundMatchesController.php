<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MatchRoundMatches Controller
 *
 * @property \App\Model\Table\MatchRoundMatchesTable $MatchRoundMatches
 *
 * @method \App\Model\Entity\MatchRoundMatch[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MatchRoundMatchesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MatchRounds'],
        ];
        $matchRoundMatches = $this->paginate($this->MatchRoundMatches);

        $this->set(compact('matchRoundMatches'));
    }

    /**
     * View method
     *
     * @param string|null $id Match Round Match id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matchRoundMatch = $this->MatchRoundMatches->get($id, [
            'contain' => ['MatchRounds'],
        ]);

        $this->set('matchRoundMatch', $matchRoundMatch);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matchRoundMatch = $this->MatchRoundMatches->newEntity();
        if ($this->request->is('post')) {
            $matchRoundMatch = $this->MatchRoundMatches->patchEntity($matchRoundMatch, $this->request->getData());
            if ($this->MatchRoundMatches->save($matchRoundMatch)) {
                $this->Flash->success(__('The match round match has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match round match could not be saved. Please, try again.'));
        }
        $matchRounds = $this->MatchRoundMatches->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('matchRoundMatch', 'matchRounds'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Match Round Match id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matchRoundMatch = $this->MatchRoundMatches->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matchRoundMatch = $this->MatchRoundMatches->patchEntity($matchRoundMatch, $this->request->getData());
            if ($this->MatchRoundMatches->save($matchRoundMatch)) {
                $this->Flash->success(__('The match round match has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match round match could not be saved. Please, try again.'));
        }
        $matchRounds = $this->MatchRoundMatches->MatchRounds->find('list', ['limit' => 200]);
        $this->set(compact('matchRoundMatch', 'matchRounds'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Match Round Match id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matchRoundMatch = $this->MatchRoundMatches->get($id);
        if ($this->MatchRoundMatches->delete($matchRoundMatch)) {
            $this->Flash->success(__('The match round match has been deleted.'));
        } else {
            $this->Flash->error(__('The match round match could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
