<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css(array('bootstrap/bootstrap',  'bootstrap/bootstrap-theme'));
		echo $this->Html->css(array('bootstrap/bootstrap', 'bootstrap/jumbotron-narrow', 'style.css'));
		echo $this->Html->script(array('jquery', 'bootstrap/bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
            <li class="<?php if ($this->Html->isPageActive('pages', 'display', 'welcome')): ?>active<?php endif; ?>"><a href="<?php echo $this->Html->url('/', true) ?>">Home</a></li>
            <li class="<?php if ($this->Html->isPageActive('pages', 'display', 'about')): ?>active<?php endif; ?>"><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'display', 'about')) ?></li>
            <li class="<?php if ($this->Html->isPageActive('pages', 'display', 'contact')): ?>active<?php endif; ?>"><?php echo $this->Html->link('Contact', array('controller' => 'pages', 'action' => 'display', 'contact')) ?></li>
            </ul>
            <h3 class="text-muted"><a href="<?php echo $this->Html->url('/', true) ?>">Asset Gramt</a></h3>
        </div>
<?php
        if (CakeSession::Check('Message.flash')) {
            echo "<div class=\"alert alert-info\">".$this->Session->flash()."</div>";
        }
?>
<?php echo $this->fetch('content'); ?>
        <div class="footer">
            <p>&copy; Dody Suria Wijaya 2014</p>
        </div>
    </div>
</body>
</html>
