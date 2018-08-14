<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProveedorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'cod_prov') ?>

    <?= $form->field($model, 'nom_prov') ?>

    <?= $form->field($model, 'cuil_prov') ?>

    <?= $form->field($model, 'dir_prov') ?>

    <?php // echo $form->field($model, 'pro_prov') ?>

    <?php // echo $form->field($model, 'est_prov') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
