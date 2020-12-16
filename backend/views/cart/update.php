<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cart */

$this->title = Yii::t('app', 'Update Cart: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Carts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cart-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
