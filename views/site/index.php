<?php
use yii\helpers\Url;

$this->title = 'Home';

// model is Products
?>

<div style="font-size: 18pt; text-align: center;">Welcome to Fourth Coffee!</div>

<div id="featuredProduct">
    <img alt="Featured Product" 
         src="./Images/Products/<?=$model->ImageName ?>" />
    <div id="featuredProductInfo">
        <div id="productInfo">
            <h2><?= $model->Name ?></h2>
            <p class="price">$<?= number_format( $model->Price , 2) /*TODO helper*/ ?></p>
            <p class="description"><?= $model->Description?></p>
        </div>
        <div id="callToAction">
            <a class="order-button" 
               href="<?= Url::to( [ 'order/index' , 'id'=>  $model->Id ]) ?>" 
               title="Order <?= $model->Name ?>">Order Now</a>
        </div>
    </div>
</div>

<div id="productsWrapper">
    <ul id="products">

        <? foreach ($all as $p ) { ?>
        
            <li class="product">
                <a href="<?= Url::to(['order/index' , 'id'=>  $p->Id]) ?>" 
                   title="Order <?=$p->Name?>">
                    <img class="hide-from-desktop" 
                         src="./Images/Products/Thumbnails/<?=$p->ImageName?>" 
                         alt="Image of <?=$p->Name?>" />

                    <div class="productInfo">
                        <h3><?=$p->Name?></h3>
                        <img class="product-image hide-from-mobile" 
                             src="./Images/Products/Thumbnails/<?=$p->ImageName?>" 
                             alt="Image of <?=$p->Name?>" />
                        <p class="description"><?=$p->Description?></p>
                        <p class="price hide-from-desktop">$<?= number_format( $p->Price,2) /*TODO:helper*/?></p>
                    </div>
                </a>

                <!-- Desktop only -->
                <div class="action  hide-from-mobile">
                    <p class="price">$<?= number_format( $p->Price ,2)?></p>
                    <a class="order-button" 
                       href="<?= Url::to(['order/index' , 'id'=>  $p->Id]) ?>" 
                       title="Order <?=$p->Name?>">Order Now</a>
                </div>

            </li>
        <?}?>
    </ul>
</div>
