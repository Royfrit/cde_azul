<?php
App::uses('AppController', 'Controller');
/**
 * Sections Controller
 *
 * @property Section $Section
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SectionsController extends AppController {

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
		$this->Section->recursive = 0;
		$this->set('sections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
		$this->set('section', $this->Section->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {



		$co = 0;

		if (!empty($this->request->data)) {

			for ($i=1; $i < 3; $i++) {
					${'schedules'.$i}[] = array('day' => $this->request->data['Section']['day'.$i], 'classroom' => $this->request->data['Section']['classroom'.$i] , 'start' => $this->request->data['Section']['start'.$i], 'end' => $this->request->data['Section']['end'.$i]);
			}

					//debug($schedules1[0]['day']);
				if (($schedules1[0]['day']==0) && ($schedules1[0]['classroom']==0) && ($schedules1[0]['start']==0) && ($schedules1[0]['end']==0) && ($schedules2[0]['day']!=0) && ($schedules2[0]['classroom']!=0) && ($schedules2[0]['start']!=0) && ($schedules2[0]['end']!=0)) {
						$this->request->data['Section']['day'.'1']=$schedules2[0]['day'];
						$this->request->data['Section']['classroom'.'1']=$schedules2[0]['classroom'];
						$this->request->data['Section']['start'.'1']=$schedules2[0]['start'];
						$this->request->data['Section']['end'.'1']=$schedules2[0]['end'];
						$this->request->data['Section']['day'.'2']=0;
						$this->request->data['Section']['classroom'.'2']=0;
						$this->request->data['Section']['start'.'2']=0;
						$this->request->data['Section']['end'.'2']=0;
						for ($i=1; $i < 3; $i++) {
								${'schedules'.$i}[] = array('day' => $this->request->data['Section']['day'.$i], 'classroom' => $this->request->data['Section']['classroom'.$i] , 'start' => $this->request->data['Section']['start'.$i], 'end' => $this->request->data['Section']['end'.$i]);
								debug(${'schedules'.$i});
						}
					}elseif($schedules1[0]['day']==0){
						$this->Flash->success(__('Ingrese un Dia Porfavor.'));
					}elseif ($schedules1[0]['classroom']==0) {
						$this->Flash->success(__('Ingrese un Aula Porfavor.'));
					}elseif ($schedules1[0]['start']==0) {
						$this->Flash->success(__('Ingrese una Hora de Entrada Porfavor.'));
					}elseif ($schedules1[0]['end']==0) {
						$this->Flash->success(__('Ingrese una Hora de Salida Porfavor.'));
					}elseif ($schedules1[0]['start']>$schedules1[0]['end']) {
						$this->Flash->success(__('La hora de inicio es mayor a la hora de salida, Arregle ese Campo.'));
					}elseif ($schedules1[0]['start']==$schedules1[0]['end']) {
								$this->Flash->success(__('La hora de inicio es igual a la hora de salida, Arregle ese Campo.'));
					}elseif(($schedules2[0]['day']==0) && (($schedules2[0]['classroom']!=0) || ($schedules2[0]['start']!=0) || ($schedules2[0]['end']!=0) ) ){
						$this->Flash->success(__('Ingrese un Segundo dia Porfavor.'));
					}elseif (($schedules2[0]['classroom']==0) && (($schedules2[0]['day']!=0) || ($schedules2[0]['start']!=0) || ($schedules2[0]['end']!=0) )) {
						$this->Flash->success(__('Ingrese una Segunda Aula Porfavor.'));
					}elseif (($schedules2[0]['start']==0) && (($schedules2[0]['classroom']!=0) || ($schedules2[0]['day']!=0) || ($schedules2[0]['end']!=0) )) {
						$this->Flash->success(__('Ingrese una Segunda Hora de Entrada Porfavor.'));
					}elseif (($schedules2[0]['end']==0) && (($schedules2[0]['classroom']!=0) || ($schedules2[0]['start']!=0) || ($schedules2[0]['day']!=0) )) {
						$this->Flash->success(__('Ingrese una Segunda Hora de Salida Porfavor.'));
					}elseif (($schedules2[0]['start']>$schedules2[0]['end']) && (($schedules2[0]['classroom']!=0) || ($schedules2[0]['day']!=0))) {
						$this->Flash->success(__('La Segunda hora de inicio es mayor a la hora de salida, Arregle ese Campo.'));
					}elseif (($schedules2[0]['start']==$schedules2[0]['end']) && (($schedules2[0]['classroom']!=0) || ($schedules2[0]['day']!=0))) {
								$this->Flash->success(__('La Segunda hora de inicio es igual a la hora de salida, Arregle ese Campo.'));
					}	else {
							$co=1;
					}

		}

		if (($this->request->is('post') && ($co == 1)) ) {
			$this->Section->create();
			if ($this->Section->save($this->request->data)) {
				$this->Flash->success(__('La Seccion fue Creada.'));
				$lastsection_id = $this->Section->find('first', array(
					'order' => array('Section.created' => 'desc')));
					$co=2;
			} else {
				$this->Flash->error(__('La Seccion no fue Creada.'));
			}

		}
//debug($co);

	if ($co==2) {
		$this->Section->Schedule->create();
		if ($this->Section->Schedule->save($schedules1[0])) {
			$this->Flash->success(__('Rwar.'));
			$schedule1_id = $this->Section->Schedule->find('first', array(
			'order' => array('Schedule.created' => 'desc')));
				$co=3;

	}
}

if ($co==3) {

	if (!(($schedules2[0]['day']==0) && ($schedules2[0]['classroom']==0) && ($schedules2[0]['start']==0) && ($schedules2[0]['end']==0))) {
			$this->Section->Schedule->create();
		if ($this->Section->Schedule->save($schedules2[0])) {
			$this->Flash->success(__('Rwar2.'));
			$schedule2_id = $this->Section->Schedule->find('first', array(
			'order' => array('Schedule.created' => 'desc')));
			debug($schedule2_id);
			$co=4;
		}
}
}
if($co==4){

	debug($lastsection_id['Section']['id']);
	debug($schedule1_id);
	debug($schedule2_id);
	for ($i=1; $i < 3; $i++) {
		${'data'.$i} = array('section_id' => $lastsection_id['Section']['id'] , 'schedule_id' => ${'schedule'.$i.'_id'}['Schedule']['id']);
		debug(${'data'.$i});
		$this->Section->SectionsSchedule->create();
		$this->Section->SectionsSchedule->save(${'data'.$i});
		$co++;
	}

}
if ($co==5) {
	echo "hola 5";
}

if ($co==6) {
echo "hola 6";
}

	//debug($co);
	//debug($this->request->data);

		$subjects = $this->Section->Subject->find('list');
		$users = $this->Section->User->find('list', array(
        'conditions' => array('User.role' => 'Profesor')
    ));
		$periods = $this->Section->Period->find('list');
		$schedules = $this->Section->Schedule->find('list');
		$students = $this->Section->Student->find('list');
		//debug($users);
		$this->set(compact('subjects', 'users', 'periods', 'schedules', 'students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Section->exists($id)) {
			throw new NotFoundException(__('Invalid section'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Section->save($this->request->data)) {
				$this->Flash->success(__('The section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The section could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
			$this->request->data = $this->Section->find('first', $options);
		}
		$subjects = $this->Section->Subject->find('list');
		$users = $this->Section->User->find('list');
		$periods = $this->Section->Period->find('list');
		$schedules = $this->Section->Schedule->find('list');
		$students = $this->Section->Student->find('list');
		$this->set(compact('subjects', 'users', 'periods', 'schedules', 'students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Section->id = $id;
		if (!$this->Section->exists()) {
			throw new NotFoundException(__('Invalid section'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Section->delete()) {
			$this->Flash->success(__('The section has been deleted.'));
		} else {
			$this->Flash->error(__('The section could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



	public function superadd($id=null) {

		if ($this->request->is('post')) {
			$c = count($this->request->data['Seccion']['Students']);
		$dato = $this->request->data;
		for ($i=0; $i <$c ; $i++) {

			${'data'.$i} = array( 'section_id' => $dato['Seccion']['id'] , 'student_id' => $dato['Seccion']['Students'][$i]);
			debug(${'data'.$i});
			$this->Section->StudentsSection->create();
		if ($this->Section->StudentsSection->save(${'data'.$i})) {
				echo "rwar".$i;
			}
		}
		}




		$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $id));
	 	$sections = $this->Section->find('first', $options);
		$subjects = $this->Section->Subject->find('list');
		$users = $this->Section->User->find('all', array(
				'conditions' => array('User.role' => 'Estudiante')
		));
		$periods = $this->Section->Period->find('list');
		$schedules = $this->Section->Schedule->find('list');
		$students = $this->Section->Student->find('list');
		//debug($users);
		$this->set(compact('subjects', 'users', 'periods', 'schedules', 'students','sections','id'));
	}

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/Lee-Backend
	public function ownsec($id=null){

	 	$sections = $this->Section->find('all' ,array('conditions' => array('Section.user_id' => $id)));
	 	$subjects = $this->Section->Subject->find('list');

	 	$this->set(compact('sections','subjects','id'));
	}

	public function pdf_listas($id = null,$x = null,$r=null) {
    // increase memory limit in PHP 
    ini_set('memory_limit', '512M');
 
	$users = $this->Section->User->find('first'  , array('conditions' => array('User.id' => $id)));
	$options = array('conditions' => array('Section.' . $this->Section->primaryKey => $x));
	$sections = $this->Section->find('first', $options);

	$students = $this->Section->Student->find('all');
	$rwar= $this->Section->Note->find('all' , array('conditions' => array('Note.section_id' => $x)));
	$this->set(compact('id','users','sections','students','rwar'));

    

}
<<<<<<< HEAD
=======
=======
>>>>>>> origin/Lee-Backend
>>>>>>> origin/Lee-Backend


}
