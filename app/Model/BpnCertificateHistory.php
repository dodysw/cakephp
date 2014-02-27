<?php
App::uses('AppModel', 'Model');
/**
 * BpnCertificateHistory Model
 *
 * @property BpnCertificate $BpnCertificate
 */
class BpnCertificateHistory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'event_type';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BpnCertificate' => array(
			'className' => 'BpnCertificate',
			'foreignKey' => 'bpn_certificate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
