<?php

namespace app\controllers;

use Yii;
use app\models\Presupuesto;
use app\models\PresupuestoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PresupuestoController implements the CRUD actions for Presupuesto model.
 */
class PresupuestoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Presupuesto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PresupuestoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Presupuesto model.
     * @param integer $id_pre
     * @param string $cod_pre
     * @param integer $id_prov
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pre, $cod_pre, $id_prov)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pre, $cod_pre, $id_prov),
        ]);
    }

    /**
     * Creates a new Presupuesto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Presupuesto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pre' => $model->id_pre, 'cod_pre' => $model->cod_pre, 'id_prov' => $model->id_prov]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Presupuesto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_pre
     * @param string $cod_pre
     * @param integer $id_prov
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pre, $cod_pre, $id_prov)
    {
        $model = $this->findModel($id_pre, $cod_pre, $id_prov);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pre' => $model->id_pre, 'cod_pre' => $model->cod_pre, 'id_prov' => $model->id_prov]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Presupuesto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_pre
     * @param string $cod_pre
     * @param integer $id_prov
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pre, $cod_pre, $id_prov)
    {
        $this->findModel($id_pre, $cod_pre, $id_prov)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Presupuesto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_pre
     * @param string $cod_pre
     * @param integer $id_prov
     * @return Presupuesto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pre, $cod_pre, $id_prov)
    {
        if (($model = Presupuesto::findOne(['id_pre' => $id_pre, 'cod_pre' => $cod_pre, 'id_prov' => $id_prov])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
