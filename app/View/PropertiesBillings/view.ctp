<div class="propertiesBillings view">
<h2><?php echo __('Properties Billing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Type'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['billing_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Num'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['customer_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['period']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property'); ?></dt>
		<dd>
			<?php echo $this->Html->link($propertiesBilling['Property']['name'], array('controller' => 'properties', 'action' => 'view', $propertiesBilling['Property']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($propertiesBilling['PropertiesBilling']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Properties Billing'), array('action' => 'edit', $propertiesBilling['PropertiesBilling']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Properties Billing'), array('action' => 'delete', $propertiesBilling['PropertiesBilling']['id']), null, __('Are you sure you want to delete # %s?', $propertiesBilling['PropertiesBilling']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties Billings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Properties Billing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
	</ul>
</div>
