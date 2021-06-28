<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TicketSales Controller
 *
 * @property \App\Model\Table\TicketSalesTable $TicketSales
 *
 * @method \App\Model\Entity\TicketSale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketSalesController extends AppController
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
        $ticketSales = $this->paginate($this->TicketSales);

        $this->set(compact('ticketSales'));
    }

    /**
     * View method
     *
     * @param string|null $id Ticket Sale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ticketSale = $this->TicketSales->get($id, [
            'contain' => ['Matches'],
        ]);

        $this->set('ticketSale', $ticketSale);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ticketSale = $this->TicketSales->newEntity();
        if ($this->request->is('post')) {
            $ticketSale = $this->TicketSales->patchEntity($ticketSale, $this->request->getData());
            if ($this->TicketSales->save($ticketSale)) {
                $this->Flash->success(__('The ticket sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket sale could not be saved. Please, try again.'));
        }
        $matches = $this->TicketSales->Matches->find('list', ['limit' => 200]);
        $this->set(compact('ticketSale', 'matches'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ticket Sale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ticketSale = $this->TicketSales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ticketSale = $this->TicketSales->patchEntity($ticketSale, $this->request->getData());
            if ($this->TicketSales->save($ticketSale)) {
                $this->Flash->success(__('The ticket sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ticket sale could not be saved. Please, try again.'));
        }
        $matches = $this->TicketSales->Matches->find('list', ['limit' => 200]);
        $this->set(compact('ticketSale', 'matches'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ticket Sale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ticketSale = $this->TicketSales->get($id);
        if ($this->TicketSales->delete($ticketSale)) {
            $this->Flash->success(__('The ticket sale has been deleted.'));
        } else {
            $this->Flash->error(__('The ticket sale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
