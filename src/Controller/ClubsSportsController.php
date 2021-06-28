<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClubsSports Controller
 *
 * @property \App\Model\Table\ClubsSportsTable $ClubsSports
 *
 * @method \App\Model\Entity\ClubsSport[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClubsSportsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clubs', 'Sports'],
        ];
        $clubsSports = $this->paginate($this->ClubsSports);

        $this->set(compact('clubsSports'));
    }

    /**
     * View method
     *
     * @param string|null $id Clubs Sport id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clubsSport = $this->ClubsSports->get($id, [
            'contain' => ['Clubs', 'Sports'],
        ]);

        $this->set('clubsSport', $clubsSport);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clubsSport = $this->ClubsSports->newEntity();
        if ($this->request->is('post')) {
            $clubsSport = $this->ClubsSports->patchEntity($clubsSport, $this->request->getData());
            if ($this->ClubsSports->save($clubsSport)) {
                $this->Flash->success(__('The clubs sport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clubs sport could not be saved. Please, try again.'));
        }
        $clubs = $this->ClubsSports->Clubs->find('list', ['limit' => 200]);
        $sports = $this->ClubsSports->Sports->find('list', ['limit' => 200]);
        $this->set(compact('clubsSport', 'clubs', 'sports'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clubs Sport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clubsSport = $this->ClubsSports->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clubsSport = $this->ClubsSports->patchEntity($clubsSport, $this->request->getData());
            if ($this->ClubsSports->save($clubsSport)) {
                $this->Flash->success(__('The clubs sport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clubs sport could not be saved. Please, try again.'));
        }
        $clubs = $this->ClubsSports->Clubs->find('list', ['limit' => 200]);
        $sports = $this->ClubsSports->Sports->find('list', ['limit' => 200]);
        $this->set(compact('clubsSport', 'clubs', 'sports'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clubs Sport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clubsSport = $this->ClubsSports->get($id);
        if ($this->ClubsSports->delete($clubsSport)) {
            $this->Flash->success(__('The clubs sport has been deleted.'));
        } else {
            $this->Flash->error(__('The clubs sport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
