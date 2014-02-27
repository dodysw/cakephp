<div class="propertiesBillings index">
	<h2><?php echo __('Properties Billings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('billing_type'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_num'); ?></th>
			<th><?php echo $this->Paginator->sort('period'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($propertiesBillings as $propertiesBilling): ?>
	<tr>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['id']); ?>&nbsp;</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['billing_type']); ?>&nbsp;</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['customer_num']); ?>&nbsp;</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['period']); ?>&nbsp;</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($propertiesBilling['Property']['name'], array('controller' => 'properties', 'action' => 'view', $propertiesBilling['Property']['id'])); ?>
		</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['created']); ?>&nbsp;</td>
		<td><?php echo h($propertiesBilling['PropertiesBilling']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $propertiesBilling['PropertiesBilling']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $propertiesBilling['PropertiesBilling']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $propertiesBilling['PropertiesBilling']['id']), null, __('Are you sure you want to delete # %s?', $propertiesBilling['PropertiesBilling']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Properties Billing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
