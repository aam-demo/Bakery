<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\OrderForm;
use app\models\Order;
use app\models\Products;

class OrderController extends Controller {

    public function actionIndex($id) {
        assert($id > 0);
        $product = Products::findOne($id);
        assert(isset($product));
        $model = new OrderForm();

        if (Yii::$app->request->isPost) {
            //POST 

            $model->load(Yii::$app->request->post());

            if ($model->validate()) {
                //TODO: store order in DB 
                $order = new Order();
                //etc.............


                return $this->render('success');
            } else {
                $errors = $model->errors;
            }
        } else {
            //GET
        }

        $model->Product = $product;

        return $this->render('index', ['model' => $model]);
    }

}
