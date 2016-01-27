<?php
App::uses('Materia', 'Model');

/**
 * Materia Test Case
 */
class MateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materia',
		'app.seccion',
		'app.aula',
		'app.horario',
		'app.seccione',
		'app.estudiante',
		'app.semestre',
		'app.user',
		'app.nota'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materia = ClassRegistry::init('Materia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materia);

		parent::tearDown();
	}

}
