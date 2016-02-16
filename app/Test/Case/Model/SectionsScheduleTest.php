<?php
App::uses('SectionsSchedule', 'Model');

/**
 * SectionsSchedule Test Case
 */
class SectionsScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sections_schedule',
		'app.sections',
		'app.schedules'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SectionsSchedule = ClassRegistry::init('SectionsSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SectionsSchedule);

		parent::tearDown();
	}

}
