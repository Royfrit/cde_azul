<?php
App::uses('AppController', 'Controller');
/**
 * Materias Controller
 *
 * @property Materia $Materia
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MateriasController extends AppController {

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
		$this->Materia->recursive = 0;
		$this->set('materias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException(__('Invalid materia'));
		}
		$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id));
		$this->set('materia', $this->Materia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Materia->create();
			if ($this->Materia->save($this->request->data)) {
				$this->Flash->success(__('The materia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The materia could not be saved. Please, try again.'));
			}
		}
		$seccions = $this->Materia->Seccion->find('list');
		$this->set(compact('seccions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Materia->exists($id)) {
			throw new NotFoundException(__('Invalid materia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Materia->save($this->request->data)) {
				$this->Flash->success(__('The materia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The materia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Materia.' . $this->Materia->primaryKey => $id));
			$this->request->data = $this->Materia->find('first', $options);
		}
		$seccions = $this->Materia->Seccion->find('list');
		$this->set(compact('seccions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Materia->id = $id;
		if (!$this->Materia->exists()) {
			throw new NotFoundException(__('Invalid materia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Materia->delete()) {
			$this->Flash->success(__('The materia has been deleted.'));
		} else {
			$this->Flash->error(__('The materia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
