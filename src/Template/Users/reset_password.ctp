<div class="users form">
    <?= $this->Flash->render('auth') ?>

    <div class="col-md-6 col-md-offset-3">
    
	    <?= $this->Form->create() ?>
	    <fieldset>
	        <legend><?= __('New Password') ?></legend>
	        <?= $this->Form->input('new_password', ['type' => 'password', 'value' => '']) ?>
	        <?= $this->Form->input('confirm_password', ['type' => 'password', 'value' => '']) ?>
	    </fieldset>
	    <?= $this->Form->button(__('Save')); ?>
	    <?= $this->Form->end() ?>

	</div>
</div>