<?php

use app\models\Todos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TodosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Todos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Todos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            [
                'attribute' => 'status',
                'label' => 'Done?',
                'format' => 'boolean',
                'filter' => [0 => 'Not Done', 1 => 'Done'],
                'contentOptions' => ['style' => 'width: 150px;'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Todos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
