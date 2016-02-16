<?php
App::uses('AppController', 'Controller');
/**
 * Sedes Controller
 *
 * @property Sede $Sede
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SedesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sede->recursive = 0;
		$this->set('sedes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
		$this->set('sede', $this->Sede->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sede->create();
			if ($this->Sede->save($this->request->data)) {
				$this->Flash->success(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sede could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sede->exists($id)) {
			throw new NotFoundException(__('Invalid sede'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sede->save($this->request->data)) {
				$this->Flash->success(__('The sede has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The sede could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sede.' . $this->Sede->primaryKey => $id));
			$this->request->data = $this->Sede->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sede->id = $id;
		if (!$this->Sede->exists()) {
			throw new NotFoundException(__('Invalid sede'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Sede->delete()) {
			$this->Flash->success(__('The sede has been deleted.'));
		} else {
			$this->Flash->error(__('The sede could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
