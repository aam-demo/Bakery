<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Order';
$product = $model->Product;
// model is  OrderForm
?>

<ol id="orderProcess">
    <li><span class="step-number">1</span>Choose Item</li>
    <li class="current"><span class="step-number">2</span>Details &amp; Submit</li>
    <li><span class="step-number">3</span>Receipt</li>
</ol>

<img style="float:right;"
     src="./Images/Products/Thumbnails/<?= $product->ImageName ?>" 
     alt="Image of <?= $product->Name ?>" />

<h1>Place Your Order: <?= $product->Name ?></h1>

<? $form = ActiveForm::begin([
/*'id' => '',
'action' => 'order/postback',             
'options' => ['class' => 'form-horizontal'], */
]) ?>

<fieldset class="no-legend">
    <div>
        <p class="description"><?= $product->Description ?></p>
    </div>
    <div class="fieldcontainer" >
        <!--<label for="orderEmail">Your Email Address</label>-->
        <?= $form->field($model, 'OrderEmail') ?>
        <!--<div>@Html.ValidationMessageFor(m => m.OrderEmail)</div>-->
    </div>

    <div class="fieldcontainer" >
        <!--<label for="orderShipping">Shipping Address</label>-->
        <?= $form->field($model, 'OrderShipping')->textArea(['rows' => '4']) ?>
        <!--<div>@Html.ValidationMessageFor(m => m.OrderShipping)</div>-->
    </div>

    <? /*TODO: remember quantity (if valid) on failed submit */ ?>
    <div class="fieldcontainer" >
        <label for="orderQty">Quantity</label>
        <input type="text" id="orderQty" name="orderQty" value="1" />
        x
        <span id="orderPrice"><?= number_format($product->Price, 2) ?></span>
        =
        <span id="orderTotal"><?= number_format($product->Price, 2) ?></span>
    </div>
    <p class="actions">
        <input type="hidden" name="Product.Id" value="<?= $product->Id ?>" />
        <?= Html::submitButton('Place order', ['class' => 'btn btn-primary']) ?>
    </p>
</fieldset>

<?php ActiveForm::end() ?>

<script src="./javascript/jquery.validate.min.js"></script>
<script src="./javascript/jquery.validate.unobtrusive.min.js"></script>

<script type="text/javascript">
    $(function () {
        var price = parseFloat($("#orderPrice").text()).toFixed(2),
                total = $("#orderTotal"),
                orderQty = $("#orderQty");

        orderQty.change(function () {
            var quantity = parseInt(orderQty.val());
            if (!quantity || quantity < 1) {
                orderQty.val(1);
                quantity = 1;
            } else if (quantity.toString() !== orderQty.val()) {
                orderQty.val(quantity);
            }
            total.text("$" + (price * quantity).toFixed(2));
        });
    });
</script>
