<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ced' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'Fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'Direccion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tipotlf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'tlf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'sede' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'MyISAM')
	);

}
