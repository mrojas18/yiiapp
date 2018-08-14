<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedor */

$this->title = $model->cod_prov;
$this->params['breadcrumbs'][] = ['label' => 'Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_prov], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_prov], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro desea eliminar el proveedor?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cod_prov',
            'nom_prov',
            'cuil_prov',
            'dir_prov',
            'pro_prov',
            'est_prov',
        ],
    ]) ?>

</div>
