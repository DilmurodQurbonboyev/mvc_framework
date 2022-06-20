<?php
/**
 * @var $model User
 */
?>

    <h1>Login</h1>

<?php

use app\core\form\Form;
use app\models\User;

?>

<?php $form = Form::begin('', "post") ?>

    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password') ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end() ?>