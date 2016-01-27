<?php
/**
 * Nota Fixture
 */
class NotaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estudiante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'seccion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nota' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'materia_id' => 1,
			'estudiante_id' => 1,
			'seccion_id' => 1,
			'nota' => 1
		),
	);

}
