<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */

$this->title = 'Actualizar Presupuesto: ' . $model->cod_pre;
$this->params['breadcrumbs'][] = ['label' => 'Presupuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_pre, 'url' => ['view', 'id_pre' => $model->id_pre, 'cod_pre' => $model->cod_pre, 'id_prov' => $model->id_prov]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="presupuesto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
