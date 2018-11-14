<div class="loginBackground"></div>
<div class="row ">
	<div class="col-sm"></div>
	<div class="col-sm loginModule">
		<h1 class=" text-center">Login</h1>
		<hr>
		<?= $this->Form->create() ?>
			<?= $this->Form->control('username', ['class' => 'form-control']) ?>
			<?= $this->Form->control('password', ['class' => 'form-control']) ?>
			<?= $this->Form->submit('Login', ['class' => 'btn btn-success btn-block margin-top-md']) ?>
		<?= $this->Form->end() ?>
		<a href="/cakephp_hackathon_starter_pack/users/register" class="margin-top-md">Sign Up</a>
	</div>
	<div class="col-sm"></div>
</div>
