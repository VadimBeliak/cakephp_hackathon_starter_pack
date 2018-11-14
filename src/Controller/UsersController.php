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
class UsersController extends AppController {

	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->Auth->allow(['login', 'register']);
	}

	public function isAuthorized($user)
	{
		// By default deny access.
		return true;
	}

	public function login(){
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				$this->Flash->success("Logged in as " . $user['full_name']);
				return $this->redirect(['action' => 'dashboard']);
			}
			$this->Flash->error('Your username or password is incorrect.');
		}
	}

	/**
	 * Destory the users session, throw notification, log user out and log it.
	 *
	 * @param bool $isAutomatic Was this logout automatically triggered
	 * @return Success - Redirect to root.
	 */
	public function logout($isAutomatic=false) {
		$this->request->getSession()->destroy();
		$this->Flash->default(__('You have been logged out.'));

		return $this->redirect($this->Auth->logout());
	}

	/**
	* Register Method
	*/
	public function register(){
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$data = $this->request->getData();
			$user = $this->Users->patchEntity($user, $data);
			$user['role_id'] = 2;

			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(['action' => 'login']);
			}
			$this->Flash->error(__('The user could not be saved. Please, try again.'));
		}
		$this->set(compact('user'));
	}

	/**
	*	Dashboard
	*/
	public function dashboard() {
		return;
	}
}
