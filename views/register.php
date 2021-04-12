<?php

use app\core\form\Form;

$form = new Form();
?>

<h1>Register</h1>

<?php $form = Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname', 'text') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname', 'text') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email', 'text') ?>
    <?php echo $form->field($model, 'password', 'text')->passwordField() ?>
    <?php echo $form->field($model, 'passwordConfirm', 'text')->passwordField() ?>
    <button class="btn btn-success">Submit</button>
<?php Form::end() ?>