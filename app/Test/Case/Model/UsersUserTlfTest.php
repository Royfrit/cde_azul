<?php
App::uses('UsersUserTlf', 'Model');

/**
 * UsersUserTlf Test Case
 */
class UsersUserTlfTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_user_tlf',
		'app.user',
		'app.sede',
		'app.student',
		'app.user_tlf'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersUserTlf = ClassRegistry::init('UsersUserTlf');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersUserTlf);

		parent::tearDown();
	}

}
