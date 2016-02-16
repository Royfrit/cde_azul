<?php
App::uses('Schedule', 'Model');

/**
 * Schedule Test Case
 */
class ScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.schedule',
		'app.section',
		'app.subject',
		'app.user',
		'app.sede',
		'app.student',
		'app.user_tlf',
		'app.period',
		'app.sections_schedule',
		'app.students_section'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Schedule = ClassRegistry::init('Schedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Schedule);

		parent::tearDown();
	}

}
