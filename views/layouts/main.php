<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs; */
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>   
        <title>Fourth Coffee - <?= $this->title ?></title>
        <!--<script src="./javascript/modernizr-2.6.2.js"></script>-->
        <script src="./javascript/jquery-1.10.2.min.js"></script>    
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div id="page" style="margin-bottom:35px;">
            <p class="site-title"><a 
                    href="./">Fourth Coffee</a></p>
            <nav>
                <ul>
                    <li><a href=".">Home</a></li>
                    <li><a href="<?= Url::to(['site/about'] )?>">About Us</a></li>
                </ul>
            </nav>
            <div id="body">
                <?= $content ?>
            </div>
            <footer>
                &copy; <?= date("Y") ?> - Fourth Coffee
            </footer>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
