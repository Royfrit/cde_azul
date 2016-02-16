<?php
App::uses('AppController', 'Controller');
App::uses('Subject', 'Model');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
 public $components = array('Paginator', 'Flash', 'Session');

<<<<<<< HEAD

public function beforeFilter(){
parent::beforeFilter();
					 $this->Auth->allow('choose');
				}

				public function login(){
				 if ($this->request->is('post')){

					 if ($this->Auth->login()) {
						 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash('Correo y/o Contraseña invalidos', 'default', array('class'=> 'alert alert-danger'));

				 }


				}
=======
public function beforeFilter(){
parent::beforeFilter();
<<<<<<< HEAD
					 $this->Auth->allow('choose');
				}

				public function login(){
				 if ($this->request->is('post')){

					 if ($this->Auth->login()) {
						 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash('Correo y/o Contraseña invalidos', 'default', array('class'=> 'alert alert-danger'));

				 }
=======
					 $this->Auth->allow('add', 'edit','choose');

				}

				public function login(){
				 if ($this->request->is('post')){

					 if ($this->Auth->login()) {
						 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash('Correo y/o Contraseña invalidos', 'default', array('class'=> 'alert alert-danger'));
>>>>>>> origin/Lee-Backend

				 }

<<<<<<< HEAD
=======
>>>>>>> origin/Lee-Backend

>>>>>>> origin/Lee-Backend
				}

				public function logout(){
				 return $this->redirect($this->Auth->logout());

<<<<<<< HEAD
=======
				public function logout(){
				 return $this->redirect($this->Auth->logout());

>>>>>>> origin/Lee-Backend
				}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());

		$students=$this->User->Student->find('all');
		$this->set(compact('students'));
	}

/*
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
*/

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			$this->request->data['User']['status'] = '1';
			$co='1';

			if ($this->User->save($this->request->data)) {
<<<<<<< HEAD
				$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-success'));
=======
<<<<<<< HEAD
				$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-success'));
=======
				$this->Flash->success(__('El Usuario fue Creado'));
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
				$last_id = $this->User->find('first', array(
					'order' => array('User.created' => 'desc')));
				if ($last_id['User']['role'] == 'Estudiante') {
					$co=2;
				}else{
<<<<<<< HEAD
					return $this->redirect(array('action' => 'mainmenu'));
=======
<<<<<<< HEAD
					return $this->redirect(array('action' => 'mainmenu'));
=======
					return $this->redirect(array('action' => 'index'));
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
				}


			} else {
<<<<<<< HEAD
				$this->Session->setFlash('El Usuario no Pudo ser Grabado', 'default', array('class' => 'alert alert-danger'));

			}

			if ($co=='2') {

				$last_id = $this->User->find('first', array(
					'order' => array('User.created' => 'desc')));
				$students[] = array('user_id' => $last_id['User']['id'],'cohort' => $this->request->data['User']['cohort']);

=======
<<<<<<< HEAD
				$this->Session->setFlash('El Usuario no Pudo ser Grabado', 'default', array('class' => 'alert alert-danger'));

			}

			if ($co=='2') {

				$last_id = $this->User->find('first', array(
					'order' => array('User.created' => 'desc')));
				$students[] = array('user_id' => $last_id['User']['id'],'cohort' => $this->request->data['User']['cohort']);

				$this->User->Student->create();
				$this->User->create();

				if ($this->User->Student->save($students[0])) {
					return $this->redirect(array('action' => 'index'));
				}
			}

=======
				$this->Flash->error(__('El Usuario fue Guardado'));
			}

			if ($co=='2') {
			debug($co);
				debug($this->request->data);
				$last_id = $this->User->find('first', array(
					'order' => array('User.created' => 'desc')));
				$students[] = array('user_id' => $last_id['User']['id'],'cohort' => $this->request->data['User']['cohort']);
				debug($students[0]);
>>>>>>> origin/Lee-Backend
				$this->User->Student->create();
				$this->User->create();

				if ($this->User->Student->save($students[0])) {
<<<<<<< HEAD
					return $this->redirect(array('action' => 'mainmenu'));
				}
			}

		}
		
