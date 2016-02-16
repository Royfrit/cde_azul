<?php
App::uses('Subject', 'Model');

/**
 * Subject Test Case
 */
class SubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subject',
		'app.section',
		'app.user',
		'app.sede',
		'app.student',
		'app.students_section',
		'app.user_tlf',
		'app.period',
		'app.schedule',
		'app.sections_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subject = ClassRegistry::init('Subject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subject);

		parent::tearDown();
	}

}
