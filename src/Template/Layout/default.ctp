<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?= $cakeDescription ?>:
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('custom.css') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">

	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar">
		<a class="navbar-brand" href="#">Welcome</a>
		<?php if ($authUser): ?>
			<a class="btn pull-right" href="/cakephp_hackathon_starter_pack/users/logout">
				Log Out
			</a>
		<?php endif; ?>
	</nav>

	<?= $this->Flash->render() ?>

	<!-- Main Content -->
	<div class="container-fluid" id="mainContent">
		<?= $this->fetch('content') ?>
	</div>

</body>
</html>
