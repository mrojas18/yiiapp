<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PresupuestoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuesto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pre') ?>

    <?= $form->field($model, 'cod_pre') ?>

    <?= $form->field($model, 'id_prov') ?>

    <?= $form->field($model, 'fec_pre') ?>

    <?= $form->field($model, 'vencimiento') ?>

    <?php // echo $form->field($model, 'fecha_reg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
