<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if ($this->Auth->user('role') === 0) {
            $this->render('manager');
        } else if ($this->Auth->user('role') === 1) {
            $this->render('organizer');
        } else if ($this->Auth->user('role') === 2) {
            $this->render('coach');
        } else {
            $this->render('player');
        }
    }
}
