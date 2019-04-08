<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">

	
<?= $this->Form->create($user) ?>
  <fieldset>
    <legend>Signup</legend>
    <div class="form-group">
<!--    <label for="exampleInputEmail1">Email</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
	<div class="col-lg-10">
	<?php echo $this->Form->control('email',['placeholder' => 'Enter your email', 'class' => 'form-group']); ?>
    </div>
	
    <div class="form-group">
<!--    <label for="exampleInputPhone1">Phone</label>
		<input type="number" name="phone" class="form-control" id="exampleInputPhone" placeholder="Phone"> -->

	<div class="col-lg-10">
	<?php echo $this->Form->control('phone',['placeholder' => 'Enter your phone', 'class' => 'form-group']); ?>
	</div>	
	
	<div class="col-lg-10">
<!--    <label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
	<?php echo $this->Form->control('password',['placeholder' => 'Enter your password', 'class' => 'form-group']); ?>
    </div>
 
    <?= $this->Form->button(__('Signup'), ['class' => 'btn btn-primary']) ?>
  </fieldset>
<?= $this->Form->end() ?>

	
</div>
