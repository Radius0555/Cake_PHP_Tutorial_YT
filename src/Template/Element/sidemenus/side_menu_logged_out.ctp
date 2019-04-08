<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
		
        <li><?= $this->Html->link(__('Change Password'), ['controller'=>'users','action' => 'change_password']) ?></li>
		
		<li><?= $this->Html->link(__('List Users'), ['controller'=>'users','action' => 'index']) ?></li>
		
        <li><?= $this->Html->link(__('About Us'), ['controller'=>'users','action' => 'login']) ?></li>
		
        <li><?= $this->Html->link(__('Contact Us'), ['controller'=>'users','action' => 'login']) ?></li>
    </ul>
</nav>