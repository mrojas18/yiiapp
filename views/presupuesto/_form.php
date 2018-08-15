<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="presupuesto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cod_pre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_prov')->textInput() ?>
    
    <?= $form->field($model, 'fec_pre')->textInput() ?>

    <?= $form->field($model, 'vencimiento')->textInput() ?>

  

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
