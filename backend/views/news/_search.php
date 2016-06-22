<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker;
/* @var $this yii\web\View */
/* @var $model backend\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'new_title') ?>

<!--    --><?//= $form->field($model, 'new_content') ?>

    <?= $form->field($model, 'create_at')->widget(datetimepicker\DateTimePicker::className()) ?>

    <?= $form->field($model, 'update_at')->widget(datetimepicker\DateTimePicker::className()) ?>

    <?php // echo $form->field($model, 'announcer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
