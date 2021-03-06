<?php
App::uses('Horario', 'Model');

/**
 * Horario Test Case
 */
class HorarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.horario',
		'app.seccion',
		'app.aula',
		'app.materia',
		'app.estudiante',
		'app.semestre',
		'app.user',
		'app.nota',
		'app.seccione'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Horario = ClassRegistry::init('Horario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Horario);

		parent::tearDown();
	}

}
