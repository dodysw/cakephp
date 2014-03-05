<?php
	$this->Html->addCrumb('Properties');
?>
<div class="properties index">
	<p class="pull-right"><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> ' . __('Add new property'), array('action' => 'add'), array('class' => 'btn btn-default btn-sm btn-success', 'escape' => false)); ?></p>
	<h2><?php echo __('Properties'); ?></h2>
	<table class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_property_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($properties as $property): ?>
	<tr>
		<td><?php echo $this->Html->link(h($property['Property']['name']), array('action' => 'view', $property['Property']['id'])); ?></td>
		<td><?php echo h($property['Property']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($property['ParentProperty']['name'], array('controller' => 'properties', 'action' => 'view', $property['ParentProperty']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> ' . __('Edit'), array('action' => 'edit', $property['Property']['id']), array('class' => 'btn btn-default btn-xs btn-info', 'escape' => false)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove-circle"></span> ' . __('Delete'), array('action' => 'delete', $property['Property']['id']), array('class' => 'btn btn-default btn-xs btn-warning', 'escape' => false), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	<ul class="pagination">
	<?php
		echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'prev disabled', 'escape' => false));
		echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a', 'after' => ' <span class="sr-only">(current)</span>'));
		echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), null, array('tag' => 'li', 'disabledTag' => 'a', 'class' => 'next disabled', 'escape' => false));
	?>
	</ul>
</div>
