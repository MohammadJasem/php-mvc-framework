<?php

use app\core\form\Form;

?>

<h1>Login</h1>

<?php $form = Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email', 'text') ?>
    <?php echo $form->field($model, 'password', 'text')->passwordField() ?>
    <button class="btn btn-success">Submit</button>
<?php Form::end() ?>