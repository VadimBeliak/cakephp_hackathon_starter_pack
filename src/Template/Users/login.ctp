<div class="row">
	<div class="col-md"></div>
	<div class="col-md">
		<div class="card" style="top: 100px;">
			<div class="card-body">
				<h3 class="card-title text-center">Login</h3>
				<?= $this->Form->create() ?>
					<?= $this->Form->control('username', ['class' => 'form-control']) ?>
					<?= $this->Form->control('password', ['class' => 'form-control']) ?>
					<?= $this->Form->submit('Login', ['class' => 'btn btn-success btn-block btn-round margin-top']) ?>
				<?= $this->Form->end() ?>
				<a href="/cakephp_hackathon_starter_pack/users/register" class="margin-top">Sign Up</a>
			</div>
		</div>
	</div>
	<div class="col-md"></div>
</div>
