<?php
	$this->Html->addCrumb('Properties', '/properties');
	$this->Html->addCrumb(h($property['Property']['name']));
?>
<div class="properties view">
<h2><?php echo __('Property') . ' ' . h($property['Property']['name']); ?></h2>
<p><?php echo h($property['Property']['description']); ?></p>
<?php if ($property['ParentProperty']['id']): ?>
<p>This property is listed under: <strong><?php echo $this->Html->link($property['ParentProperty']['name'], array('controller' => 'properties', 'action' => 'view', $property['ParentProperty']['id'])); ?></strong>.</p>
<?php else: ?>
<p>This property is a top level property.</p>
<?php endif; ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Certificates'); ?></h3>
	<?php if (!empty($property['BpnCertificate'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cert Num'); ?></th>
		<th><?php echo __('Cert Num Full'); ?></th>
		<th><?php echo __('Province'); ?></th>
		<th><?php echo __('Regency'); ?></th>
		<th><?php echo __('District'); ?></th>
		<th><?php echo __('Village'); ?></th>
		<th><?php echo __('Ownership Type'); ?></th>
		<th><?php echo __('Area'); ?></th>
		<th><?php echo __('Owner Name'); ?></th>
		<th><?php echo __('Property Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($property['BpnCertificate'] as $bpnCertificate): ?>
		<tr>
			<td><?php echo $bpnCertificate['id']; ?></td>
			<td><?php echo $bpnCertificate['cert_num']; ?></td>
			<td><?php echo $bpnCertificate['cert_num_full']; ?></td>
			<td><?php echo $bpnCertificate['province']; ?></td>
			<td><?php echo $bpnCertificate['regency']; ?></td>
			<td><?php echo $bpnCertificate['district']; ?></td>
			<td><?php echo $bpnCertificate['village']; ?></td>
			<td><?php echo $bpnCertificate['ownership_type']; ?></td>
			<td><?php echo $bpnCertificate['area']; ?></td>
			<td><?php echo $bpnCertificate['owner_name']; ?></td>
			<td><?php echo $bpnCertificate['property_id']; ?></td>
			<td><?php echo $bpnCertificate['created_by']; ?></td>
			<td><?php echo $bpnCertificate['created']; ?></td>
			<td><?php echo $bpnCertificate['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bpn_certificates', 'action' => 'view', $bpnCertificate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bpn_certificates', 'action' => 'edit', $bpnCertificate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bpn_certificates', 'action' => 'delete', $bpnCertificate['id']), null, __('Are you sure you want to delete # %s?', $bpnCertificate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add', $property['Property']['id'])); ?> </li>
		</ul>
	</div>
</div>
