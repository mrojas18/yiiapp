<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */

$this->title = "Actualizar Proveedor: {$model->cod_prov}";
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_prov, 'url' => ['view', 'id' => $model->id_prov]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proveedor-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
