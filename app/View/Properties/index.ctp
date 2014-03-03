<div class="properties index">
	<h2><?php echo __('Properties'); ?></h2>
	<table class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('loc_long'); ?></th>
			<th><?php echo $this->Paginator->sort('loc_lat'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($properties as $property): ?>
	<tr>
		<td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['name']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($property['ParentProperty']['name'], array('controller' => 'properties', 'action' => 'view', $property['ParentProperty']['id'])); ?>
		</td>
		<td><?php echo h($property['Property']['loc_long']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['loc_lat']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['created']); ?>&nbsp;</td>
		<td><?php echo h($property['Property']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $property['Property']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $property['Property']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('controller' => 'bpn_certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
