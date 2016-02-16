<?php
App::uses('Sede', 'Model');

/**
 * Sede Test Case
 */
class SedeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sede',
		'app.user',
		'app.student',
		'app.user_tlf',
		'app.users_user_tlf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sede = ClassRegistry::init('Sede');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sede);

		parent::tearDown();
	}

}
