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
		echo $this->Html->css(array('bootstrap/bootstrap', 'bootstrap/jumbotron', 'style.css'));
		echo $this->Html->script(array('jquery', 'bootstrap/bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
				<a class="navbar-brand" href="<?php echo $this->Html->url('/', true) ?>">Asset Gramt</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="<?php if ($this->Html->isPageActive('pages', 'display', 'about')): ?>active<?php endif; ?>"><?php echo $this->Html->link('About', array('controller' => 'pages', 'action' => 'display', 'about')) ?></li>
					<li class="<?php if ($this->Html->isPageActive('pages', 'display', 'contact')): ?>active<?php endif; ?>"><?php echo $this->Html->link('Contact', array('controller' => 'pages', 'action' => 'display', 'contact')) ?></li>
				</ul>
<?php 
		$user = AuthComponent::user();
		if ($user) {
			echo '<form class="navbar-form navbar-right" action="' . $this->Html->url(array('controller' => 'users', 'action' => 'logout')) . '">';
			echo '<div class="form-group">';
			echo '<button class="btn btn-default btn-sm">Log out</button>';
			echo '</div>';
			echo '</form>';
			echo '<ul class="nav navbar-nav navbar-right">';
			echo '<li>';
			echo $this->Html->link(($user['fullname'] ? $user['fullname'] : $user['username']), array('controller' => 'users', 'action' => 'myaccount'), array('class' => 'navbar-link'));
			echo '</li>';
			echo '</ul>';
		} else {
			echo '<form class="navbar-form navbar-right" action="' . $this->Html->url(array('controller' => 'users', 'action' => 'login')) . '">';
			echo '<div class="form-group">';
			echo '<button class="btn btn-default btn-sm">Log in</button>';
			echo '</div>';
			echo '</form>';
		}
?>
			</div>
        </div>
	</nav>

    <div class="container">
<?php echo $this->Html->getCrumbList(array('class' => 'breadcrumb', 'lastClass' => 'active'), 'Home'); ?>
<?php
        if (CakeSession::Check('Message.flash')) {
            echo "<div class=\"alert alert-info\">".$this->Session->flash()."</div>";
        }
        if (CakeSession::Check('Message.auth')) {
            echo "<div class=\"alert alert-warning\">". $this->Session->flash('auth') . "</div>";
        }
?>
<?php echo $this->fetch('content'); ?>
        <div class="footer">
            <p>&copy; Dody Suria Wijaya 2014</p>
        </div>
    </div>
</body>
</html>
