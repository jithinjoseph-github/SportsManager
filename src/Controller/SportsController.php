<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sports Controller
 *
 * @property \App\Model\Table\SportsTable $Sports
 *
 * @method \App\Model\Entity\Sport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sports = $this->paginate($this->Sports);

        $this->set(compact('sports'));
    }

    /**
     * View method
     *
     * @param string|null $id Sport id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sport = $this->Sports->get($id, [
            'contain' => ['Clubs', 'Matches', 'Teams', 'TrainingSchedules'],
        ]);

        $this->set('sport', $sport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sport = $this->Sports->newEntity();
        if ($this->request->is('post')) {
            $sport = $this->Sports->patchEntity($sport, $this->request->getData());
            if ($this->Sports->save($sport)) {
                $this->Flash->success(__('The sport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sport could not be saved. Please, try again.'));
        }
        $clubs = $this->Sports->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('sport', 'clubs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sport = $this->Sports->get($id, [
            'contain' => ['Clubs'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sport = $this->Sports->patchEntity($sport, $this->request->getData());
            if ($this->Sports->save($sport)) {
                $this->Flash->success(__('The sport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sport could not be saved. Please, try again.'));
        }
        $clubs = $this->Sports->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('sport', 'clubs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sport = $this->Sports->get($id);
        if ($this->Sports->delete($sport)) {
            $this->Flash->success(__('The sport has been deleted.'));
        } else {
            $this->Flash->error(__('The sport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
