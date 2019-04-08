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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
			<?php if($auth) { ?>
				
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">
					<?php echo $auth['User']['email']; ?>
				</a>
				</li>
                <li>
					<?php echo $this->Html->link('Logout', ['controller'=>'users','action'=>'logout']); ?>
				</li>
				
			<?php } else { ?>
			
			<li>
				<?php echo $this->HTML->link('Login', ['controller'=>'users', 'action'=>'logout']); ?>
			</li>
			<li>
				<?php echo $this->Html->link('Signup', ['controller'=>'users', 'action'=>'signup']); ?>
			</li>			
			<li>
				<?php echo $this->Html->link('Forgot Password', ['controller'=>'users', 'action'=>'forgotPassword']); ?>
			</li>
			<?php } ?>
				
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
	
	<?php
	if($auth)
	{
		$currentViewDetails = strtolower($inflector::singularize($this->name));
		
		if(isset($$currentViewDetailsId->user_id))
		{
			$currentViewDetailsId = $$currentViewDetails->user_id;
		}
		
		if($$currentViewDetails == 'User')
		{
			$currentViewDetailsId = $$currentViewDetails->id;
		}
		$isUserAuthorized = false;
		if(isset($$currentViewDetailsId) AND $$currentViewDetails->id == $auth['User']['id'])
		{
			$isUserAuthorized = true;
		}
		
		echo $this->element('sidemenus/side_menu_logged_in', ['viewName'=>$inflector::singularize($this->name.' quick brow fox')]); 
	}
	else
	{
		echo $this->element('sidemenus/side_menu_logged_out'); 	
	}
	?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
