<cake:nocache>
<h2>Control Panel</h2>
<?php echo $html->link('Log out', array('controller' => 'users', 'action'=>'logout'), null, 'Are you sure?'); ?>
<table>
	<tr>
		<th>Begin Time</th>
		<th>Title</th>
		<th>Contact Person</th>
		<th>Duration</th>
		<th>View</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	<?php foreach ($performances as $performance): ?>
	<tr>
		<td><?php echo date('l'./*', F j,'.*/' g:i a', strtotime($performance['Performance']['begin_time'])); ?></td>
		<td><?php echo $performance['Performance']['title']; ?></td>
		<td><?php echo $performance['Performance']['contact_name']; ?></td>
		<td><?php echo (strtotime($performance['Performance']['end_time'])-strtotime($performance['Performance']['begin_time']))/60; ?> minutes</td>
		<td><?php echo $html->link('View', array('controller' => 'performances', 'action' => 'view', $performance['Performance']['id'])); ?></td>
		<td><?php echo $html->link('Edit', array('action'=>'edit', $performance['Performance']['id'])); ?></td>
		<td><?php echo $html->link('Delete', array('action'=>'delete', $performance['Performance']['id']), null, 'Are you sure?'); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</cake:nocache>