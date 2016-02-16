<?php
/**
 * Note Fixture
 */
class NoteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'period_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'note' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'student_id' => 1,
			'section_id' => 1,
			'period_id' => 1,
			'note' => 1
		),
	);

}
