<div class="users form">

    <?= $this->Flash->render('auth') ?>
    
	<div class="col-md-6 col-md-offset-3">

	    <?= $this->Form->create() ?>
	    <fieldset>
	        <legend><?= __('Request account') ?></legend>
	        <?= $this->Form->input('email') ?>
	    </fieldset>
	    <?= $this->Form->button(__('Request')); ?>
	    <?= $this->Form->end() ?>
	    <br>
	    <?= $this->Html->link('Login', ['action' => 'login']); ?>

	</div>
</div>