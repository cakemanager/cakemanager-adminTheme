<h3>Users</h3>

<?= $this->Html->link('All users', ['action' => 'index']) ?>

<hr>

<?php
    /*$config = [
        'inputContainer'      => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
        'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}{{error}}</div>',
        'error'               => '<div class="error-message text-danger">{{content}}</div>'
    ];
    $this->Form->templates($config);*/
?>

<?= $this->Form->create($user); ?>

<fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('active', ['type' => 'checkbox']);

    foreach ($customFields as $key => $field) {
        echo $this->Form->input($key, ($field ? $field : []));
    }

    echo $this->Form->input('role_id', ['options' => $roles]);
    ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
