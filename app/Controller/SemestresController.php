<?php
App::uses('AppController', 'Controller');
/**
 * Semestres Controller
 *
 * @property Semestre $Semestre
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SemestresController extends AppController {

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
		$this->Semestre->recursive = 0;
		$this->set('semestres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Semestre->exists($id)) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		$options = array('conditions' => array('Semestre.' . $this->Semestre->primaryKey => $id));
		$this->set('semestre', $this->Semestre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Semestre->create();
			if ($this->Semestre->save($this->request->data)) {
				$this->Flash->success(__('The semestre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The semestre could not be saved. Please, try again.'));
			}
		}
		$materias = $this->Semestre->Materium->find('list');
		$this->set(compact('materias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Semestre->exists($id)) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Semestre->save($this->request->data)) {
				$this->Flash->success(__('The semestre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The semestre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Semestre.' . $this->Semestre->primaryKey => $id));
			$this->request->data = $this->Semestre->find('first', $options);
		}
		$materias = $this->Semestre->Materium->find('list');
		$this->set(compact('materias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Semestre->id = $id;
		if (!$this->Semestre->exists()) {
			throw new NotFoundException(__('Invalid semestre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Semestre->delete()) {
			$this->Flash->success(__('The semestre has been deleted.'));
		} else {
			$this->Flash->error(__('The semestre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
