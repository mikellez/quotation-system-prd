<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = 'Update Company: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
        'searchCompanyDetailModel' => $searchCompanyDetailModel,
        'dataProviderCompanyDetail' => $dataProviderCompanyDetail,
        'disableDetail'=>$disableDetail
    ]) ?>

</div>
