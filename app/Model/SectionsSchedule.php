<?php
App::uses('AppModel', 'Model');
/**
 * SectionsSchedule Model
 *
 * @property Sections $Sections
 * @property Schedules $Schedules
 */
class SectionsSchedule extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sections_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'schedules_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sections' => array(
			'className' => 'Sections',
			'foreignKey' => 'sections_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Schedules' => array(
			'className' => 'Schedules',
			'foreignKey' => 'schedules_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
