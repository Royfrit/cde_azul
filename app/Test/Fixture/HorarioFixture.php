<?php
/**
 * Horario Fixture
 */
class HorarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'seccion_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'aula_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'entrada' => array('type' => 'time', 'null' => false, 'default' => null),
		'salida' => array('type' => 'time', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'seccion_id' => 1,
			'aula_id' => 1,
			'materia_id' => 1,
			'entrada' => '20:16:34',
			'salida' => '20:16:34'
		),
	);

}
