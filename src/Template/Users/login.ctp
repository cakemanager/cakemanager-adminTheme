<div class="users form">

    <?= $this->Flash->render('auth') ?>

    <div class="col-md-6 col-md-offset-3">

        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Login') ?></legend>
            <?= $this->Form->input('email') ?>
            <?= $this->Form->input('password', ['value' => '']) ?>
        </fieldset>
        <?= $this->Form->button(__('Login')); ?>
        <?= $this->Form->end() ?>
        <br>
        <?= $this->Html->link('Forgot password', ['action' => 'forgotPassword']); ?>

    </div>
</div>