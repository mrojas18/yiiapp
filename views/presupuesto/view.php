<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Presupuesto */

$this->title = $model->id_pre;
$this->params['breadcrumbs'][] = ['label' => 'Presupuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presupuesto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pre' => $model->id_pre, 'cod_pre' => $model->cod_pre, 'id_prov' => $model->id_prov], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pre' => $model->id_pre, 'cod_pre' => $model->cod_pre, 'id_prov' => $model->id_prov], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pre',
            'cod_pre',
            'id_prov',
            'fec_pre',
            'vencimiento',
            'fecha_reg',
        ],
    ]) ?>

</div>
