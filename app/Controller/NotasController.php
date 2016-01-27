<?php
App::uses('AppController', 'Controller');
/**
 * Notas Controller
 *
 * @property Nota $Nota
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NotasController extends AppController {

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
		$this->Nota->recursive = 0;
		$this->set('notas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nota->exists($id)) {
			throw new NotFoundException(__('Invalid nota'));
		}
		$options = array('conditions' => array('Nota.' . $this->Nota->primaryKey => $id));
		$this->set('nota', $this->Nota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nota->create();
			if ($this->Nota->save($this->request->data)) {
				$this->Flash->success(__('The nota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nota could not be saved. Please, try again.'));
			}
		}
		$materias = $this->Nota->Materium->find('list');
		$estudiantes = $this->Nota->Estudiante->find('list');
		$seccions = $this->Nota->Seccion->find('list');
		$this->set(compact('materias', 'estudiantes', 'seccions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nota->exists($id)) {
			throw new NotFoundException(__('Invalid nota'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nota->save($this->request->data)) {
				$this->Flash->success(__('The nota has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The nota could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Nota.' . $this->Nota->primaryKey => $id));
			$this->request->data = $this->Nota->find('first', $options);
		}
		$materias = $this->Nota->Materium->find('list');
		$estudiantes = $this->Nota->Estudiante->find('list');
		$seccions = $this->Nota->Seccion->find('list');
		$this->set(compact('materias', 'estudiantes', 'seccions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nota->id = $id;
		if (!$this->Nota->exists()) {
			throw new NotFoundException(__('Invalid nota'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nota->delete()) {
			$this->Flash->success(__('The nota has been deleted.'));
		} else {
			$this->Flash->error(__('The nota could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
