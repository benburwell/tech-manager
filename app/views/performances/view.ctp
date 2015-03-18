<cake:nocache>
<h2>
	<?php echo $performance['Performance']['title']; ?> - 
	<?php echo date('l g:i', strtotime($performance['Performance']['begin_time'])); ?> - 
	<?php echo (strtotime($performance['Performance']['end_time'])-strtotime($performance['Performance']['begin_time']))/60; ?> mins
</h2>

<div class="printhide">
<?php echo $html->link('Edit', array('controller' => 'performances', 'action' => 'edit', $performance['Performance']['id'])); ?> | 
<?php echo $html->link('Delete', array('action'=>'delete', $performance['Performance']['id']), null, 'Are you sure?'); ?>
<br /><br />
</div>

<table>
	<tr>
		<td>Event Begin Time</td>
		<td><?php echo date('l, F j, g:i a', strtotime($performance['Performance']['begin_time'])); ?></td>
	</tr>
	<tr>
		<td>Event End Time</td>
		<td><?php echo date('l, F j, g:i a', strtotime($performance['Performance']['end_time'])); ?></td>
	</tr>
	<tr>
		<td>Duration</td>
		<td><?php echo (strtotime($performance['Performance']['end_time'])-strtotime($performance['Performance']['begin_time']))/60; ?> minutes</td>
	</tr>
	<tr>
		<td>Contact Name</td>
		<td><?php echo $performance['Performance']['contact_name']; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo $performance['Performance']['contact_email']; ?></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><?php echo $performance['Performance']['contact_phone']; ?></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><?php echo $performance['Performance']['description']; ?></td>
	</tr>
	<tr>
		<td>Equipment provided</td>
		<td><?php echo $performance['Performance']['performer_provided']; ?></td>
	</tr>
	<tr>
		<td>Chairs</td>
		<td><?php echo $performance['Performance']['num_chairs']; ?></td>
	</tr>
	<tr>
		<td>Podium?</td>
		<td><?php echo ($performance['Performance']['podium'] == 1)? 'yes' : 'no'; ?></td>
	</tr>
	<tr>
		<td>Main curtain</td>
		<td><?php echo $performance['Performance']['main_curtain_state']; ?></td>
	</tr>
	<tr>
		<td>Midstage traveller</td>
		<td><?php echo $performance['Performance']['midstage_curtain_state']; ?></td>
	</tr>
	<tr>
		<td>Upstage curtain</td>
		<td><?php echo $performance['Performance']['upstage_curtain_state']; ?></td>
	</tr>
	<tr>
		<td>Lighting</td>
		<td><?php echo $performance['Performance']['lighting_type']; ?></td>
	</tr>
	<tr>
		<td>Followspots</td>
		<td><?php echo $performance['Performance']['num_followspots']; ?></td>
	</tr>
	<tr>
		<td>Lighting specials</td>
		<td><?php echo $performance['Performance']['lighting_specials']; ?></td>
	</tr>
	<tr>
		<td>Wireless Handheld mics</td>
		<td><?php echo $performance['Performance']['num_wireless_mics']; ?></td>
	</tr>
	<tr>
		<td>Wireless Body mics</td>
		<td><?php echo $performance['Performance']['num_body_mics']; ?></td>
	</tr>
	<tr>
		<td>Projection</td>
		<td><?php echo $performance['Performance']['projection_type']; ?>. Received: <?php echo ($performance['Performance']['projection_received'] == 1)? 'yes' : 'no'; ?></td>
	</tr>
	<tr>
		<td>Audio</td>
		<td><?php echo $performance['Performance']['audio_type']; ?>. Received: <?php echo ($performance['Performance']['audio_received'] == 1)? 'yes' : 'no'; ?></td>
	</tr>
	<tr>
		<td>Pianos</td>
		<td><?php echo $performance['Performance']['num_pianos']; ?></td>
	</tr>
	<tr>
		<td>Benches</td>
		<td><?php echo $performance['Performance']['num_benches']; ?></td>
	</tr>
	<tr>
		<td>Music Stands</td>
		<td><?php echo $performance['Performance']['num_music_stands']; ?></td>
	</tr>
	<tr>
		<td>Notes</td>
		<td><?php echo $performance['Performance']['notes']; ?></td>
	</tr>
	<tr>
		<td>Display on schedule</td>
		<td><?php echo ($performance['Performance']['live'] == 1)? 'Yes' : 'No'; ?></td>
	</tr>

</table>
</cake:nocache>