=======
					$this->Flash->success(__('Funciono'));
					return $this->redirect(array('action' => 'index'));
				}
			}

>>>>>>> origin/Lee-Backend
		}
>>>>>>> origin/Lee-Backend
		$sedes = $this->User->Sede->find('list');
		$this->set(compact('sedes', 'userTlves'));
	}

<<<<<<< HEAD
	public function pswchange($id = null) {
=======
<<<<<<< HEAD
	public function pswchange($id = null) {
=======
	public function edit($id = null) {
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
<<<<<<< HEAD
				$this->Session->setFlash('Las Credenciales se actualizaron', 'default', array('class' => 'alert alert-success'));
	
				return $this->redirect(array('action' => 'mainmenu'));
			} else {
				$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-danger'));
	
=======
<<<<<<< HEAD
				$this->Session->setFlash('Las Credenciales se actualizaron', 'default', array('class' => 'alert alert-success'));
	
				return $this->redirect(array('action' => 'mainmenu'));
			} else {
				$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-danger'));
	
=======
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			
		}
		$sedes = $this->User->Sede->find('list');
		$userTlves = $this->User->UserTlf->find('list');
		$this->set(compact('sedes', 'userTlves'));
	}

	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
<<<<<<< HEAD
			$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-success'));
	
=======
<<<<<<< HEAD
			$this->Session->setFlash('El Usuario fue Grabado.', 'default', array('class' => 'alert alert-success'));
	
=======
			$this->Flash->success(__('The user has been deleted.'));
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/Lee-Backend
public function mainmenu(){
$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());

		$students=$this->User->Student->find('all');
		$section=$this->User->Student->Section->find('all');
		$this->set(compact('students','section'));

}
	public function choose()
		{
						
						if ($this->request->is(array('post', 'put'))) {
							if ($this->User->save($this->request->data)) {
								$this->Session->setFlash('Usuario Creado', 'default', array('class' => 'alert alert-success'));
								return $this->redirect(array('action' => 'login'));
							} else {
								$this->Session->setFlash('Error.', 'default', array('class' => 'alert alert-danger'));
<<<<<<< HEAD
=======
=======
	public function choose()
		{
						//debug($this->request->data);
						if ($this->request->is(array('post', 'put'))) {
							if ($this->User->save($this->request->data)) {
								$this->Flash->success(__('El Usuario fue Creado.'));
								return $this->redirect(array('action' => 'login'));
							} else {
								$this->Flash->error(__('Error'));
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend
							}
						}

			$search = null;
			if((!empty($this->request->query['search'])))
			{
			$search = $this->request->query['search'];
				// preg_replace, lo que hace este metodo , es realizar una busqueda y sustitucion de un valor especial, '' patron a remplazar que no es ninguno, y usamos en la search que es lo que viene de la consulta.
				$search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
				$terms = explode(' ', trim($search));
				$terms = array_diff($terms, array(''));

				foreach($terms as $term)
				{
					$terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
					$conditions[] = array('User.ced LIKE' => '%' . $term . '%');
				}
				$users = $this->User->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
				if(count($users) == 1)
				{
									$options = array('conditions' => array('User.' . $this->User->primaryKey => $users[0]['User']['id']));
									$this->request->data = $this->User->find('first', $options);
				}
				$terms1 = array_diff($terms1, array(''));
				//mandar los datos , los valores de nuestra busqueda terms1
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
				//debug($users[0]['User']);
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend

				$this->set(compact('users', 'terms1'));

			}
			$this->set(compact('search'));



			if($this->request->is('ajax'))
			{
				$this->layout = false;
			$this->set('ajax', 1);
			}
			else
			{
				$this->set('ajax', 0);
			}

		}


}
