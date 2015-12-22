<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\HomeView;
use app\models\Products;

//use app\models\ContactForm;

class SiteController extends Controller {

    public function actionIndex() {
        $model = HomeView::FeaturedProduct();
        $all = HomeView::AllProducts(); 
        
        return $this->render('index', ['model' => $model ,
            'all'=> $all ]
        );
    }

    public function actionAbout() {
        return $this->render('about');
    }
}
