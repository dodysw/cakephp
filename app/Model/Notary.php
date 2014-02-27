<?php
App::uses('AppModel', 'Model');
/**
 * Notary Model
 *
 * @property SaleDeed $SaleDeed
 */
class Notary extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'notary_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SaleDeed' => array(
			'className' => 'SaleDeed',
			'foreignKey' => 'notary_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
