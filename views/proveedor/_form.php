<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nom_prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuil_prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dir_prov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_prov')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
