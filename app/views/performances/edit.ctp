<cake:nocache>
<h2>Editing <?php echo $performance['Performance']['title']; ?></h2>
<?php

echo $form->create('Performance', array('action'=>'edit'));

echo $form->input('title');
echo $form->input('begin_time', array('label' => 'Start', 'type' => 'datetime', 'dateFormat' => 'DMY'));
echo $form->input('end_time', array('label' => 'End', 'type' => 'datetime', 'dateFormat' => 'DMY'));
echo $form->input('contact_name');
echo $form->input('contact_email');
echo $form->input('contact_phone');
echo $form->input('description', array('rows' => 4));
echo $form->input('performer_provided', array('rows' => 4, 'label'=>'Equipment provided by performer'));
echo $form->input('performance_space', array('type'=>'select', 'options' => array('Downstage'=>'Downstage', 'Midstage'=>'Midstage', 'Upstage'=>'Upstage')));
echo $form->input('num_chairs');
echo $form->input('podium', array('type'=>'checkbox'));
echo $form->input('main_curtain_state', array('type'=>'select', 'options' => array('No preference'=>'No preference', 'Open'=>'Open', 'Closed'=>'Closed', 'Cued'=>'Cued')));
echo $form->input('midstage_curtain_state', array('type'=>'select', 'options' => array('No preference'=>'No preference', 'Open'=>'Open', 'Closed'=>'Closed', 'Cued'=>'Cued')));
echo $form->input('upstage_curtain_state', array('type'=>'select', 'options' => array('No preference'=>'No preference', 'Open'=>'Open', 'Closed'=>'Closed', 'Cued'=>'Cued')));
echo $form->input('lighting_type', array('type'=>'select', 'options'=>array('Basic Wash'=>'Basic Wash', 'Full Design'=>'Full Design')));
echo $form->input('num_followspots', array('label'=>'Number of Followspots'));
echo $form->input('lighting_specials', array('rows' => 4));
echo $form->input('num_wireless_mics', array('label'=>'Number of wireless handheld mics'));
echo $form->input('num_microphone_stands', array('label'=>'Number of mic stands'));
echo $form->input('num_body_mics', array('label'=>'Number of wireless body mics'));
echo $form->input('projection_type', array('type'=>'select', 'options'=>array('None'=>'None','Media File'=>'Media File','DVD'=>'DVD','Other'=>'Other (specify in Notes)')));
echo $form->input('projection_received', array('type'=>'checkbox'));
echo $form->input('audio_type', array('type'=>'select', 'options'=>array('None'=>'None','Media File'=>'Media File','CD'=>'CD','Other'=>'Other (specify in Notes)')));
echo $form->input('audio_received', array('type'=>'checkbox'));
echo $form->input('num_pianos');
echo $form->input('num_benches');
echo $form->input('num_music_stands');
echo $form->input('notes', array('rows' => 4));
echo $form->input('live', array('label' => 'Display on Schedule', 'type' => 'checkbox'));

echo $form->end('Save Performance');


?>
</cake:nocache>