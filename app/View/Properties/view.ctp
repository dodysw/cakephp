<div class="properties view">
<h2><?php echo __('Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($property['Property']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($property['Property']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Property Id'); ?></dt>
		<dd>
			<?php echo h($property['Property']['parent_property_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loc Long'); ?></dt>
		<dd>
			<?php echo h($property['Property']['loc_long']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loc Lat'); ?></dt>
		<dd>
			<?php echo h($property['Property']['loc_lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($property['Property']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($property['Property']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Property'), array('action' => 'edit', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Property'), array('action' => 'delete', $property['Property']['id']), null, __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Properties'), array('controller' => 'properties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Property'), array('controller' => 'properties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bpn Certificates'), array('controller' => 'bpn_certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bpn Certificates'); ?></h3>
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
			<li><?php echo $this->Html->link(__('New Bpn Certificate'), array('controller' => 'bpn_certificates', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
