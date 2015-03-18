<cake:nocache>
<h2>Schedule</h2>

<table>
	<tr>
		<th>Begin Time</th>
		<th>Title</th>
		<th>Description</th>
		<th>Contact Person</th>
		<th>Duration</th>
	</tr>
	
	<?php foreach ($performances as $performance): ?>
	<tr>
		<td><?php echo date('l, F j, g:i a', strtotime($performance['Performance']['begin_time'])); ?></td>
		<td><?php echo $performance['Performance']['title']; ?></td>
		<td><?php echo $performance['Performance']['description']; ?></td>
		<td><?php echo $performance['Performance']['contact_name']; ?></td>
		<td><?php echo (strtotime($performance['Performance']['end_time'])-strtotime($performance['Performance']['begin_time']))/60; ?> minutes</td>
	</tr>
	<?php endforeach; ?>
</table>
</cake:nocache>