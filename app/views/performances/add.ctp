<h2>Register Your Performance</h2>

<p>Use this form to register your performance with our staff to be sure all of your technical needs will be attended to.  All Festival performances must fill out a copy of this form.  You must obtain approval from Stan before filling out this form.  You will see your show appear under the Schedule tab in a few days.</p>
<p>If you have technical problems, contact Ben Burwell.  For performance questions, contact Eric Falcon or Rachel Cantlay.</p>

<?php echo $form->create('Performance'); ?>

<?php

// Title
echo $form->input('title');

// Contact Name
echo $form->input('contact_name');

// Contact Email
echo $form->input('contact_email');

// Contact Phone
echo $form->input('contact_phone');

// Description
echo $form->input('description', array(
	'rows' => 4,
	'label' => 'Description of performance'
));

// Equipment provided
echo $form->input('performer_provided', array(
	'rows' => 4,
	'label'=>'Equipment provided by performer'
));

// Performance Space
echo $form->input('performance_space', array(
	'type'=>'select',
	'options' => array(
		'Downstage' => 'Downstage',
		'Midstage' => 'Midstage',
		'Full Stage' => 'Full Stage'
	)
));

// Number of folding chairs
echo $form->input('num_chairs', array(
	'label' => 'Number of folding chairs'
));

// Podium
echo $form->input('podium', array(
	'type' => 'checkbox',
	'label' => 'Podium on stage'
));

// Lighting type
echo $form->input('lighting_type', array(
	'type' => 'select',
	'options' => array(
		'Basic Wash' => 'Basic Wash',
		'Full Design' => 'Full Design'
	),
	'label' => 'Lighting (select Basic Wash if you are unsure)'
));

// Wireless mics
echo $form->input('num_wireless_mics', array(
	'label' => 'Number of wireless handheld mics'
));

// Number of mic stands
echo $form->input('num_microphone_stands', array(
	'label' => 'Number of mic stands'
));

// number of body mics
echo $form->input('num_body_mics', array(
	'label' => 'Number of wireless body mics'
));

// Projection
echo $form->input('projection_type', array(
	'type' => 'select',
	'options' => array(
		'None' => 'None',
		'Media File' => 'Media File',
		'DVD' => 'DVD',
		'Other' => 'Other (specify in Notes)'
	)
));

// Audio
echo $form->input('audio_type', array(
	'type' => 'select',
	'options' => array(
		'None' => 'None',
		'Media File' => 'Media File',
		'CD' => 'CD',
		'Other' => 'Other (specify in Notes)'
	)
));

// Pianos
echo $form->input('num_pianos', array(
	'label' => 'Number of pianos'
));

// Benches
echo $form->input('num_benches', array(
	'label' => 'Number of piano benches'
));

// Music stands
echo $form->input('num_music_stands', array(
	'label' => 'Number of music stands'
));

// Notes
echo $form->input('notes', array(
	'rows' => 4
));

?>

<?php echo $form->end('Save Performance'); ?>