<?php

class Performance extends AppModel {

	var $name = 'Performance';
	var $validate = array(
		'contact_name' => array('rule' => 'notEmpty'),
		'contact_email' => array('rule'=>'email', 'message' => 'Please enter a valid email address'),
		'contact_phone' => array('rule' => 'phone', 'message' => 'Please enter a valid phone number'),
		'description' => array('rule' => 'notEmpty'),
		'contact_description' => array('rule' => 'notEmpty'),
		'podium' => array('rule' => 'boolean', 'message' => 'Please select Yes or No'),
		'projection_received' => 'boolean',
		'audio_received' => 'boolean',
		'num_pianos' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'num_benches' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'num_music_stands' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'num_wireless_mics' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'num_body_mics' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'num_microphone_stands' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'performance_space' => array('rule' => 'notEmpty'),
		'title' => array('rule' => 'notEmpty'),
		'num_chairs' => array('rule' => 'numeric', 'message' => 'Please enter a number'),
		'lighting_type' => array('rule' => 'notEmpty'),
		'projection_type' => array('rule' => 'notEmpty'),
		'audio_type' => array('rule' => 'notEmpty')
	);

}

?>