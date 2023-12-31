<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TmpProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tmp Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmp-products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tmp Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'brand_name',
            'type',
            'code',
            //'image',
            //'project_currency',
            //'retail_base_price',
            //'project_base_price',
            //'threshold_discount',
            //'project_threshold_discount',
            //'admin_discount',
            //'standard_costing',
            //'agent_comm',
            //'description:ntext',
            //'product_type',
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
