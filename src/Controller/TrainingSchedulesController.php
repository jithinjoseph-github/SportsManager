<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrainingSchedules Controller
 *
 * @property \App\Model\Table\TrainingSchedulesTable $TrainingSchedules
 *
 * @method \App\Model\Entity\TrainingSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrainingSchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Sports', 'Teams'],
        ];
        $trainingSchedules = $this->paginate($this->TrainingSchedules);

        $this->set(compact('trainingSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Training Schedule id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trainingSchedule = $this->TrainingSchedules->get($id, [
            'contain' => ['Users', 'Sports', 'Teams'],
        ]);

        $this->set('trainingSchedule', $trainingSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trainingSchedule = $this->TrainingSchedules->newEntity();
        if ($this->request->is('post')) {
            $trainingSchedule = $this->TrainingSchedules->patchEntity($trainingSchedule, $this->request->getData());
            if ($this->TrainingSchedules->save($trainingSchedule)) {
                $this->Flash->success(__('The training schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training schedule could not be saved. Please, try again.'));
        }
        $users = $this->TrainingSchedules->Users->find('list', ['limit' => 200]);
        $sports = $this->TrainingSchedules->Sports->find('list', ['limit' => 200]);
        $teams = $this->TrainingSchedules->Teams->find('list', ['limit' => 200]);
        $this->set(compact('trainingSchedule', 'users', 'sports', 'teams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Training Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trainingSchedule = $this->TrainingSchedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trainingSchedule = $this->TrainingSchedules->patchEntity($trainingSchedule, $this->request->getData());
            if ($this->TrainingSchedules->save($trainingSchedule)) {
                $this->Flash->success(__('The training schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The training schedule could not be saved. Please, try again.'));
        }
        $users = $this->TrainingSchedules->Users->find('list', ['limit' => 200]);
        $sports = $this->TrainingSchedules->Sports->find('list', ['limit' => 200]);
        $teams = $this->TrainingSchedules->Teams->find('list', ['limit' => 200]);
        $this->set(compact('trainingSchedule', 'users', 'sports', 'teams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Training Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trainingSchedule = $this->TrainingSchedules->get($id);
        if ($this->TrainingSchedules->delete($trainingSchedule)) {
            $this->Flash->success(__('The training schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The training schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
