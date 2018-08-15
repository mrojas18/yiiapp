<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Presupuesto]].
 *
 * @see Presupuesto
 */
class PresupuestoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Presupuesto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Presupuesto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
